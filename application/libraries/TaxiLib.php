<?php
    class TaxiLib{
        private $immatricualtion;
        private $marque;
        private $type;
        private $modele;
        private $couleur;
        private $proprietaire;

        public function setimmatriculation($immatricualtion){
            $this -> immatriculation = $immatricualtion;
        }

        public function setmarque($marque){
            $this -> marque = $marque;
        }

        public function settype($type){
            $this -> type = $type;
        }

        public function setmodele($modele){
            $this -> modele = $modele;
        }

        public function setcouleur($couleur){
            $this -> couleur = $couleur;
        }

        public function setproprietaire($proprietaire){
            $this -> proprietaire = $proprietaire;
        }

        public function getimmatriculation($immatricualtion){
            $this -> immatriculation = $immatricualtion;
        }

        public function getmarque($marque){
            $this -> marque = $marque;
        }

        public function gettype($type){
            $this -> type = $type;
        }

        public function getmodele($modele){
            $this -> modele = $modele;
        }

        public function getcouleur($couleur){
            $this -> couleur = $couleur;
        }

        public function getproprietaire($proprietaire){
            $this -> proprietaire = $proprietaire;
        }
      
    }
?>