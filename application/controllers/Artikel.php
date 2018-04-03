<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Artikel_model');
	}

	public function index()
	{
		$this->tampilkan_data();
	}

	public function tampilkan_data(){

		$artikel_model = $this->Artikel_model;
		$rows = $artikel_model->tampilkan_data();
		$this->load->view('crud_read_artikel',['rows'=> $rows]);
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */