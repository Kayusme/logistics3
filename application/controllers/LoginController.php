<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function login($username, $password) {
        // Validate the input
        if (empty($username) || empty($password)) {
            return false;
        }

        // Load the UserModel
        $this->load->model('UserModel');

        // Check the username and hashed password against the users table in the database
        $user = $this->UserModel->getUserByUsername($username);
        if ($user && password_verify($password, $user->hashed_password)) {
            // Start a session if the login is successful
            $this->session->set_userdata('user_id', $user->id);
            return true;
        }

        return false;
    }

    public function logout() {
        // End the session
        $this->session->sess_destroy();
    }
}
?>

