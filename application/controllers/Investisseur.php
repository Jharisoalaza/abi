<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'third_party/REST_Controller.php';
require APPPATH . 'third_party/Format.php';

use Restserver\Libraries\REST_Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Investisseur extends REST_Controller
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
        $this->load->model('InvestisseurModel', 'representant');
    }

    public function index_get()
    {
        $json = file_get_contents('php://input');
        $id = $_SESSION['id'];
        $result['affil'] = $this->representant->totalAffilie($id);
        $result['nbPack'] = $this->representant->nbPack($id)->nombre;
        // $this->response($res);
        $this->load->view('dashboard_user', $result);
    }

    public function liste_get()
    {
        $data = $this->representant->listeI();
        $this->response($data, REST_Controller::HTTP_OK);
        //this->load->view('representant',$data);
    }

    public function ajout_post()
    {
        # $json = file_get_contents('php://input');
        // $data = json_decode($json);
        //$login = $data->mail;
        $mdp = $_POST['mdp'];
        $val = $this->crypter($mdp);
        $idR = $val;
        $nom = $_POST['nom'];
        $email = $_POST['mail'];
        $tel = $_POST['tel'];
        $pays = $_POST['pays'];

        $codeP = $_POST['parrain'];
        $codeR = "";

        if (!$this->representant->addI($idR, $nom, $email, $mdp, $pays, $tel, $codeP, $codeR)) {
            echo 'tafa elah bain a!!! ';
            # $this->load->view('dashboard_user');
           // header('location:' . site_url('dashboard_user'));
        } else {
            # $this->response(['msg' => 'e-mail introuvable']);
            echo 'tsy tafa elah bain a!!! ';
        }
    }


    public function supprimerRepresentant_post()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->representant->deleteRepresentant($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function getRepresentant_post()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->representant->getRepresentant($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function modifierRepresentant_post()
    {
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
        $login = json_encode($_POST['mail']);
        $password = $_POST['mdp'];
        //$password = $data->mdp;
        $this->load->model('InvestisseurModel', 'representant');
        $result = $this->representant->loginI($login);

        if (!empty($result)) {
            if ($password == $result->mdpInvestisseur) {
                //$this->response($result, REST_Controller::HTTP_OK);
                // $this->load->view('dashboard_user');
                $data = array(
                    'isLogin' => 'Loged',
                    'user' => $result->nomInvestisseur,
                    'id' => $result->idInvestisseur,
                    'pays' => $result->paysInvestisseur
                );
                header("location:" . "index");
                $this->session->set_userdata($data);
            } else {
                // $this->response($password, REST_Controller::HTTP_OK);
                header("location:" . site_url('loginController'));
                $this->session->set_userdata(['msg', 'Mot de passe incorrect']);
            }
        } else {
            # $this->response(['msg' => 'e-mail introuvable']);
            $this->session->set_userdata(['msg', 'e-mail introuvable']);
        }
    }

    public function logout_get()
    {
        unset($_SESSION['isLogin']);

        session_destroy();
        header("location:" . "/investissement");
    }

    public function  getInvestisseur_post($codeRepresentant)
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->representant->investisseur_representant($codeRepresentant);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function mailBienvenu_post($mailInvestisseur)
    {
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
        if ($this->email->send()) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success">African business International vous souhaite la bienvenue</div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">You \' ll receive an new mail from us</div>');
        }
    }

    private function crypter($password)
    {
        //  $response = md5($password);
        // return $response;
        $alphanum = $password;
        $special  = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZAFRIQUEBUSINESS';
        $alphabet = $alphanum . $special;
        $len = 8; // length of identifiant
        $random = openssl_random_pseudo_bytes($len);
        $alphabet_length = strlen($alphabet);
        $id = '';
        for ($i = 0; $i < $len; ++$i) {
            $id .= $alphabet[ord($random[$i]) % $alphabet_length];
        }
        return $id;
    }

    public function affil_get()
    {
        $json = file_get_contents('php://input');
        $id = $_SESSION['id'];
        $result['investisseur'] = $this->representant->affil($id);
        //  $this->response($result, REST_Controller::HTTP_OK);
        $this->load->view('affil', $result);
    }


    public function param_get()
    {
        $this->load->view('parametre');
    }

    public function notif_get()
    {
        $this->load->view('notifications');
    }

    public function payement_get()
    {
        $this->load->view('payement');
    }
}
