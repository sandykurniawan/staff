<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {
	
	public function insert($data){
		$res = $this->db->insert('user', $data);
		return $res;
	}

	public function get($table = "",$where = ""){
		$data = $this->db->query('select * from '.$table.' '.$where);
		return $data->result_array();
	}

	public function getUser($params){
		$query = 'SELECT * FROM user WHERE username ="'.$params.'"';
        $data = $this->db->query($query);
		// $data = $this->db->query('select * from '.$table.' '.$where);
		return $data->result_array();
	}

	public function updateData($data, $id){
		// $res = $this->db->update($tabel, $data, $where);
		$this->db->where('username', $id);
		$res = $this->db->update('user', $data);
		// $res = $this->db->affected_rows();
		return $res;
	}

	public function delete($tabel, $where){
		$res = $this->db->delete($tabel, $where);
		return $res;
	}

	public function countUser(){
		$query = 'SELECT * FROM user WHERE grup = 2 ';
        $data = $this->db->query($query);
		// $data = $this->db->query('select * from '.$table.' '.$where);
		return $data->num_rows();
	}
}