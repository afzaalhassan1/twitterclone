<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  public function signup()
  {
    $this->load->model('User_m');

    $user_data = $this->input->post();
    $this->User_m->insert($user_data);

    $this->session->set_userdata('user', $user_data);


    redirect('/tweets');
  }
}
