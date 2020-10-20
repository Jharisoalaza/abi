<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pack_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function listePack()
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('pack');
    return $this->db->get()->result();
    $this->db->close();
  }

  public function addPack($pack)
  {
    $this->load->database();
    return $this->db->insert('pack', $pack);
    $this->db->close();
  }

  public function deletePack($prix){
    $this->load->database();
    return $this->db->delete( 'pack', ['tarif'=> $prix]);
    $this->db->close();
  }

}
?>