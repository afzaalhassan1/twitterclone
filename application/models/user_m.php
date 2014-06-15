<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($data) {
    $this->db->insert('users', $data);

    $data['id'] = $this->db->insert_id();

    return $data;
  }

  function check($username, $password) {
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    return $this->db->get('users')->row_array();
  }
}