<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Representant_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function listeRepresentant()
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('representant');
    return $this->db->get()->result();
    $this->db->close();
  }

  public function addRepresentant($data)
  {
    $this->load->database();
    return $this->db->insert('representant', $data);
    $this->db->close();
  }

  public function deleteRepresentant($codeR){
    $this->load->database();
    return $this->db->delete( 'representant', ['codeRepresentant'=> $codeR]);
    $this->db->close();
  }

  public function getRepresentant($codeR){
    $this->load->database();
    $query = $this->db->query('SELECT * from representant where codeRepresentant=' .$codeR);
    return $query->row();
    $this->db->close();
  }

  public function UpdateRepresentant($data, $codeR){
    $this->load->database();
    return $this->db->where('codeRepresentant', $codeR)
                ->update('representant', $data);
    $this->db->close();
  }  

  public function loginRepresentant ($mail){
    $this->load->database();
    $query = $this->db->query('SELECT * from representant where mailRepresentant ='.$mail);
   //$query = $this->db->query('SELECT * from representant where mailRepresentant = "nandrianina9599@gmail.com"');
    return $query->row();
    $this->db->close();
  }

  public function investisseur_representant($code){
    $this->load->database();
    $query = $this->db->query('SELECT * from investisseur where codeRepresentant ='.$code);
    return $query->row();

  }
}
?>