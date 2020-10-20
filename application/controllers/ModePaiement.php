<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'third_party/REST_Controller.php';
require APPPATH . 'third_party/Format.php';

use Restserver\Libraries\REST_Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class ModePaiement extends REST_Controller
{

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTION') {
            header('HTTP/1.1 200');
            exit();
        }
        parent::__construct();
        $this->load->library('encrypt');
        // Load these helper to create JWT tokens
        $this->load->helper(['jwt', 'authorization']);
        $this->load->model('Mode_Paiement_Model', 'paiement');
    }

    public function listeMode_get(){
        $data = $this->paiement->listeModePaiement();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function ajoutMode_post(){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->paiement->addModePaiement($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function supprimerMode_post(){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->paiement->deleteModePaiement($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }
}
?>