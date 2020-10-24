<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/REST_Controller.php';
require_once APPPATH . 'third_party/Format.php';

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
        $this->load->library('encryption');
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


    //     Code generator
    public function getGenCode_get($price)
    {
        print_r($this->generateCode($price));
    }

    private function generateCode($price)
    {
        $n = 8;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            if ($i === 5) {
                switch ($price) {
                    case '10':
                        $randomString .= '-XA@-';
                        break;
                    case '50':
                        $randomString .= '-GK@-';
                        break;
                    case '100':
                        $randomString .= '-YB@-';
                        break;
                }
                // sdf54-1A@-SDF
            }
            $randomString .= $characters[$index];
        }

        $code = $randomString;

        return $code;
    }

    

    public function genListe_get($price)
    {
        for ($i = 0; $i < 100; $i++) {
            # code...
            $code = $this->generateCode($price);
            $data = array(
                'refPack' => $code,
                'tarif' => $price,
                'etat' => '0'
            );
            $this->pack->createList($data);
        }
        return printf('vita');
    }

    /* * 
     * 
     * private function cryptThings($password)
     *{
     *   $response = md5(sha1(sha1(sha1(md5($password)))));
     *   return $response;
     *}
     */
}
