<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
	function __construct() {
        parent::__construct();
		$this->load->library('curl');
		$this->load->helper(array('form','url'));
    }

	public function index()
	{

		$data['salon_info'] = $this->curl->Getdata("https://saloncloudsplus.com/wsplus/information/5434");
	    //echo "<pre>"; print_r($data['salon_info']);die();
		$this->load->view('home', $data);
	}
}
