<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_team extends CI_Controller {

	public function index()
	{
	//	$data['add'] = $this->my_model->get_all_data();  
		//echo "<pre>"; print_r ($data['add']);die();
		$this->load->view('our_team');
		
	}
}
