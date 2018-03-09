<?php

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['page'] = 'home';
        $data['message'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }

    public function content() {
        if (!isset($_SESSION['user'])) {
            $data['page'] = 'home';
            $data['message'] = 'Please login first';
        } else {
            $data['page'] = 'content';
            $data['message'] = '';
        }
        $this->load->view('templates/header', $data);
        $this->load->view($data['page'], $data);
        $this->load->view('templates/footer', $data);
    }

    public function users() {
        $data['users'] = $this->user->getAll();
        $data['page'] = 'users';
        $this->load->view('templates/header', $data);
        $this->load->view('users');
        $this->load->view('templates/footer', $data);
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $passHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->user->update($id, $_POST['fullname'], $passHash);
            $data['users'] = $this->user->getAll();
            $data['page'] = 'users';
        } else {
            $data['page'] = 'edit';
            $data['user'] = $this->user->get($id);
            $data['message'] = '';
        }
        $this->load->view('templates/header', $data);
        $this->load->view($data['page']);
        $this->load->view('templates/footer', $data);
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->delete($id);
            $data['users'] = $this->user->getAll();
            $data['page'] = 'users';
        } else {
            $data['page'] = 'delete';
            $data['user'] = $this->user->get($id);
            $data['message'] = '';
        }
        $this->load->view('templates/header', $data);
        $this->load->view($data['page']);
        $this->load->view('templates/footer', $data);
    }


    public function login() {
        $data['page'] = 'login';
        $data['message'] = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->user->find($_POST['username']);
            if ($user != NULL && password_verify($_POST['password'], $user['password'])) {
                $data['page'] = 'content';
                $_SESSION['user'] = $user['fullname'];
                $data['message'] = $user['fullname'] . ': welcome back';
            } else {
                $data['message'] = 'Username/password invalid';
            }
        }
        $this->load->view('templates/header', $data);
        $this->load->view($data['page'], $data);
        $this->load->view('templates/footer', $data);
    }

    public function register() {
        $data['page'] = 'register';
        $data['message'] = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->user->find($_POST['username']);
            if ($user == NULL) {
                $passHash = password_hash($_POST['password'], PASSWORD_DEFAULT);               
                $this->user->insert($_POST['username'], $_POST['fullname'], $passHash);
                $data['page'] = 'content';
                $data['message'] = 'New user registered: ' . $_POST['fullname'];
            } else {
                $data['message'] = 'Username not available';
            }
        }
        $this->load->view('templates/header', $data);
        $this->load->view($data['page'], $data);
        $this->load->view('templates/footer', $data);
    }

    public function logout() {
        unset($_SESSION['user']);
        $data['page'] = 'login';
        $data['message'] = 'You have been logged out';
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }

}
