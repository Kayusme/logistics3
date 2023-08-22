<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public function calculate_price($weight, $distance) {
        // Calculate the price based on the weight and distance
        $price = $weight * $distance;
        return $price;
    }

    public function checkout() {
        // Handle the checkout process
        echo "Checkout process initiated.";
    }

    public function track_consignment($consignment_number) {
        // Track the consignment based on the consignment number
        $status = "Consignment number " . $consignment_number . " is in transit.";
        return $status;
    }
}
?>

