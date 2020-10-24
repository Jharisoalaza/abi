<?php

class Payement extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addPaiement($data)
    {
        $this->load->database();
        return $this->db->insert('paiement1', $data);
        $this->db->close();
    }

}
