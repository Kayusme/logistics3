<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function login($username, $password) {
        $this->load->model('UserModel');
        $isValid = $this->UserModel->validateCredentials($username, $password);

        if ($isValid) {
            // Logic for successful login
            return true;
        } else {
            // Logic for unsuccessful login
            return false;
        }
    }
}

