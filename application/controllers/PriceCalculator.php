<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceCalculator extends CI_Controller {

    public function calculateVolumetricWeight($length, $width, $height) {
        // Assuming volumetric weight is calculated as (length * width * height) / 5000
        return ($length * $width * $height) / 5000;
    }

    public function calculatePrice($weight, $length, $width, $height) {
        $volumetricWeight = $this->calculateVolumetricWeight($length, $width, $height);

        // Use the higher value for price calculation
        $weight = max($weight, $volumetricWeight);

        // Assuming standard price per kg is $10
        return $weight * 10;
    }
}
?>

