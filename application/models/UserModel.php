<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function insert_user($username, $password, $email) {
        // Hash the password before storing it in the database
        $hashed_password = $this->hash_password($password);

        // Check for duplicate users
        if ($this->check_duplicate_user($username)) {
            return false;
        }

        // Validate the email address
        if (!$this->validate_email($email)) {
            return false;
        }

        // Enforce complexity requirements for the username and password
        if (!$this->enforce_complexity_requirements($username, $password)) {
            return false;
        }

        // Insert the new user into the database
        $data = array(
            'username' => $username,
            'password' => $hashed_password,
            'email' => $email
        );
        return $this->db->insert('users', $data);
    }

    private function hash_password($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function check_duplicate_user($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }

    private function validate_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function enforce_complexity_requirements($username, $password) {
        // Add complexity requirements for the username and password
        $username_complexity = preg_match('/^[a-zA-Z0-9]{6,}$/', $username);
        $password_complexity = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password);
        return $username_complexity && $password_complexity;
    }
}
?>

