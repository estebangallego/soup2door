<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = 'Hello World';
		$this->load->view('admin_header', $data);
		$this->load->view('admin_dashboard');
		$this->load->view('templates/footer');
	}
}