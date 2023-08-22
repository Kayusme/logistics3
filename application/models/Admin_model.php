<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_data() {
        // Retrieve data from the database for the admin panel
        $query = $this->db->get('admin_data');
        return $query->result();
    }
}
?>

