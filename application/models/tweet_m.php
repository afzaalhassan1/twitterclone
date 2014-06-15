<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tweet_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($tweet) {
    
    $this->db->insert('tweets', $tweet);

    return;
  }

  function get_all() {
    return $this->db->get('tweets')->result_array();
  }
}