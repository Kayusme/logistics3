<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function updateStandardPrice($newPrice) {
        // Assuming there is a model 'PriceModel' with a function 'updateStandardPrice' that updates the price in the database
        $this->load->model('PriceModel');
        $this->PriceModel->updateStandardPrice($newPrice);
    
        // Also update the standard price in the PriceCalculator class
        $this->load->library('PriceCalculator');
        $this->PriceCalculator->updateStandardPrice($newPrice);
    }

    public function addNewUser($username, $password, $email) {
        // Validate the input
        if (empty($username) || empty($password) || empty($email)) {
            return array('status' => 'error', 'message' => 'Username, password, and email are required');
        }

        // Load the User model
        $this->load->model('UserModel');

        // Insert the new user into the database
        $result = $this->UserModel->insert_user($username, $password, $email);

        // Return an appropriate response
        if ($result) {
            return array('status' => 'success', 'message' => 'User added successfully');
        } else {
            return array('status' => 'error', 'message' => 'Failed to add user');
        }
    }
}
?>

