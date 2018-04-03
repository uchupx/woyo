<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesforce extends CI_Controller {

	public function __construct() { //.public Function..................
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Salesforce_model');
	}

	public function index(){
		$this->listing();
	}

	
	public function listing(){
		$salesforce_model = $this->Salesforce_model;
		$rows = $salesforce_model->listing();
		$this->load->view('list_sf',['rows' => $rows]);
	}
	

	//Tambah Data.............
	 public function tambah(){
	 	$this->load->view('tambah_sf');
	}

	//insert
	public function insert(){

//validasi data....	
	$this->form_validation->set_rules('id_sf', 'ID', 'required');
	$this->form_validation->set_rules('nama_sf', 'Nama', 'required');
	$this->form_validation->set_rules('unit_sf', 'Unit', 'required');
	$this->form_validation->set_rules('tipe_sf', 'Tipe', 'required');
	$this->form_validation->set_rules('status_sf', 'Status', 'required');
	$this->form_validation->set_rules('noktp_sf', 'No.KTP', 'required');
	$this->form_validation->set_rules('notelp_sf', 'NoTelp', 'required');
	$this->form_validation->set_rules('email_sf', 'Email', 'required');
	$this->form_validation->set_rules('alamat_sf', 'Alamat', 'required');
	$this->form_validation->set_rules('perekrut_sf', 'Perekrut', 'required');

	if ($this->form_validation->run() == FALSE){
		$this->load->view('tambah_sf');
	}
	else{

		$id 		= $this->input->post('id_sf');
		$nama 		= $this->input->post('nama_sf');
		$unit 		= $this->input->post('unit_sf');
		$tipe 		= $this->input->post('tipe_sf');
		$status 	= $this->input->post('status_sf');
		$noktp 		= $this->input->post('noktp_sf');
		$notelp 	= $this->input->post('notelp_sf');
		$email 		= $this->input->post('email_sf');
		$alamat 	= $this->input->post('alamat_sf');
		$perekrut	= $this->input->post('perekrut_sf');

		$data = array(
			'id_sf' 			=>	$id,
			'nama_sf' 			=>	$nama,
			'unit_sf' 			=>	$unit,
			'tipe_sf' 			=>	$tipe,
			'status_sf' 		=>	$status,
			'noktp_sf' 			=>	$noktp,
			'notelp_sf' 		=>	$notelp,
			'email_sf' 			=>	$email,
			'alamat_sf' 		=>	$alamat,
			'perekrut_sf' 		=>	$perekrut,

		);

		$this->db->insert('sfmaster', $data);
		$salesforce_model = $this->Salesforce_model;
		$rows = $salesforce_model->listing();
		$this->load->view('list_sf',['rows' => $rows]);

	}

//insert data.....
		

	}
}

/**
* 
*/