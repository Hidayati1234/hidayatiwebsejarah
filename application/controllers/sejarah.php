<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		
		$this->load->view('sejarah');
		$this->load->view('templates/footer');
	}
}
