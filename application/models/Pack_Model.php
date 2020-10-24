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

  public function selectOne($pack){
    $this->load->database();
    $var = $this->db->query('SELECT * FROM pack WHERE refPack = "' . $pack . '" and etat = 0');
    $this->db->close();
    return $var;
  }

  public function changeStatuCode($code)
  {
    # code...
    $this->load->database();
    /*
    $this->db->set(array('etat' => 1));
    $this->db->where('refPack', $code);
    $this->db->update('pack');
    $this->db->close();
    */
    $requette ='UPDATE pack SET etat = 1 where refPack ="' . $code . '"';

    return $this->db->query($requette);
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

  public function createList($pack){

    $this->load->database();
    $save =  $this->db->insert('pack', $pack);
    $this->db->close();
    return $save;
  }
}
