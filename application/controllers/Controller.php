<?php defined('BASEPATH') OR exit('No direct scripts allowed');

class Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function check_auth($page) {
        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('msg' , "Log in first");
            redirect('login');

        }
    }

    public function login(){
        $this->load->view('sessions/login');
    }

    public function auth(){
        $this->session->set_userdata('user_phone', 'O759701314');
        $this->session->set_userdata('logged_in', TRUE);
        redirect(base_url('landing'));
    }

    public function landing(){
        $this->check_auth('landing');
        $this->load->view('sessions/landing');

    }

    public function logout(){
        $this->session->unset_userdata('user_phone');
        $this->session->unset_userdata('logged_in');

        redirect(base_url('login'));
    }
}