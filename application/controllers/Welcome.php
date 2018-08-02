<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	  function __construct()
    {
        parent::__construct();
        $this->data = new stdClass();
        $this->load->Model('welcome_model');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session');
        


    }
	public function index()
	{   
	
        $this->load->view('user/header');
        $this->load->view('user/scan');
        $this->load->view('user/footer');
		
	}


	

   
}
