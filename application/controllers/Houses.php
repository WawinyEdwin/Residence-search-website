<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Houses extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function flats()
	{
		$this->load->view('header');
		$this->load->view('houses/flats');
		$this->load->view('footer');
	}

	public function addition()
	{
		$this->load->view('header');
		$this->load->view('houses/addition');
		$this->load->view('footer');
	}
	public function apartment()
	{
		$this->load->view('header');
		$this->load->view('houses/apartment');
		$this->load->view('footer');
	}

	public function mabatini()
	{
		$this->load->view('header');
		$this->load->view('houses/mabatini');
		$this->load->view('footer');
	}

	public function rentals()
	{
		$this->load->view('header');
		$this->load->view('houses/rentals');
		$this->load->view('footer');
	}

	public function bedroom1()
	{
		$this->load->view('header');
		$this->load->view('houses/bedroom1');
		$this->load->view('footer');
	}

	public function bedroom2()
	{
		$this->load->view('header');
		$this->load->view('houses/bedroom2');
		$this->load->view('footer');
	}

	public function bedroom3()
	{
		$this->load->view('header');
		$this->load->view('houses/bedroom3');
		$this->load->view('footer');
	}

	public function bedroom4()
	{
		$this->load->view('header');
		$this->load->view('houses/bedroom4');
		$this->load->view('footer');
	}

	public function houses()
	{
		$this->load->view('header');
		$this->load->view('houses/houses');
		$this->load->view('footer');
	}


}