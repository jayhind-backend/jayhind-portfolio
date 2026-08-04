<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
         $this->load->model('Portfolio_model');

        $data = $this->Portfolio_model->getPortfolio();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('home',$data);
        $this->load->view('template/footer');
    }

    public function about()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('about');
        $this->load->view('template/footer');
    }

    public function projects()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('projects');
        $this->load->view('template/footer');
    }

    public function contact()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('contact');
        $this->load->view('template/footer');
    }

}