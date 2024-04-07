<?php

class Home extends CI_Controller
{
    public function index() {
        $this->load->view('HomeView.php', [
            "page_name" => "All questions",
        ]);
    }
}
