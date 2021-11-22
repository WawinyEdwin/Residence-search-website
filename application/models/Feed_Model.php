<?php 

class Feed_Model extends CI_Model {

    function savefeeds($data)
    {
        $this->db->insert('tblFeedback', $data);
        return true;
    }
}
?>