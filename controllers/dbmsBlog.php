<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbmsBlog extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/admin_page');
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/admin_view');
		$this->load->view('templates/footer');
	}

		public function reply()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav.php');
		$this->load->view('users/admin_message.php');
		$this->load->view('templates/footer');
	}


}
