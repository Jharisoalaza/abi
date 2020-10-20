<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mode_Paiement_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function listeModePaiement()
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('modepaiement');
    return $this->db->get()->result();
    $this->db->close();
  }

  public function addModePaiement($mode)
  {
    $this->load->database();
    return $this->db->insert('modepaiement', $mode);
    $this->db->close();
  }

  public function deleteModePaiement($nomMode){
    $this->load->database();
    return $this->db->delete( 'modepaiement', ['nomMode'=> $nomMode]) ;
  }
}
?>