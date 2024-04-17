<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class QuestionsModel extends CI_Model
{
    protected $table = 'questions';

    public function getAllQuestions(int $offset = 0, $limit = 10)
    {
        $query = $this->db->limit($limit, $offset);
        $query = $this->db->select("questions.*, users.first_name, users.last_name");
        $query = $this->db->from($this->table);
        
        // add user's first and last names
        $query = $this->db->join('users', 'users.id=' . $this->table . '.user_id');

        return $query->get()->result();
    }

    public function getCountAll()
    {
        return $this->db->count_all($this->table);
    }
}
