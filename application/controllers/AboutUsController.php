<?php 

    class AboutUsController extends CI_Controller{

        public function index(){
            $data['title'] = "About Us";
            
            $this->load->view('templates/header');
            $this->load->view('about-us/about');
            $this->load->view('templates/footer');
        }

    }

?>