<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDosen extends CI_Model {
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
}