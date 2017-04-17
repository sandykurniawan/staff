<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {

	public function index()
	{	
		$this->template->load('TDosen','vdetail_pend_formal');
		//$this->load->view('vdetail_pend_formal');
	}
}
