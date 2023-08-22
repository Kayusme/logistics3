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
        if ($user === false) {
            // The get_user_by_username function failed
            return array('status' => 'error', 'message' => 'An error occurred');
        } elseif (count($user) > 1) {
            // Multiple users with the same username exist in the database
            return array('status' => 'error', 'message' => 'Multiple users with the same username exist');
        } elseif (password_verify($password, $user['password'])) {
            // The credentials are correct
            // Set a session variable with the user's id
            $this->session->set_userdata('user_id', $user['id']);
            return array('status' => 'success', 'message' => 'Login successful');
        } else {
            // The credentials are incorrect
            // Log the unsuccessful login attempt
            $this->log_unsuccessful_login_attempt($username);
            return array('status' => 'error', 'message' => 'Invalid username or password');
        }
    }
}
?>

