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

    public function updateConsignmentStatus($id, $status) {
        // Validate the input
        if (empty($id) || empty($status)) {
            return array('status' => 'error', 'message' => 'Consignment id and status are required');
        }

        // Load the Consignment model
        $this->load->model('ConsignmentModel');

        // Update the status of the consignment in the database
        $result = $this->ConsignmentModel->update_status($id, $status);

        // Return an appropriate response
        if ($result) {
            return array('status' => 'success', 'message' => 'Consignment status updated successfully');
        } else {
            return array('status' => 'error', 'message' => 'Failed to update consignment status');
        }
    }
}
?>

