<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function admin()
	{
		$data['title'] = 'Admin Login';
		$this->load->view('dashboards/login', $data);
	}
}

?>