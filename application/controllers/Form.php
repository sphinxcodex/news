<?php
/**
 * @author sphinx <ojinakatochukwu@gmail.com>
 * controller for processing form input
 */
class form extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');
  }

  /**
   * index function for processing form input
   * uses the code igniter form validation library
   * @return void
   */

  public function index()
  {
    $data['url'] = base_url();
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required|min_length[5]|max_length[12]');
    $this->form_validation->set_rules('confirm','Password verification','required|matches[password]');
    $this->form_validation->set_rules('email','Email Address','required|valid_email');

    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header',$data);
      $this->load->view('myform',$data);
      $this->load->view('templates/footer',$data);
    }
    else
    {
      $this->load->view('templates/header',$data);
      $this->load->view('formsuccess',$data);
      $this->load->view('templates/footer',$data);
    }
  }
}

 ?>
