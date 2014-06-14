<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  public function signup()
  {
    $this->load->model('User_m');

    $form_data = $this->input->post();
    $this->User_m->insert($form_data);
    var_dump($form_data);die;
  }
}
