<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'third_party/REST_Controller.php';
require APPPATH . 'third_party/Format.php';

use Restserver\Libraries\REST_Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Representant extends REST_Controller
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
        $this->load->model('Representant_Model', 'representant');
    }

    public function liste_get(){
        $data = $this->representant->listeRepresentant();
        $this->response($data, REST_Controller::HTTP_OK);
        //this->load->view('representant',$data);
    }

    public function ajoutRepresentant_post(){
        /*$json = file_get_contents('php://input');
        $data = json_decode($json);*/
        $data->nomRepresentant= json_encode($_POST['nom']);
        $data->paysRepresentant= $_POST['pays'];
        $data->telRepresentant= $_POST['tel'];
        $data->mailRepresentant= $_POST['mail'];
        $data->mdpRepresentant= $_POST['mdp'];
        $data->idR = null;
        $idInvest= cryptThings( $_POST['mdp']);
        $data->codeRepresentant = $idInvest;
        
        if($this->representant->addRepresentant($data)){
            $result = $this->representant->listeRepresentant();
            $this->response($result, REST_Controller::HTTP_OK);
         //   emailInvestisseur($data->mailRepresentant);
        }
        else{
            $this->response("error", REST_Controller::HTTP_OK);
        }
    }

    public function supprimerRepresentant_post(){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->representant->deleteRepresentant($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function getRepresentant_post(){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->representant->getRepresentant($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function modifierRepresentant_post(){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $codeR = $data->codeRepresentant;
        $result = $this->representant->UpdateRepresentant($data, $codeR);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function login_post()
    {
        $json = file_get_contents('php://input');
       // $data = json_decode($json);
        //$login = $data->mail;
        $login= json_encode($_POST['mail']);
        $password= $_POST['mdp'];
        //$password = $data->mdp;
        
        $result = $this->representant->loginRepresentant($login);
        if (!empty($result)) {
            if($password == $result->mdpRepresentant){
                $this->response($result, REST_Controller::HTTP_OK);
            }
            else{
                $this->response($password, REST_Controller::HTTP_OK);
               // $this->response(['msg' => 'Mot de passe incorrect']);

            }
        } else {
            $this->response(['msg' => 'e-mail introuvable']);
        }
    }

    public function  getInvestisseur_post($codeRepresentant){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->representant->investisseur_representant($codeRepresentant);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function mailBienvenu_post($mailInvestisseur){
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'africanbusinessinternational1@gmail.com'; // Your email address
        $config['smtp_pass'] = 'nanitchie'; // Your email account password
        $config['mailtype'] = 'html'; // or 'text'
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE; //No quotes required
        $config['newline'] = "\r\n"; //Double quotes required

        $this->email->initialize($config);                        

        //Send mail with data
        $this->email->from('africanbusinessinternational1@gmail.com', 'abi');
        $this->email->to($mailInvestisseur);
        $this->email->subject('Inscription réussie');
        $this->email->message($this->load->view('bienvenue'));
        if ($this->email->send())
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success">African business International vous souhaite la bienvenue</div>');
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">You \' ll receive an new mail from us</div>');
        } 
    }

    private function cryptThings($password)
    {
        $response = md5(sha1(sha1(sha1(md5($password)))));
        return $response;
    }
}
?>