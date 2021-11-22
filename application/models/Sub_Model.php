<?php 

class Sub_Model extends CI_Model {

    function savemail($data)
    {
        $this->db->insert('tblSubscriptions', $data);
        return true;
    }
}