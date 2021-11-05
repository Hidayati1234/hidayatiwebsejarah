<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		
		$this->load->view('desa');
		$this->load->view('templates/footer');
	}
}
