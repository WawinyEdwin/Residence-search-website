<?php 
class User_Model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getUsers(){
        $data = $this->db->query();
        print_r($data);
    }

    //checking data submission to db to verify login
    public function login($user_phone, $user_psw1)
    {
        $this->db->where('user_phone', $user_phone);
        $this0>db->where('user_psw1', md5($user_psw1));
        $this->db
    }

}
?>