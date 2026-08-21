<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function checkLogin($email)
    {
        return $this->db
                    ->where('email',$email)
                    ->get('admins')
                    ->row();
    }
	
	public function getContactMessages()
{
    return $this->db
                ->order_by('id','DESC')
                ->get('contact_messages')
                ->result();
}
public function deleteMessage($id)
{
    return $this->db
                ->where('id', $id)
                ->delete('contact_messages');
}

public function getUsers()
{
    return $this->db
                ->order_by('id','DESC')
                ->get('admins')
                ->result();
}

public function getUser($id)
{
    return $this->db
                ->where('id', $id)
                ->get('admins')
                ->row();
}

public function emailExists($email, $ignore_id = 0)
{
    $this->db->where('email', $email);

    if($ignore_id)
    {
        $this->db->where('id !=', $ignore_id);
    }

    return (bool) $this->db->get('admins')->row();
}

public function insertUser($data)
{
    return $this->db->insert('admins', $data);
}

public function updateUser($id, $data)
{
    return $this->db
                ->where('id', $id)
                ->update('admins', $data);
}

public function deleteUser($id)
{
    return $this->db
                ->where('id', $id)
                ->delete('admins');
}

}