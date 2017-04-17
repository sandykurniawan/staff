<?php

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		} else if ($this->session->userdata('grup') == '1') {
			redirect('admin');}
		// } else if ($this->session->userdata('logged_in' == '0')) {
		// 	redirect('auth/firstlogin');
		// }
		$this->load->helper('text');
		$this->load->model('mdosen');
	}
	public function index() {
		$data['name'] = $this->session->userdata('name');
		$data['title']='Home page | Dosen';
		$this->template->load('TDosen','blank',$data);
	}

	public function updatePassword(){
		$newpass = $this->input->post('password');
		$oldpass = '12345678';
		$id = $this->session->userdata('username');
		$data_update = array(
			'password' => md5($newpass),
			'logged'=> 1
 		);

		if ($oldpass !== $newpass){
			$res = $this->mdosen->updateData($data_update, $id);

			if ($res){
				$this->session->set_flashdata('pesan', 
						'<div class="alert alert-success" role="alert">
		  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  				<strong>Password berhasil diubah</strong>
						</div>');
				redirect('dosen');
			} else {
				$this->session->set_flashdata('pesan', 
						'<div class="alert alert-danger" role="alert">
		  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  				<strong>Password gagal diubah</strong>
						</div>');
				redirect('auth/firstlogin');
			}
		} else {
			redirect('auth/firstlogin');
		}
	}

	// public function 

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect(base_url());
	}

	public function detformal(){
		$data['name'] = $this->session->userdata('name');
		$data['title']='User Table | Dosen';
		$this->template->load('TDosen','vdetail_pend_formal',$data);
	}

	public function editformal(){
		$data['name'] = $this->session->userdata('name');
		$data['title']='User Table | Dosen';
		$this->template->load('TDosen','vedit_pend_formal',$data);
	}

	public function detpribadi(){
		$data['name'] = $this->session->userdata('name');
		$data['title']='User Table | Dosen';
		$this->template->load('TDosen','vdetail_pribadi',$data);
	}

	public function editpribadi(){
		$data['name'] = $this->session->userdata('name');
		$data['title']='User Table | Dosen';
		$this->template->load('TDosen','vedit_pribadi',$data);
	}

}
?>