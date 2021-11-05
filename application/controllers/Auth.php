  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');


	}

	public function index(){
		
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run()== false){
			$data['title']='Login';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');

		} 
		else{
			$this->_proses_login();
		}
		}

		private function _proses_login(){
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			$user= $this->db->get_where('login',['email' => $email])->row_array();

			//jika user ada

			if($user) {
				//jika user aktif
				if($user['is_active'] == 1){
					//cek passwordnya
					if(password_verify($password, $user['password'])){
						$data = [
							'email'=> $user['email'],
							'role_id' => $user['role_id']
						];
						//untuk coding nyambungin ke yg berikutya
						$this->session->set_userdata($data);
						if($user['role_id']== 1){

							redirect('C_admin');
						}
						 else{

							redirect('C_admin');
						}

						}else {
							$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. please Login </div>');
							redirect('Auth');
						}
					}
				 else {
					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. please Login </div>');
							redirect('Auth');

				}
			}else{
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. please Login </div>');
							redirect('Auth');


		}


		
	}

	public function registration()

	{
		$data['title']='Wpu User Registration';
		
		$this->form_validation->set_rules('name','Name','required|trim'); 
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|valid_email|is_unique[login.email]',[
			'is_unique'=>'this email has already registered!'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[ 
			'matches'=>'password dont mact!',
			'min_length' =>'Password too short']); 
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]'); 


		if ($this->form_validation->run() == false){
			$data['title']='User Registration';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/registration');
		$this->load->view('templates/auth_footer');


		}
		else{
			$data = [
				'name' =>htmlspecialchars($this->input->post('name',true)),
				'email' =>htmlspecialchars($this->input->post('email',true)),
				'image'=> 'default.jpg',
				'password'=>  password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'role_id' => '2',
				'is_active'=> '1',
				'date_created' => time()

				
			];
			$this->db->insert('login',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. please Login </div>');
			redirect('auth');
		}
	}

		public function Logout(){
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('password');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. please Login </div>');
			redirect('auth');
		}

		

		
				
		
		

	}
