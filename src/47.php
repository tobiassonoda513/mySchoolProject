<?php
// Assuming this is part of an application or controller setup

defined('BASEPATH') OR exit('No direct script access allowed');

class YourApp extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('YourModel');
    }

    public function index() {
        $data = [
            'title' => 'Welcome to Your App',
            'content' => '<p>Welcome to the Welcome Page of YourApp application!</p>' . 
                         '<hr> <a href="/users" class="btn btn-primary">Sign Up</a> | <a href="/logout" class="btn btn-danger">Logout</a>',
        ];

        $this->load->view('your_view', $data);
    }

    public function users() {
        $data = [
            'title' => 'Users',
            'content' => '<h1>User List:</h1><table border="1"><tr bgcolor="#f2f2f2"><th>ID</th><th>Name</th><th>Email</th></tr>',
            'users' => [
                ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
                ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
                ['id' => 3, 'name' => 'Jim Brown', 'email' => 'jim@example.com']
            ]
        ];

        $this->load->view('users_view', $data);
    }
}
