<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	protected $username_temp;

	public function register(){
		$this->load->library('form_validation');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi');
		$this->form_validation->set_message('min_length', 'password kurang dari 5 digit');
		$this->form_validation->set_error_delimiters('<p class="alert">','</p>');

		if($this->form_validation->run('register') == FALSE){
			$this->load->view('admin/form_register');
		}
		else{
			$this->load->model('User_model');
			$this->User_model->user_register($this->input->post(NULL,TRUE));
			redirect(base_url('user/login'));
		}
	}

	public function username_check($str){
		$this->load->model('User_model');
		if($this->User_model->exist_row_check('username', $str) > 0){
			$this->form_validation->set_message('username_check', 'Username sudah digunakan, mohon diganti yang lain');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}	

	public function login(){
		$this->load->library('form_validation');
		$input = $this->input->post(NULL,TRUE);
		$this->username_temp = @$input['username'];

		if($this->form_validation->run('login') == FALSE){
			$this->load->view('admin/form_login');
		}
		else{
			$this->load->library('session');
			$login_data = array(
					'username' => $input['username'],
					'login_status' => TRUE
				);

			$this->session->set_userdata($login_data);

			redirect(base_url('front/index'));
		}
	}

	public function password_check($str){
		$this->load->model('User_model');
		$user_detail = $this->User_model->get_user_detail($this->username_temp);
		if($user_detail){
			if($user_detail->password == crypt($str,$user_detail->password)){
				return TRUE;
			}
			else{
				$this->form_validation->set_message('password_check','Password salah');
				return FALSE;
			}			
		}
		else{
			$this->form_validation->set_message('password_check','Username tidak ada');
				return FALSE;
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect(base_url());
	}

}