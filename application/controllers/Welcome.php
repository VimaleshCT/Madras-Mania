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
		$data['reels'] = $this->Usemodel->fetchInstagramReels();
		$data['categories_with_products'] = $this->Usemodel->get_selected_categories_with_products(4);
		$data["special_menu"] = $this->Usemodel->getTodaysSpecial();
		$data['events'] = $this->Usemodel->get_all_events();

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
		// Exclude certain categories
		$excluded_categories = [''];

		$data['categories_with_products'] = $this->Usemodel->get_all_categories_with_products();
		$data['viewpage'] = "menu";
		$this->load->view('welcome_message', $data);
	}
	public function gallery()
	{
		$data['viewpage'] = "gallery";
		$this->load->view('welcome_message', $data);
	}


	public function event_details($id)
	{


		// Fetch the event details using the ID
		$event = $this->Usemodel->get_event_by_id($id);

		// Check if the event exists
		if (!empty($event)) {
			$data['event'] = $event;

			$data['viewpage'] = "event_details";
		} else {

			show_404();
		}

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

		$this->load->model('Usemodel'); // Load your model
		$products = $this->Usemodel->get_products_by_day_and_meal($day, $meal);

		echo json_encode($products);
	}
	public function process_booking()
	{
		// Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^\+?\d{10,15}$/]');
		$this->form_validation->set_rules('person', 'Number of Persons', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Validation failed
			echo json_encode(['success' => false, 'message' => validation_errors()]);
			return;
		}

		// Prepare data for insertion
		$data = [
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'person' => $this->input->post('person'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time'),
		];
		$this->load->model('Usemodel');
		// Insert booking data
		if ($this->Usemodel->insert_booking($data)) {
			echo json_encode(['success' => true]);
		} else {
			echo json_encode(['success' => false, 'message' => 'Failed to save booking. Please try again.']);
		}
	}
}