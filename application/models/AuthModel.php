<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model {
    public function login(string $name, string $password) {
        // $this->db->select('name', 'password');
        // $this->db->from('users');
        // $this->db->where('name', $name);
        // $this->db->from('password', $password);

        // $user = $this->db->get();

        $query = "SELECT * FROM users WHERE name = ? AND password = ?";
        $res = $this->db->query($query, [$name, $password]);
    
        return $res->num_rows() == 1;
    }
}