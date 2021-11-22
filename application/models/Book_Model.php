<?php

class Book_Model extends CI_Model
{
    //stores data concerning bookings to our database with every field captured. 
    function saverecords($data)
    {
        $this->db->insert('tblBookings', $data);
        return true;
    }
}
?>