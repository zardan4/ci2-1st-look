<?php

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('AuthView.php', [
            "page_name" => "Authorization",
        ]);
    }

    public function login()
    {
        $this->form_validation->set_rules('login', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

        if ($this->form_validation->run() === false) {
            $this->index();
        } else {
            redirect('/home');
        }
    }

    // check if user exists and password entered correctly
    public function verifyUser()
    {
        $name = $this->input->post('login');
        $password = $this->input->post('password');

        $this->load->model('AuthModel');

        if ($this->AuthModel->login($name, $password)) {
            // user exists
            return true;
        }

        $this->form_validation->set_message('verifyUser', 'Incorrect credentials. Try again.');
        return false;
    }
}
