<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FullcalendarModel extends CI_Model {
    public function getEvents(){
       return $this->db->get("tblevent")->result();
    }
}
?>