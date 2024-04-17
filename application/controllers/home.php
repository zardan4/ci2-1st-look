<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('QuestionsModel');
        $this->load->library("pagination");
    }

    public function index()
    {
        // pagination
        // $this->data['page'] = (int)$this->input->get('page') === 0 ? 1 : (int)$this->input->get('page');
        $offset = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        
        $config = array();
        $config['base_url'] = base_url('') . 'home';
        $config['total_rows'] = $this->QuestionsModel->getCountAll();
        $config['per_page'] = 5;
        $config['uri_segment'] = 2;

        $this->pagination->initialize($config);
        
        $this->data["links"] = $this->pagination->create_links();
        $this->data['page'] = $offset / $config['per_page'] + 1;

        // other data
        $this->data['title'] = "All questions";
        $this->data['questions'] = $this->QuestionsModel->getAllQuestions(
            // ($this->data['page'] - 1) * $config['per_page'], 
            // $config['per_page']
            $offset,
            $config['per_page'],
        );
        $this->data['questions_amount'] = $this->QuestionsModel->getCountAll();

        $this->load->view('HomeView.php', $this->data);
    }
}
