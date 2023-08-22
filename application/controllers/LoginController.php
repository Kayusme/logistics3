<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function login($username, $password) {
        // Load the User model
        $this->load->model('UserModel');

        // Authenticate the admin
        $user = $this->UserModel->authenticate($username, $password);

        // If the user is authenticated, start a new session
        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            return true;
        }

        // If the user is not authenticated, return false
        return false;
    }

    public function logout() {
        // End the admin's session
        $this->session->sess_destroy();
    }
}
?>

