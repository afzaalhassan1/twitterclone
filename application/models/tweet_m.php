<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tweet_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($tweet) {
    
    $this->db->insert('tweets', $tweet);

    return $this->db->insert_id();
  }

  function get_all() {
    $this->db->order_by('tweet_time', 'desc');
    return $this->db->get('tweets')->result_array();
  }

  function get($tweet_id) {
    $this->db->where('id', $tweet_id);
    return $this->db->get('tweets')->row_array();
  }
}