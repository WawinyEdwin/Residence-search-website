<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flat extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function flat1(){
		$this->load->view('header');
		$this->load->view('flat/flat1');
		$this->load->view('footer');
	}

    public function flat2(){
		$this->load->view('header');
		$this->load->view('flat/flat2');
		$this->load->view('footer');
	}
	
    public function flat3(){
		$this->load->view('header');
		$this->load->view('flat/flat3');
		$this->load->view('footer');
	}
	
    public function flat4(){
		$this->load->view('header');
		$this->load->view('flat/flat4');
		$this->load->view('footer');
	}
	
}

