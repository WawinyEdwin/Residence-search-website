<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landlord extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

    public function home()
	{
		$this->load->view('pageheader');
		$this->load->view('landlord/home');
		$this->load->view('footer');
	}

	public function housing()
	{
		$this->load->view('pageheader');
		$this->load->view('landlord/housing');
		$this->load->view('footer');
	}

	public function tenants()
	{
		$this->load->view('pageheader');
		$this->load->view('landlord/tenants');
		$this->load->view('footer');
	}

	public function booking()
	{
		$this->load->view('pageheader');
		$this->load->view('landlord/booking');
		$this->load->view('footer');
	}

    public function subscription()
	{
		$this->load->view('pageheader');
		$this->load->view('landlord/subscription');
		$this->load->view('footer');
	}
}