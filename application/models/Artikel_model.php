<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function tampilkan_data(){
		$sql = $this->db->query("select * from artikel");
		return $sql->result();
	}
	

}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */
?>
