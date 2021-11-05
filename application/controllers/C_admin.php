<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$data['title']='Tampilan Admin';
		$data['data']=$this->M_model->tampil_data()->result();
		
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates_admin/footer', $data);
		
}
	public function hapus($id){
		$where = array('id' => $id);
		$this->M_model->hapus_data($where, 'login');
		redirect('C_admin/index');
	}

	public function edit($id){
		$data['title']=' edit data';
		$where= array('id' =>$id);
		 $data['data'] = $this->M_model->edit_data($where, 'login')->result();
		 $this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/edit_rg', $data);
			$this->load->view('templates_admin/footer', $data);
	}
	public function update(){
		$id = $this->input->post('id');
		$nama= $this->input->post('name');
		$image=$this->input->post('image');
		$pass= $this->input->post('password');
		$role= $this->input->post('role_id');
		$active = $this->input->post('is_active');

		$data = array(
			
			'name'	=> $nama,
			'image'	=> $image,
			'password'	=> $pass,
			'role_id'	=> $role,
			'is_active'	=> $active
		);

		$where= array(
			'id'	=> $id,
		);

		$this->M_model->update_data($where,$data, 'login');
		redirect('C_admin/index');


	}
	
}
