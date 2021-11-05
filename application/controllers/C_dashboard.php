<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function index()
	{
		$data['title']='dashboard';
		$data['user']=$this->db->get_where('login',['email' => $this->session->userdata('email')])->row_array();
		
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/topbar', $data);
		
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer', $data);
		
}
}
