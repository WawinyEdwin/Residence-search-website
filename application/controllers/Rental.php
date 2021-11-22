<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function rental1(){
		$this->load->view('header');
		$this->load->view('rental/rental1');
		$this->load->view('footer');
	}

    public function rental2(){
		$this->load->view('header');
		$this->load->view('rental/rental2');
		$this->load->view('footer');
	}
	
    public function rental3(){
		$this->load->view('header');
		$this->load->view('rental/rental3');
		$this->load->view('footer');
	}
	
    public function rental4(){
		$this->load->view('header');
		$this->load->view('rental/rental4');
		$this->load->view('footer');
	}
	
}
