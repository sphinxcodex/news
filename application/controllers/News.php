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

class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->library('pagination');
        //$this->output->enable_profiler(TRUE);
    }

    /**
     * loads when the news controller is
     * called without any arguments
     * @return void none
     */
    public function index()
    {
        // size contains the number of rows in the query result set
        $size = $this->news_model->count('news');

        //change per_page variable to change number of news items
        //displayed per page
        $per_page = 4;
        $segment = $this->uri->segment(3);
        if (empty($segment))
        {
            $segment = 0;
        }
        if ($segment >= $size)
        {
            // show the default 404 page
            show_404();
        }
        $config['base_url'] = base_url() . 'index.php/news/index';
        $config['per_page'] = $per_page;
        $config['total_rows'] = $size;
        $config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['next_tag_open'] = '<li class="page-item ">';
        $config['next_link'] = 'Next';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="page-item ">';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item page-link active">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item ">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['news'] = $this->news_model->paginate($per_page, $segment);
        $data['title'] = 'Index page News Archive';
        $data['foot'] = "made by sphinx";
        $data['url'] = base_url();

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }
        $data['title'] = $data['news_item']['title'];
        $data['foot'] = "made by sphinx";
        $data['url'] = base_url();
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);
    }

    /**
     * function used for adding news items to the database
     * @return void [description]
     */
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'create a news item';
        $data['url'] = base_url();

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer', $data);
        }
    }

    public function no_page()
    {
        $data['title'] = 'page not found';
        $data['url'] = base_url();
        $this->load->view('templates/header', $data);
        $this->load->view('news/page_not_found');
        $this->load->view('templates/footer');
    }

    public function encrypt()
    {
        echo '<h1>Class testing page</h1>';
        $prefs = array('show_next_prev' => TRUE, 'next_prev_url' => base_url() . 'news/test');
        $this->load->library('calendar', $prefs);
        echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));

        $this->load->library('encryption');
        $data = array('cipher' => 'aes-256',
                      'mode' => 'ctr',
                      'key' => 'jhndfgvcxsawertygfdcxoplmnghyjkc'
                     );
        $key = $this->encryption->initialize($data);
        $plain_text = 'i am on my way to being a wonderful php developer';
        $cipher_text = $this->encryption->encrypt($plain_text);
        echo $cipher_text;
        $new_text = $this->encryption->decrypt($cipher_text);
        echo '<br />' . $new_text;
    }

    /**
     * @param none Description
     * @author sphinx
     * @return void
     */
    public function upload()
    {
        $this->load->helper('form');
        $this->load->helper('url');

        $config['upload_path'] = './upload/images';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size'] = 1000;
        //$config['max_width'] = 1024;
        //$config['max_height'] = 768;
        $this->load->library('upload', $config);
        $data['url'] = base_url();
        $data['title'] = 'Upload an image';

        if (!$this->upload->do_upload('userfile'))
        {
            $this->load->view('templates/header', $data);
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $this->load->view('templates/header', $data);
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function paginate()
    {
        $this->load->helper('url');
        $this->load->library('pagination');
        $size = $this->news_model->count('news');
        $per_page = 4;
        $segment = $this->uri->segment(3);
        if (empty($segment) || $segment >= $size)
        {
            $segment = 0;
        }

        $config['base_url'] = base_url() . 'index.php/news/paginate';
        $config['total_rows'] = $size;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);
        $data['news'] = $this->news_model->paginate($per_page, $segment);
        $this->load->view('show', $data);
    }

    public function session()
    {
        $this->load->library('session');
        $session_data = array(
            'name' => 'sphinx',
            'age' => 'nii juu nii sai',
            'occupation' => 'student',
            'school' => 'futo');
        $this->session->set_userdata($session_data);
        echo $this->session->userdata('age') . '<br>';
        echo 'session id: ' . session_id() . '<br>';
        $visits = $this->input->cookie('visits');

        //if the cookie has not been set already,set it
        if ($visits == NULL)
        {
            $visits = 1;
            $this->input->set_cookie('visits', $visits, '20');
            echo 'thanks for visiting us for the first time<br>';
        }
        //if this is not the first visit
        if ($visits != 1)
        {
            echo 'you have visited us ' . $visits . ' times';
        }
        $visits++;
        $this->input->set_cookie('visits', $visits, '20');
    }

    public function table()
    {
        //testing the table library
        $this->load->library('table');
        $data = array(
            array('name', 'age', 'sex'),
            array('sphinx', '22', 'male'),
            array('preston', '22', 'male'),
            array('busta', '22', 'male'),
            array('naza', '21', 'male')
        );
        echo $this->table->generate($data) . '<br>';

        // testing the user_agent library
        $this->load->library('user_agent');
        echo $this->agent->platform() . '<br>';
        echo $this->agent->browser() . '<br>';
        echo $this->agent->version() . '<br>';

        // testing the zip library
        $this->load->library('zip');
        $this->zip->compression_level = 9;
        $name = 'test.txt';
        $test_data = 'hello world from codeigniter php framework';
        $this->zip->add_data($name, $test_data);
        $this->zip->read_file('./upload/images/naruto034.jpg');
        $this->zip->read_file('./upload/images/naruto077.jpg');
        $this->zip->read_file('./upload/images/no_thanks.jpeg');
        $this->zip->archive('./upload/new2.zip');
        //$this->zip->download('filecomp.zip');
        echo 'file has been zipped';
    }

}
