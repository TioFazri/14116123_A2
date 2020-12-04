<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class login extends CI_Controller {

        public function __construct() {
        parent:: __construct();
        $this->load->model('model','model_model');
    }
    
    public function index () {
        if($this->session->userdata('email')) {
            redirect('user');
        }
        $this->load->view('index');
    }

    public function ceklogin() {
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getuser = $this->model_model->getusername($username);

        if($getuser) {
            $data = ['username'=>$username,
                    'loggedin_time'=>time()];
            $this->session->set_userdata($data);
            redirect('user');
        } else {
            $this->session->set_flashdata('message','<p>User tidak terdaftar</p>');
            redirect('login');
            }
    }
}



?>