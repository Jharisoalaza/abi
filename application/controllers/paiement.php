<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/REST_Controller.php';
require_once APPPATH . 'third_party/Format.php';
require_once 'Checker.php';

use Restserver\Libraries\REST_Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Paiement extends REST_Controller
{


    

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTION') {
            header('HTTP/1.1 200');
            exit();
        }
        parent::__construct();
        $this->load->library('encryption');
        // Load these helper to create JWT tokens
        $this->load->helper(['jwt', 'authorization']);
        $this->load->model('Pack_Model', 'pack');
        $this->load->model('Payement', 'paiement');

    }
    public function liste_get()
    {
        // $data = $this->pack->listePack();
        // $this->response($data, REST_Controller::HTTP_OK);
    }

    public function payer_get($result)
    {
        $resultat['price'] = $result;
        $this->load->view('addpayement', $resultat);
        //$this->response($result, REST_Controller::HTTP_OK);

    }

    public function terminer_payement_get()
    {
        $code = $_GET['codeValidation'];
        $data = array(
            'idInvestisseur' => $_GET['idInvestisseur'],
            'idRepresentant' => $_GET['idRepresentant'],
            'pack' => $_GET['pack'],
            'modePaiement' => $_GET['modePaiement']
        );
        # $data = json_encode($data);
        
        if ($this->checkCode($code)) {
            $this->paiement->addPaiement($data);
            $this->pack->changeStatuCode($code);
            $_SESSION['erreur'] =  'Achat réussit avec succes';
            $_SESSION['color'] = 'success';
            header('location:'. site_url('Paiement/payer/'. 'succes'));
            
        }else{
            $_SESSION['erreur'] = "Votre code de validation n'est pas valide";
            $_SESSION['color'] = 'danger';
            
            header('location:' . site_url('Paiement/payer/' . $_GET['chiffre']));
        };
        /*
        */

    }

    public function checkCode($code)
    {
        $cle = $this->pack->selectOne($code)->result();
        return empty($cle) ? false : true;
    }

    public function annuler($key)
    {
        $id = $key;
        // [1]= id du produit
        if (isset($_SESSION["panier"][$id])) {
            $_SESSION["panier"][$id] -= 1;
        }

        if ($_SESSION["panier"][$id] <= 0) {

            unset($_SESSION["panier"][$id]);
        }
    }
}
