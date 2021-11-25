<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	public function countTotalSiswa()
	{
		$sql = "SELECT * FROM siswa";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
}
