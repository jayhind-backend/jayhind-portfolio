<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model
{

    public function save($data)
    {
        return $this->db->insert('contact_messages',$data);
    }

    public function getAll()
    {
        return $this->db->order_by('id','DESC')
                        ->get('contact_messages')
                        ->result();
    }

}