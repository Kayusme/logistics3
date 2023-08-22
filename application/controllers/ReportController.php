<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LogModel');
        $this->load->model('ConsignmentModel');
    }

    public function fetchLogsAndConsignments() {
        // Fetch data from the logs and consignments tables in the database
        $logs = $this->LogModel->getAllLogs();
        $consignments = $this->ConsignmentModel->getAllConsignments();

        return array('logs' => $logs, 'consignments' => $consignments);
    }

    public function insertLogAndConsignment($logMessage, $consignmentStatus, $userId) {
        // Insert data into the logs and consignments tables in the database
        $insertLog = $this->LogModel->insertLog($logMessage, $userId);
        $insertConsignment = $this->ConsignmentModel->insertConsignment($consignmentStatus, $userId);

        if ($insertLog && $insertConsignment) {
            return "Data inserted successfully";
        }

        return "Failed to insert data";
    }
}
?>

