<?php

session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper( 'url', 'session', 'database',);

    }

	public function auth(){

        $user_phone = $this->input->post('user_phone');
        $psw = $this->input->post('psw');
        if ($user_phone == '070000' && $psw == 'abc')
        {
            //declare session
            $this->session->set_userdata( array('user'=> $user_phone));
            $this->load->view('header');
            $this->load->view('patahouse/landing');
            $this->load->view('footer');
        } else if ($user_phone == '071111' && $psw == 'admin')
		{
			//declare session
			$this->session->set_userdata( array ('user' => $user_phone));
            $this->load->view('adminheader');
			$this->load->view('admin/admin');
            $this->load->view('footer');
		} else if ($user_phone == '072222' && $psw == 'landlord')
		{
			//declare session
			$this->load->set_userdata( array ('user' => $user_phone));
            $this->load->view('pageheader');
			$this->load->view('landlord/home');
            $this->load->view('footer');
		} else {
            $data['error'] = "Invalid account!";
            $this->load->view('patahouse/login', $data);
        }
    }
}