<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceCalculator extends CI_Controller {

    public function calculateVolumetricWeight($length, $width, $height) {
        // Assuming volumetric weight is calculated as (length * width * height) / 5000
        return ($length * $width * $height) / 5000;
    }

    public function calculatePrice($packages, $from, $to) {
        $totalPrice = 0;
    
        foreach ($packages as $package) {
            $volumetricWeight = $this->calculateVolumetricWeight($package['length'], $package['width'], $package['height']);
    
            // Use the higher value for price calculation
            $weight = max($package['weight'], $volumetricWeight);
    
            // Retrieve standard price per kg from PriceModel
            $this->load->model('PriceModel');
            $standardPrice = $this->PriceModel->getStandardPrice();
    
            $totalPrice += $weight * $standardPrice;
        }
    
        return $totalPrice;
    }
}
?>

