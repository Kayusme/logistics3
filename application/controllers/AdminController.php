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

    public function createUser($username, $password, $role) {
        $this->load->model('UserModel');
        $isCreated = $this->UserModel->createUser($username, $password, $role);

        if ($isCreated) {
            // Logic for successful user creation
            return true;
        } else {
            // Logic for unsuccessful user creation
            return false;
        }
    }
}
?>

