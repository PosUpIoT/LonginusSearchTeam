<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture_model extends CI_Model {

		public function insert_picture($data) {
		$this->db->insert('pictures', $data);
	}

}

/* End of file Picture_model.php */
/* Location: ./application/models/Picture_model.php */