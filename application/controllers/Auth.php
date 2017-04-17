<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('login');
	}

	public function cek_login() {
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
		);
		$this->load->model('mauth'); // load model
		$hasil = $this->mauth->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = $sess->logged;
				$sess_data['iduser'] = $sess->iduser;
				$sess_data['username'] = $sess->username;
				$sess_data['name'] = $sess->name;
				$sess_data['grup'] = $sess->grup;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('grup') == '1') {
				redirect('admin');
			}
			else if ($this->session->userdata('grup') == '2') {
				if ($this->session->userdata('logged_in') == '0'){
					//edit update password
					redirect('auth/firstLogin');
				} else {
					redirect('dosen');
				}	
			}
		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function firstLogin() {
		$data['name'] = $this->session->userdata('name');
		$data['title']='Change Password | Dosen';
		$this->template->load('TBlank','dosen/password',$data);
	}

}

?>