<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  public function signup()
  {
    $this->load->model('User_m');

    $user_data = $this->input->post();
    $newUser = $this->User_m->insert($user_data);

    $this->session->set_userdata('user_session', $newUser);

    redirect('/tweets');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }

  public function signin()
  {
    $this->load->model('User_m');
    $signin_data = $this->input->post();
    $user_data = $this->User_m->check($signin_data['username'], $signin_data['password']);
    $this->session->set_userdata('user_session', $user_data);

    if(count($user_data) === 0) {
      // Bad password
      die('bad');
    } else {
      die('good');
    }
  }
}
