<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mabatini extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function mabatini1(){
		$this->load->view('header');
		$this->load->view('mabatini/mabatini1');
		$this->load->view('footer');
	}

    public function mabatini2(){
		$this->load->view('header');
		$this->load->view('mabatini/mabatini2');
		$this->load->view('footer');
	}
	
    public function mabatini3(){
		$this->load->view('header');
		$this->load->view('mabatini/mabatini3');
		$this->load->view('footer');
	}
	
    public function mabatini4(){
		$this->load->view('header');
		$this->load->view('mabatini/mabatini4');
		$this->load->view('footer');
	}
	
}
