<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_visitor');
	}

	public function index()
	{
		$data['title']='Home Page | Visitor';
		$this->template->load('template','visitor/home',$data);
	}
}
