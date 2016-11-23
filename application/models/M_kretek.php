<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kretek extends CI_Model {

	public function get($id=null)
	{
		$sql = "SELECT * FROM konten";

		if($id) {
			$sql .= " WHERE id={$id}";
		}
		$query = $this->db->query($sql);

		if($id) {
			return $query->row();
		} else {
			return $query->result();
		}
	}

}

/* End of file M_kretek.php */
/* Location: ./application/models/M_kretek.php */