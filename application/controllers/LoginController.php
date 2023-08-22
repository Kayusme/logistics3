<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function admin_login($username, $password) {
        // Load the User model
        $this->load->model('UserModel');

        // Validate the input
        if (empty($username) || empty($password)) {
            return array('status' => 'error', 'message' => 'Username and password are required');
        }

        // Check the credentials against the users table in the database
        $user = $this->UserModel->get_user_by_username($username);
        if ($user && password_verify($password, $user['password'])) {
            // The credentials are correct
            return array('status' => 'success', 'message' => 'Login successful');
        } else {
            // The credentials are incorrect
            return array('status' => 'error', 'message' => 'Invalid username or password');
        }
    }
}
?>

