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

}