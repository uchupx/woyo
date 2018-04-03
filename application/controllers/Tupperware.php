<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tupperware extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('User_config');
  }

  public function index()
  {
    $this->listing();
  }

  public function listing()
  {
    $user_config=$this->User_config;
    $rows=$user_config->listing();
    $this->load->view('home',['rows'=>$rows]);
  }
}

?>
