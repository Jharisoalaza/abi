<?php
    class EtudiantLib{
        private $id;
        private $nom;
        private $prenom;
        private $filiere;
        private $etablissement;
        private $adresse;
        private $tel;

        public function setid($id){
            $this -> id = $id;
        }

        public function setnom($nom){
            $this -> nom = $nom;
        }

        public function setprenom($prenom){
            $this -> prenom = $prenom;
        }

        public function setfiliere($filiere){
            $this -> filiere = $filiere;
        }

        public function setetablissement($etablissement){
            $this -> etablissement = $etablissement;
        }

        public function setadresse($adresse){
            $this -> adresse = $adresse;
        }

        public function settel($tel){
            $this -> tel = $tel;
        }

        public function getid($id){
            $this -> id = $id;
        }

        public function getnom($nom){
            $this -> nom = $nom;
        }

        public function getprenom($prenom){
            $this -> prenom = $prenom;
        }

        public function getfiliere($filiere){
            $this -> filiere = $filiere;
        }

        public function getetablissement($etablissement){
            $this -> etablissement = $etablissement;
        }

        public function getadresse($adresse){
            $this -> adresse = $adresse;
        }

        public function gettel($tel){
            $this -> tel = $tel;
        }
    }
?>