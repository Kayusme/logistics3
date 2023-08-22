<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageController extends CI_Controller {

    public function createPackage($weight, $length, $width, $height, $from, $to) {
        // Logic to create a new package in the database
    }

    public function getPackage($id) {
        // Logic to retrieve the package details from the database
    }

    public function updatePackage($id, $weight, $length, $width, $height, $from, $to) {
        // Logic to update the package in the database
    }

    public function deletePackage($id) {
        // Logic to delete the package from the database
    }

    public function updateStatus($package_id, $status) {
        $this->load->model('PackageModel');
        $isUpdated = $this->PackageModel->updateStatus($package_id, $status);

        if ($isUpdated) {
            // Logic for successful status update
            return true;
        } else {
            // Logic for unsuccessful status update
            return false;
        }
    }
}
?>

