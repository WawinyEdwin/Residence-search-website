<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patahouse extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('patahouse/landing');
		$this->load->view('footer');
	}

	public function forgotpassword(){
		$this->load->view('header');
		$this->load->view('patahouse/forgotpassword');
		$this->load->view('footer');	
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('patahouse/login');
		$this->load->view('footer');
	}

	public function mypage(){
		$this->load->view('myheader');
		$this->load->view('patahouse/mypage');
		$this->load->view('footer');
	}

	public function registration()
	{
		$this->load->view('header');
		$this->load->view('patahouse/registration');
		$this->load->view('footer');


	}

	public function feedback()
	{
		$this->load->view('myheader');
		$this->load->view('patahouse/feedback');
		$this->load->view('footer');
	}

	public function account()
	{
		$this->load->view('header');
		$this->load->view('patahouse/account');
		$this->load->view('footer');
	}

	public function search()
	{
		$this->load->view('header');
		$this->load->view('houses');
		$this->load->view('footer');
	}

	public function policy()
	{
		$this->load->view('header');
		$this->load->view('patahouse/policy');
		$this->load->view('footer');
	}

	public function terms()
	{
		$this->load->view('header');
		$this->load->view('patahouse/terms');
		$this->load->view('footer');
	}

	public function details()
	{
		$this->load->view('myheader');
		$this->load->view('patahouse/details');
		$this->load->view('footer');
	}

	public function orders()
	{
		$this->load->view('myheader');
		$this->load->view('patahouse/orders');
		$this->load->view('footer');
	}

	public function help(){
		$this->load->view('header');
		$this->load->view('patahouse/help');
		$this->load->view('footer');
	}

	public function advertising(){
		$this->load->view('header');
		$this->load->view('patahouse/advertising');
		$this->load->view('footer');
	}

	public function choice(){
		$this->load->view('patahouse/choice');
		$this->load->view('footer');
	}

	public function payment(){
		$this->load->view('myheader');
		$this->load->view('patahouse/payment');
		$this->load->view('footer');
	}
	public function book()
	{
		$this->load->view('myheader');
		$this->load->view('patahouse/book');
		$this->load->view('footer');
	}
}

