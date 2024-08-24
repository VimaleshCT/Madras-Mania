<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('Usemodel');
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$data['viewpage'] = "index";
		$this->load->view('welcome_message', $data);
	}

	public function aboutus()
	{
		$data['viewpage'] = "aboutus";
		$this->load->view('welcome_message', $data);
	}

	public function contact()
	{
		$data['viewpage'] = "contact";
		$this->load->view('welcome_message', $data);
	}
	public function menu()
	{
		$data['viewpage'] = "menu";
		$this->load->view('welcome_message', $data);
	}

}
