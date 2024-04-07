<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersModel extends CI_Model
{

    public function getAllUsers()
    {
        return $this->db->get('users')->result();
    }

}
