<?php

class Home extends MY_Controller
{
    public function index() {
        $this->data['title'] = "All questions";

        $this->load->view('HomeView.php', $this->data);
    }
}
