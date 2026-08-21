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

            // ---------- Hashed Password With Plain Fallback For Legacy Rows ----------
            $valid=password_verify($password,$admin->password) || $password==$admin->password;

            if($valid)
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

public function users()
{
    if(!$this->session->userdata('admin_login'))
    {
        redirect('admin/login');
    }

    $data['users']=$this->Admin_model->getUsers();

    $this->load->view('admin/users',$data);
}

public function user_form($id = 0)
{
    if(!$this->session->userdata('admin_login'))
    {
        redirect('admin/login');
    }

    $data['user']=NULL;

    if($id)
    {
        $data['user']=$this->Admin_model->getUser($id);

        if(!$data['user'])
        {
            show_404();
        }
    }

    $this->load->view('admin/user_form',$data);
}

public function user_save()
{
    if(!$this->session->userdata('admin_login'))
    {
        redirect('admin/login');
    }

    $id=(int) $this->input->post('id',TRUE);

    $this->form_validation->set_rules('name','Name','required|max_length[100]');
    $this->form_validation->set_rules('email','Email','required|valid_email|max_length[100]');

    // Password is mandatory only while creating a new user
    if(!$id)
    {
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
    }
    else
    {
        $this->form_validation->set_rules('password','Password','min_length[6]');
    }

    if($this->form_validation->run()==FALSE)
    {
        $data['user']=$id ? $this->Admin_model->getUser($id) : NULL;

        $this->load->view('admin/user_form',$data);

        return;
    }

    $name=$this->input->post('name',TRUE);
    $email=$this->input->post('email',TRUE);
    $password=$this->input->post('password',TRUE);

    if($this->Admin_model->emailExists($email,$id))
    {
        $this->session->set_flashdata('error','This email is already registered.');

        redirect($id ? 'admin/user_form/'.$id : 'admin/user_form');
    }

    $data=array(
        'name'=>$name,
        'email'=>$email
    );

    if(!empty($password))
    {
        $data['password']=password_hash($password,PASSWORD_DEFAULT);
    }

    if($id)
    {
        $this->Admin_model->updateUser($id,$data);

        if($id==$this->session->userdata('admin_id'))
        {
            $this->session->set_userdata(array(
                'admin_name'=>$name,
                'admin_email'=>$email
            ));
        }

        $this->session->set_flashdata('success','User updated successfully.');
    }
    else
    {
        $this->Admin_model->insertUser($data);

        $this->session->set_flashdata('success','User added successfully.');
    }

    redirect('admin/users');
}

public function delete_user($id = 0)
{
    if(!$this->session->userdata('admin_login'))
    {
        redirect('admin/login');
    }

    if(empty($id))
    {
        show_404();
    }

    if($id==$this->session->userdata('admin_id'))
    {
        $this->session->set_flashdata('error','You cannot delete your own account.');

        redirect('admin/users');
    }

    if($this->Admin_model->deleteUser($id))
    {
        $this->session->set_flashdata('success','User deleted successfully.');
    }
    else
    {
        $this->session->set_flashdata('error','Unable to delete user.');
    }

    redirect('admin/users');
}

}