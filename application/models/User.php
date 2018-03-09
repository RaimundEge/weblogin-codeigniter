<?php

class User extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public $id;
    public $username;
    public $fullname;
    public $password;

    public function getAll() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }
    
    public function find($username) {
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row_array();
    }
    public function insert($u, $f, $p) {
        $data = array(
            'username' => $u,
            'fullname' => $f,
            'password' => $p
        );
        $this->db->insert('users', $data);
    }
    public function update($i, $f, $p) {
        $data = array(
            'fullname' => $f,
            'password' => $p
        );
        $this->db->update('users', $data, "id = $i" );
    }

    public function delete($i) {
        $this->db->delete('users', array('id' => $i));
    }
}
