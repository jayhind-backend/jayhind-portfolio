<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{

    public function getPortfolio()
    {
        return $this->db
                    ->get('portfolio_info')
                    ->row_array();
    }

}