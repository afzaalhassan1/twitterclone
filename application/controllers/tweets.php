<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tweets extends CI_Controller {

  public function index()
  {
    $this->load->model('Tweet_m');
    $user_info = $this->session->userdata('user_session');

    $tweets = $this->Tweet_m->get_all();
    
    $this->template->set('user_data', $user_info);
    $this->template->set('tweets', $tweets);
    $this->template->build('tweet_v');
  }

  public function create()
  {
    $this->load->model('Tweet_m');
    $tweet_info = $this->input->post();

    $user_info = $this->session->userdata('user_session');
    $tweet_info['user_id'] = $user_info['id'];

    $this->Tweet_m->insert($tweet_info);
  }
}
