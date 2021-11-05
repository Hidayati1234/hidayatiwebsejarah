<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pen extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		
		$this->load->view('pen');
		$this->load->view('templates/footer');
	}
}
