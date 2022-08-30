<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('base/footer');
	}

	public function balemara(){
		$this->load->view('base/header');
		$this->load->view('balemara');
		$this->load->view('base/footer');
	}
}
