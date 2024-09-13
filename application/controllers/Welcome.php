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
		$data['days'] = ['Tuesday', 'Wednesday', 'Friday'];
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
	// Fetch meals based on the selected day via AJAX
	public function get_meals_by_day()
	{
		$day = $this->input->post('day');

		// Fetch meals for the selected day
		$meals = $this->Usemodel->get_unique_meals_by_day($day);

		// Check if any meals are found and return the JSON response
		if (!empty($meals)) {
			echo json_encode($meals);
		} else {
			echo json_encode([]);
		}
	}

	// Fetch products based on selected day and meal via AJAX
	public function get_products_by_day_and_meal()
	{
		$day = $this->input->post('day');
		$meal = $this->input->post('meal');

		// Fetch products for the selected day and meal
		$products = $this->Usemodel->get_products_by_day_and_meal($day, $meal);

		// Check if any products are found and return the JSON response
		if (!empty($products)) {
			echo json_encode($products);
		} else {
			echo json_encode([]);
		}
	}
}
