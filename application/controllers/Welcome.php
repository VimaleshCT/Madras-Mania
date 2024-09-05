<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Usemodel');
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session'));
	}


	public function index()
	{
		$data['viewpage'] = "index";
		$data['categories_with_products'] = $this->Usemodel->get_selected_categories_with_products(4);
		$data["special_menu"] = $this->Usemodel->getTodaysSpecial();
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
		$excluded_categories = ['Parotta Vilas']; // Exclude Parotta Vilas
		$data['viewpage'] = "menu";
		$data['categories_with_products'] = $this->Usemodel->get_all_categories_with_products($excluded_categories);
		$this->load->view('welcome_message', $data);
	}
	public function gallery()
	{
		$data['viewpage'] = "gallery";
		$this->load->view('welcome_message', $data);
	}
}
