<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

    public function getUserLogs() {
        $this->load->model('LogModel');
        $logs = $this->LogModel->getUserLogs();

        return $logs;
    }

    public function getProcessedConsignments() {
        $this->load->model('ConsignmentModel');
        $consignments = $this->ConsignmentModel->getProcessedConsignments();

        return $consignments;
    }
}
?>

