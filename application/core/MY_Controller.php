<?php
class MY_Controller extends CI_Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();

        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in() &&  $this->uri->segment(1) !== 'auth') {
            redirect('auth', 'refresh');
            return;
        }

        // $this->data['current_user'] = $this->ion_auth->user()->row();
        $this->data['is_admin'] = $this->ion_auth->is_admin();
    }
}
