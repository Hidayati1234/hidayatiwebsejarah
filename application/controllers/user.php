<?php 

class User extends CI_Controller{
	function __construct(){
		parent:: __construct();

		$this->load->model('m_user');

	}

	public function index(){
		$this->load->view('v_user');

	}

	public function login_aksi(){
		$user = $this->input->post('username',true);
		$pass =md5($this->input->post('password',true));

		//rule validation

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() != FALSE) {
			$where = array(
				'username' => $user,
				'password' =>$pass
			);
			$cekLogin =$this->m_user->cek_login($where)->num_rows();

			if($cekLogin > 0){
				$sess_data =array(
					'username' => $user,
					'login'=>'oke'

				);

				$this->session->set_userdata($sess_data);
				redirect(base_url('Welcome'));
			}else{
				redirect(base_url('user'));
			}

		}else{
			$this->load->view('v_user');

		}



	}

	public function logout(){
		$this->session->session_destroy();
		redirect(base_url('user'));


	}



 }
