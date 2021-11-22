<?php defined('BASEPATH') OR exit('No direct scripts allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->database();
        $this->load->model('Feed_Model');
        $this->load->model('Sub_Model');
    }
    //login function that verifies different  user level groups
    public function log_in()
    {
        if ($this->input->post('log_in'))
        {
            $user_phone = $this->input->post('user_phone');
            $user_psw1 = $this->input->post('user_psw1');
            $que = $this->db->query(
                "select * from Users where user_phone = 'user_phone' and user_psw1 = 'user_psw1'"
            );
            $row = $que->num_rows();
            if (count($row) > 0)
            {
                redirect('patahouse/index');
            }
            else
            {
                $data ['error'] = "<h3> Invalid phone/password!</h3>";
            }
        }
        $this->load->view('patahouse/login', @$data);
    }

    //adds users to a database
    public function sign_up()
    {
        if ($this->input->post(register))
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
                $data['error'] = "<h3> Phone Number already in use! </h3>";
            }
            else
            {
                $que = $this->db->query(
                    "insert into tblUsers values ('$user_phone', '$user_psw1')"
                );
                $data['error'] = "<h3> Account Created Successfully! </h3>";
            }
            $this->load->view(header);
            $this->load->view('patahouse/login');
            $this->load->view('footer');
        }
    }
    public function auth(){

        $user_phone = $this->security->xss_clean($this->input->post('user_phone'));
        $user_psw1 = $this->security->xss_clean($this->input->post('user_psw1'));
        if ($user_phone == '070000' && $user_psw1 == 'abc')
        {
            //declare session
            $this->session->set_userdata( array('user_phone'=> $user_phone));
            $this->load->view('header');
            $this->load->view('patahouse/landing');
            $this->load->view('footer');
        } else if ($user_phone == '071111' && $user_psw1 == 'admin')
		{
			//declare session
			$this->session->set_userdata( array ('user_phone' => $user_phone));
            $this->load-view('adminheader',$data);
			$this->load->view('admin/admin',$data);
            $this->load->view('footer',$data);
		} else if ($user_phone == '072222' && $user_psw1 == 'landlord')
		{
			//declare session
			$this->load->set_userdata( array ('user_phone' => $user_phone));
            $this->load->view('pageheader',$data);
			$this->load->view('landlord/home',$data);
            $this->load->view('footer');
		}
         else 
        {
            $data['error'] = "Invalid account!";
            $this->load->view('header', $data);
            $this->load->view('patahouse/login', $data);
            $this->load->view('footer', $data);
        }
    }
    //checks authenticated users to restrict page
    public function check_auth($page)
    {
        if (!$this->session->userdata('logged_in'))
        {
            $this->session->set_flashdata("Restricted $page page!");
        }
    }

    //destroy session and logs a user out
    public function logout()
    {
        $this->session->unset_userdata('user_phone');
        $this->session->sess_destroy();
        redirect(base_url('patahouse/index'));
    }

    //inserting feedback data to our database.
    public function savefeedback()
    {
        if ($this->input->post('savefeed'))
        {
            $data['email'] = $this->input->post('email');
            $data['message'] = $this->input->post('message');
            $response = $this->Feed_model->savefeeds($data);
            if ($response == true )
            {
                echo "<h3> Your Feedback/Complaint has been recieved";
            }
            else
            {
                echo "<h3> Error: Retry! </h3>";
            }
        }
    }

    //subscription saving email to dbs
    public function sub_action()
    {
        if ($this->input->post('subscribe'))
        {
            $data['email'] = $this->input->post('email');
            $response = $this->Sub_Model->savemail($data);
            if ($response == true )
            {
                echo "<h3> Thank you for subscribing! </h3>";
            } 
            else 
            {
                echo "<h3> Error: Retry! </h3>";
            }
        }
    }

    //

}

?>