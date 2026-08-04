<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Contact_model');
    }
public function save()
{
    $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('subject', 'Subject', 'required|min_length[5]');
    $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]');

    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('contact');
        $this->load->view('template/footer');
    }
    else
    {
        $data = array(
            'name'    => $this->input->post('name', TRUE),
            'email'   => $this->input->post('email', TRUE),
            'subject' => $this->input->post('subject', TRUE),
            'message' => $this->input->post('message', TRUE)
        );

        if($this->Contact_model->save($data))
        {
            $this->session->set_flashdata('success','Message sent successfully.');
        }
        else
        {
            $this->session->set_flashdata('error','Something went wrong.');
        }

        redirect('home/contact');
    }
}

}