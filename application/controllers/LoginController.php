<?php

    class LoginController extends CI_Controller{

        public function index(){
            return $this->load->view("login/login.php");
        }

        public function loginProcess(){
            
        }
    }


?>