<?php

/*
 * created by sphinx as a test for learning the
 * CodeIgniter php framework, as well as learning the
 * MVC design structure
 */

/**
 * Controller for viewing news stored in the database
 * and to also, add news items to the database
 * @author sphinx
 */

class Pages extends CI_Controller{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function view($page = 'home') 
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) 
        {
            // the requested page does not exist
            show_404();
        }
        $data['title'] = ucfirst($page);
        $data['foot'] = "made by sphinx";
        $data['url'] = base_url();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}
