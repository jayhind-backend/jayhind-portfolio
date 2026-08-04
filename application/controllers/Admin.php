<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function login_check()
    {

        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('admin/login');
            return;
        }

        $email=$this->input->post('email',TRUE);
        $password=$this->input->post('password',TRUE);

        $admin=$this->Admin_model->checkLogin($email);

        if($admin)
        {

            // ---------- Plain Password ----------
            if($password==$admin->password)
            {

                $session=array(

                    'admin_id'=>$admin->id,

                    'admin_name'=>$admin->name,

                    'admin_email'=>$admin->email,

                    'admin_login'=>TRUE

                );

                $this->session->set_userdata($session);

                redirect('admin/dashboard');

            }

            else
            {

                $this->session->set_flashdata('error','Invalid Password');

                redirect('admin/login');

            }

        }
        else
        {

            $this->session->set_flashdata('error','Email Not Found');

            redirect('admin/login');

        }

    }

    public function dashboard()
    {

        if(!$this->session->userdata('admin_login'))
        {
            redirect('admin/login');
        }

        $this->load->view('admin/dashboard');

    }

    public function logout()
    {

        $this->session->sess_destroy();

        redirect('admin/login');

    }
	public function contact_messages()
{
    if(!$this->session->userdata('admin_login'))
    {
        redirect('admin/login');
    }

    $data['messages']=$this->Admin_model->getContactMessages();

    $this->load->view('admin/contact_messages',$data);
}
public function delete_message($id = 0)
{
    // Login Check
    if (!$this->session->userdata('admin_login'))
    {
        redirect('admin/login');
    }

    if (empty($id))
    {
        show_404();
    }

    $delete = $this->Admin_model->deleteMessage($id);

    if ($delete)
    {
        $this->session->set_flashdata('success', 'Message deleted successfully.');
    }
    else
    {
        $this->session->set_flashdata('error', 'Unable to delete message.');
    }

    redirect('admin/contact_messages');
}

}