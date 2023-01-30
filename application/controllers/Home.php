	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Home extends CI_Controller
	{

		public function index()
		{
			$this->load->view('home');
		}


		public function appoinment()
		{
			$this->load->view('ajax-load/form-appointment');
		}

		

		public function aboutus()
		{
			$this->load->view('about');
		}

		public function highlights()
		{
			$this->load->view('highlights');
		}

		public function who_we_are()
		{
			$this->load->view('who-we-are');
		}

		public function achievementst()
		{
			$this->load->view('achievementst');
		}

		public function mission()
		{
			$this->load->view('mission');
		}


	

		public function disclaimer()
		{
			$this->load->view('disclaimer');
		}

		public function industry_type_and_subsidy()
		{
			$this->load->view('industry-type-and-subsidy');
		}

	

	


		public function view_services()
		{
			
			$this->load->view('view-service');
		}

		public function startup_and_business_support()
		{
			$this->load->view('startup_and_business_support');
		}

		public function industrial_association_support()
		{
			$this->load->view('industrial_association_support');
		}

		public function incubation_center_assistance()
		{
			$this->load->view('incubation_center_assistance');
		}

	}



	
	