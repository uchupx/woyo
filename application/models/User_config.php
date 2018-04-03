<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_config extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function listing()
  {
    $sql = $this->db->query("select * from user");
    return $sql->result();
  }
}
/* End of file ${TM_FILENAME:${1/(.+)/lUser_config.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/User_config/:application/models/${1/(.+)/lUser_config.php/}} */
