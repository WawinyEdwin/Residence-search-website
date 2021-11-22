<?php 

class Book extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Book_Model');
        $this->load->model('Search_Model');
    }
    public function savebooking()
    {
       // $this->load->view('patahouse/book');
        if ($this->input->post(save))
        {
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['phone_no'] = $this->input->post('phone_no');
            $data['house_no'] = $this->input->post('house_no');
            $data['dateIn'] = $this->input->post('dateIn');
            $data['timeIn'] = $this->input->post('timeIn');

            $response = $this->Book_model->saverecords($data);
            if ($response == true) 
            {
                echo "<h3> Booking Successful! </h3>";
            } else {
                echo "<h3> Error: Retry!</h3>";
            }

        }
    }
    //search query to the database
    public function search_action()
    {
        $location = $this->input->post('location');
        $price = $this->input->post('price');
        $data['results'] = $this->Search_Model->search($location);
        $data['results'] = $this->Search_Model->search($price);

        if()
        {

        }

        $this->load->view('header');
        $this->load->view('patahouse/search');
        $this->load->view('footer');
    }
}
?>