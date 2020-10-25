<?php
defined('BASEPATH') or exit('No direct script access allowed');
class InvestisseurModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function listeI()
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('investisseur');
    return $this->db->get()->result();
    $this->db->close();
  }

  public function addI($idR,$nom,$email,$pass,$pays,$tel,$codeP, $codeR)
  {
    $this->load->database();
    $this->db->query("INSERT INTO investisseur VALUES('$idR','$nom','$email','$pass','$pays','$tel','$codeP','$codeR')");
  //  return $this->db->insert('investisseur', $data);
    $this->db->close();

  }

  public function deleteI($codeR){
    $this->load->database();
    return $this->db->delete( 'investisseur', ['idInvestisseur'=> $codeR]);
    $this->db->close();
  }

  public function getI($codeR){
    $this->load->database();
    $query = $this->db->query('SELECT * from investisseur where codeInvestisseur=' .$codeR);
    return $query->row();
    $this->db->close();
  }

  public function UpdateI($data, $codeR){
    $this->load->database();
    return $this->db->where('codeInvestisseur', $codeR)
                ->update('investisseur', $data);
    $this->db->close();
  }  

  public function loginI($mail){
    $this->load->database();
    $query = $this->db->query('SELECT * from investisseur where mailInvestisseur ='.$mail);
   //$query = $this->db->query('SELECT * from representant where mailRepresentant = "nandrianina9599@gmail.com"');
    return $query->row();
    $this->db->close();
  }

  public function investisseur_representant($code){
    $this->load->database();
    $query = $this->db->query('SELECT * from investisseur where codeRepresentant ='.$code);
    return $query->row();
  }

  public function affil($code){
    $this->load->database();
    $query = $this->db->query('SELECT * from investisseur where codeParrain ="'.$code.'" limit 10');
    return $query->result();
  }

  public function totalAffilie($code){
    $this->load->database();
    $query = $this->db->query('SELECT * from investisseur where codeParrain ="'.$code.'"');
    return $query->num_rows();
  }

  public function nbPack($id)
  {
    $this->load->database();
    $query = $this->db->query('SELECT count(*) as nombre from paiement1 where idInvestisseur = "' . $id . '"');
    return $query->row();
  }


}
?>