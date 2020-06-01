<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['web_name'] = 'web-eek';
		$this->load->view('back-end/login',$data);
	}

	public function proses()
	{
		$user = ($this->input->post('username') == 'admin_company' ? true:false);
		$pass = ($this->input->post('password') == '414414' ? true:false);
		if($user && $pass){
			$session = [
				'userdata' => $user,
				'status' => "Loged in"
			];
			$this->session->set_userdata($session);
			redirect('Admin');
		}else{
			$this->session->set_flashdata('error_msg','Username atau Password Salah');
			redirect('Login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}