<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'third_party/REST_Controller.php';
require APPPATH . 'third_party/Format.php';

use Restserver\Libraries\REST_Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Pack extends REST_Controller
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
        $this->load->model('Pack_Model', 'pack');
    }

    public function liste_get()
    {
        $data = $this->pack->listePack();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function ajoutPack_post()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $ref = $this->cryptThings($data->tarif);
        $data->refPack = $ref;
        $result = $this->pack->addPack($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }

    public function supprimerPack_post()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $result = $this->pack->deletePack($data);
        $this->response($result, REST_Controller::HTTP_OK);
    }


    private function cryptThings($password)
    {
        $alphanum = $password;
        $special  = '0123456789';
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

    /**
     * 
     * 
     * private function cryptThings($password)
     *{
     *   $response = md5(sha1(sha1(sha1(md5($password)))));
     *   return $response;
     *}
     */
}
