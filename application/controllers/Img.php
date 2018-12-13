<?php
/**
 * Img class
 */
class Img extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('image_lib');
    }

    public function index()
    {
       $config['image_library'] = 'gd2';
       $config['source_image'] = './upload/images/naruto034.jpg';
       $config['wm_type'] = 'text';
       $config['wm_text'] = 'copyright 2018 sphinx';
       $config['wm_font_size'] = '16';
       $config['wm_font_path'] = './system/fonts/texb.ttf';
       $config['wm_font_color'] = 'ffffff';
       $config['wm_vrt_alignment'] = 'bottom';
       $config['wm_hor-alignment'] = 'center';
       $config['wm_padding'] = '20';

       $this->image_lib->initialize($config);

       if(!$this->image_lib->watermark())
       {
           echo $this->image_lib->display_errors();
       }
       else
       {
           echo $this->input->server('SERVER_PROTOCOL');
           echo '<br>watermark created successfully<br>';
       }
    }
}
?>
