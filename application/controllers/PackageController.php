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

    public function updateStatus($consignmentId, $status) {
        // Load the Consignment model
        $this->load->model('ConsignmentModel');

        // Update the status of the consignment
        $consignment = $this->ConsignmentModel->updateStatus($consignmentId, $status);

        // Return the updated consignment
        return $consignment;
    }
}
?>

