<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($data) {
    
    $this->db->insert('users', $data);

    return;
  }

}