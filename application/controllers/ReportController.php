<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

    public function getUserLogs() {
        // Load the Log model
        $this->load->model('LogModel');

        // Check if the user has the necessary permissions
        if (!$this->LogModel->check_permissions()) {
            return array('status' => 'error', 'message' => 'Insufficient permissions');
        }

        // Retrieve the logs from the database
        $logs = $this->LogModel->get_logs();

        // Check if the get_logs function failed
        if ($logs === false) {
            return array('status' => 'error', 'message' => 'Failed to retrieve logs');
        }

        // Return the logs in an appropriate format
        return array('status' => 'success', 'data' => $logs);
    }

    public function getProcessedConsignments() {
        // Load the Consignment model
        $this->load->model('ConsignmentModel');

        // Check if the user has the necessary permissions
        if (!$this->ConsignmentModel->check_permissions()) {
            return array('status' => 'error', 'message' => 'Insufficient permissions');
        }

        // Retrieve the consignments from the database
        $consignments = $this->ConsignmentModel->get_consignments();

        // Check if the get_consignments function failed
        if ($consignments === false) {
            return array('status' => 'error', 'message' => 'Failed to retrieve consignments');
        }

        // Return the consignments in an appropriate format
        return array('status' => 'success', 'data' => $consignments);
    }
}
?>

