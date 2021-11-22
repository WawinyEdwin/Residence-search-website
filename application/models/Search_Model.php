<?php 

class Search_Model extends CI_Model {

    function search($data)
    {
        $this->db->like('name', $location);
        $this->db->like('name', $price);
        $query = $this->db->get('patahouse');
        return $query->result();
    }

}
?>