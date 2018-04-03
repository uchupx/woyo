<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesforce_model extends CI_Model {
	public function __construct() { //......................public Function..................
		parent::__construct();
}
	public function listing(){
		$sql = $this->db->query("select * from sfmaster");
		return $sql->result();
	}
}