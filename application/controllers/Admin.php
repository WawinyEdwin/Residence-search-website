<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		//$this->load->database();
	}

    public function admin()
	{
		$this->load->view('adminheader');
		$this->load->view('admin/admin');
		$this->load->view('footer');
	}

    public function addusers()
	{
		$this->load->view('adminheader');
		$this->load->view('admin/addusers');
		$this->load->view('footer');
	}

	public function addaccount()
	{
		$this->load->view('adminheader');
		$this->load->view('admin/addaccount');
		$this->load->view('footer');
    }

	public function newutilities()
	{
		$this->load->view('adminheader');
		$this->load->view('admin/newutilities');
		$this->load->view('footer');
    }

	public function add()
	{
		if ($this->input->post($adduser))
		{
		$user_phone = $this->input->post('user_phone');
		$user_psw1 = $this->input->post('user_psw1');
		$user_psw2 = $this->input->post('user_psw2');
		$que = $this->db->query(
			"select * from tblUsers where user_phone = '$user_phone'"
		);
		$row = $que->num_rows();
		if (count($row) > 0)
		{
			$data['error'] = "<h3> Account exists! </h3>"; 
		}
		else
		{
			$que = $this->db->query(
				"insert tblUsers values ('$user_phone' , '$user_psw1')"
			);
			$data['error'] = "<h3> Account Creation Successfull </h3>";
		}
		$this->load->view('header');
		$this->load->view('admin/adduser');
		$this->load->view('footer');
		}
	}
}
