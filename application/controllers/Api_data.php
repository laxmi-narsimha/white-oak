<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Api_data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Api_data_model', 'my_model');
		$this->load->database();
		$this->load->library('form_validation');
	}
	public function index()   // Get
	{
		$result = $this->my_model->get_data();
		//$result = $data['data'];
		//	echo "<pre>"; print_r ($result);die();
		foreach ($result as $key => $value) {
			if ($value['status'] == 1) {
				$status = "Active";
			} elseif ($value['status'] == 0) {
				$status = "De-Active";
			}
			$data['data'][$key] = [
				"id" => $value['id'],
				"name" => $value['name'],
				"email" => $value['email'],
				"phone" => $value['phone'],
				"message" => $value['message'],
				"image" => $value['image'],
				"status" => $status
			];
		}
		if (!empty($result)) {
			$data['msg'] = 'Success';
			$data['status'] = TRUE;
		} else {
			$data['msg'] = 'Failed';
			$data['status'] = FALSE;
		}
		echo json_encode($data);
		//echo "<pre>"; print_r ($data['data']);die();
		//$this->load->view('api_data');
	}
	public function insert_data()  //Insert
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|alpha_numeric_spaces|required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
		if (empty($_FILES['image']['name'])) {
			$this->form_validation->set_rules('image', 'Upload File', 'required');
		}
		if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
			$img_name = time() . $_FILES['image']['name'];
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload');
			$this->upload->initialize($config);
			$_FILES['image']['name'] = $img_name;
			$this->upload->do_upload('image');
			$img = str_replace(" ", "_", $img_name);
			//  print_r($data);die;
		}
		if ($this->form_validation->run() == true) {
			$set_data = array
			(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'message' => $this->input->post('message'),
				'image' => $img,
				'status' => $this->input->post('status')
			);
			$result = $this->my_model->add_data($set_data);
			$data['msg'] = 'Data Added Successfully';
		} else {
			$data['msg'] = 'Failed';
			$data['errors'] = validation_errors();
		}
		echo json_encode($data);
	}
	public function edit_data($id) //Update
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|alpha_numeric_spaces|required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
		if (empty($_FILES['image']['name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}
		if ($this->form_validation->run() == true) {
			$id = $_POST['id'];
			$data = [];
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['message'] = $this->input->post('message');
			$data['status'] = $this->input->post('status');
			$single_posts = $this->my_model->fetch_single_post($id);
			$single = $single_posts->result_array();
			if ($_FILES['image']['name'] != $single[0]['image']) {
				$images = unlink('uploads/' . $single[0]['image']);
				$img_name = time() . $_FILES['image']['name'];
				$config['upload_path'] = 'uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload');
				$this->upload->initialize($config);
				$_FILES['image']['name'] = $img_name;
				$this->upload->do_upload('image');
				$img = str_replace(" ", "_", $img_name);
				$data['image'] = $img;
			} else {
				$data['image'] = $single[0]['image'];
			}
			$post_insert = $this->my_model->post_update($id, $data);
			if ($post_insert == true) {
				$result['status'] = true;
				$result['message'] = " Updated succefully";
			}
		} else {
			$result['errors'] = validation_errors();
		}
		echo json_encode($result);
	}
	public function single_delete_record()  //Delete
	{
		$id = $_POST['id'];
		$result = $this->my_model->delete_single_record($id);
		if ($result == true) {
			$data['msg'] = 'Deleted Successfully';
			$data['status'] = TRUE;
		} else {
			$data['msg'] = 'Not Deleted';
			$data['status'] = FALSE;
		}
		echo json_encode($data);
	}
}
