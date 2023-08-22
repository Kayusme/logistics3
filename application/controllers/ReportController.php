<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

    public function getUserLogs() {
        // Load the Log model
        $this->load->model('LogModel');

        // Retrieve the logs from the database
        $logs = $this->LogModel->get_logs();

        // Return the logs in an appropriate format
        return array('status' => 'success', 'data' => $logs);
    }

    public function getProcessedConsignments() {
        // Load the Consignment model
        $this->load->model('ConsignmentModel');

        // Retrieve the consignments from the database
        $consignments = $this->ConsignmentModel->get_consignments();

        // Return the consignments in an appropriate format
        return array('status' => 'success', 'data' => $consignments);
    }
}
?>

