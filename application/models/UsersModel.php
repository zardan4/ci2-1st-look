<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersModel extends CI_Model
{

    protected $table = 'users';

    public function getAllUsers()
    {
        return $this->db->get($this->table)->result();
    }

}
