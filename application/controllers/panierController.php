<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanierController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('panier');

    }
    
    public function addPanier($i){
        $id=$i;
        // [1]= id du produit
        if (isset($_SESSION["panier"][$id])) {
            $_SESSION["panier"][$id]=1;
        	header("location:../index");
        }else{
            $_SESSION["panier"][$id]=0;
            header("location:../index");
        }
    }


    public function annuler($key){
        $id=$key;
        // [1]= id du produit
        if (isset($_SESSION["panier"][$id])) {
            $_SESSION["panier"][$id]-=1;
            
            header("location:../index");
        
        }
        
        if ($_SESSION["panier"][$id]<=0) {
            
            unset($_SESSION["panier"][$id]);
        }
    }
}
