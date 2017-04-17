<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
			
		} else if ($this->session->userdata('grup') == '2') {
			redirect('dosen');
		}
		$this->load->helper('text');
		$this->load->model('madmin');
		$this->load->library('email');
	}
	
	public function index() {
		$data['name'] = $this->session->userdata('name');
		$data['title']='Home Page | Admin';
		//$this->load->view('dashboard1');
		$this->template->load('TAdmin','admin/dash',$data);
	}

	public function sendEmail(){

		$config['protocol']  = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com'; //change this
		$config['smtp_port'] = '25';
		$config['smtp_user'] = 'staff.ifundip@gmail.com'; //change this
		$config['smtp_pass'] = 'staffifundip'; //change this
		$config['mailtype']  = 'html';
		$config['charset']   = 'iso-8859-1';
		$config['wordwrap']  = TRUE;
		$config['newline']   = "\r\n"; //use double quotes to comply with RFC 822 standard
		//$this->load->library('email'); // load email library
		$message = '<h1>Selamat, akun Staff IF Undip Anda telah dibuat</h1> </br>';
		$message .= '<p>Berikut adalah informasi login yang Anda perlukan:</p> <br>';
		$message .= '<p><strong>Username</t>: (email) </strong></p></br>';
		$message .= '<p><strong>Password</t>: (pass) </strong></p></br></br>';
		$message .= '<p>Anda dapat melakukan login pada link berikut :</p> <br>';
		$message .= '<p><?php echo base_url(auth) ?></p> <br>';

		$this->email->initialize($config);
		$this->email->to('sieghart.sandy@gmail.com');
		$this->email->from('staff.ifundip@gmail.com','CodexWorld');
		$this->email->subject('Test Email (HTML)');
		$this->email->message($message);
		$this->email->send();
	    // $this->email->from('staff.ifundip@gmail.com', 'Admin');
	    // $this->email->to($to);
	    // $this->email->subject('Akun Staff IF Undip');
	    // $this->email->message('test');
	    // $this->email->send();
	}

	public function user(){
		$data['name'] = $this->session->userdata('name');
		$data['title'] ='User Table | Admin';
		$data['data'] = $this->madmin->get('user','where grup = 2');
		$this->template->load('TAdmin','admin/user',$data);
	} 


	public function insert_user(){
		$username = $this->input->post('username');
		$cek = $this->madmin->getUser($username);
		if (count($cek) == 1){
			$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
	  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  				<strong>Username sudah terdaftar</strong>
					</div>');
			redirect('admin/user');
		} else {
			$nama = $this->input->post('nama');
			$pass = md5('12345678');
			$grup = 2;
			$log  = 0;

			$data_insert = array(
					'username' 	=> $username,
					'name' 		=> $nama,
					'password' 	=> $pass,
					'grup' 		=> $grup,
					'logged' 	=> $log
				);
			$res = $this->madmin->insert($data_insert);
			if ($res >=1){
				$this->session->set_flashdata('pesan', 
					'<div class="alert alert-success" role="alert">
	  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  				<strong>User baru berhasil ditambahkan!</strong>
					</div>');
				// $this->sendEmail($username);
				redirect('admin/user');
			} else {
				//echo "<script>alert('User gagal bertambah');</script>";
				$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
	  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  				<strong>User Gagal bertambah</strong>
					</div>');
				redirect('admin/user');
			}
		}			
	}

	public function edit($username){
		$edit = $this->madmin->getUser($username);
		$data['edit'] = array(
			'username' 	=> $edit[0]['username'],	 'name' => $edit[0]['name']
			);
		// $this->template->load('TAdmin');
		$data['name'] = $this->session->userdata('name');
		$data['title']='Home Page | Admin';
		//$this->load->view('dashboard1');
		$this->template->load('TAdmin','admin/edit_view',$data);
	}

	public function edit_user(){
		$name = $this->input->post('name');
		$id = $this->input->post('username');
		$data_update = array(
			'name' => $name
		);

		$res = $this->madmin->updateData($data_update, $id);

		if ($res){
			$this->session->set_flashdata('pesan', 
					'<div class="alert alert-success" role="alert">
	  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  				<strong>Data berhasil diubah</strong>
					</div>');
			redirect('admin/user');
		} else {
			$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
	  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  				<strong>Data berhasil diubah</strong>
					</div>');
			redirect('admin/user');
		}
	}

	public function delete($username){
		$where = array('username' => $username);
		//hapus semua data yang usernamenya $username
		$del1 = $this->madmin->delete('user', $where);
		//hapus hapus hapus



		if ($del1 >= 1){
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>User berhasil dihapus</strong>
				</div>');
			redirect('admin/user');
		} else {
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-danger" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>User berhasil dihapus</strong>
				</div>');
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect(base_url());
	}

	public function idcard(){
		$this->load->view('id');
		
	}
}
?>