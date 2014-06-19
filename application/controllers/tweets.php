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
    $reply_info = $this->input->post();

    $user_info = $this->session->userdata('user_session');
    $tweet_info['user_id'] = $user_info['id'];
    $reply_info['parent_id']=$user_info['id'];

    $new_tweet_id = $this->Tweet_m->insert($tweet_info);
    $new_reply_id = $this->Tweet_m->insert($reply_info);
    echo $new_tweet_id;
    echo $new_reply_id;
  }

  public function getTweet($tweetbyuser) {
    $this->load->model('Tweet_m');
    $tweet = $this->Tweet_m->get($tweetbyuser);
    echo json_encode($tweet);

  }

  public function getReply($replybyUser) {
    $this->load->model('Tweet_m');
    $reply = $this->Tweet_m->getr($replybyUser);
    echo json_encode($tweet);

  }

}
