<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

    public function getUserLogs() {
        // Load the Log model
        $this->load->model('LogModel');

        // Retrieve all user logs from the database
        $logs = $this->LogModel->getAllLogs();

        // Return the logs
        return $logs;
    }

    public function getProcessedConsignments() {
        // Load the Consignment model
        $this->load->model('ConsignmentModel');

        // Retrieve all processed consignments from the database
        $consignments = $this->ConsignmentModel->getProcessedConsignments();

        // Return the consignments
        return $consignments;
    }
}
?>

