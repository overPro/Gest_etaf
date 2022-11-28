<?php
//session_start();
require 'models/versement.php';

class Gest_etaf {

    public function enregistrement() {

        //$stagiaire = "";
        $perso = new versementmodel();
        
        if (isset($_POST['btn_enregistrer'])) {
            $perso->montant = filter_input(INPUT_POST, "montant", FILTER_SANITIZE_STRING);
            $perso->date_versement = filter_input(INPUT_POST, "date", FILTER_SANITIZE_STRING);
            $perso->mode_reglement = filter_input(INPUT_POST, "reg", FILTER_SANITIZE_STRING);
            $perso->matricule = filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING);
            $perso->prod = filter_input(INPUT_POST, "produit", FILTER_SANITIZE_STRING);
            $perso->user = $_SESSION['user'];
            $rech = $perso->ajouterversement();
        }
        
        $stagiaire = $perso->listestagiaire();
        include 'views/Administrateur/versement_stagiaire.php';
    }
    
    public function consultation() {

        //$stagiaire = "";
        $perso = new versementmodel();
        
        if (isset($_POST['btn_consul'])) {
            $som=0;
            $rech = $perso->listeversement(filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING));
            $s = $perso->som_listeversement(filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING));
            $som = $s[0]['s'];
            $stag = $perso->stagiaire(filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING));
            $matricule = $stag[0]['matricule'];
            $nom_pre = $stag[0]['nom_prenom'];
        }
        
        $stagiaire = $perso->listestagiaire();
        include 'views/Administrateur/liste_versement.php';
    }
    
    public function consultation_periode() {
        $som=0;
        $perso = new versementmodel();
        
        if (isset($_POST['btn_consul'])) {
            $dd = new DateTime(filter_input(INPUT_POST, "debut", FILTER_SANITIZE_STRING));
            $df = new DateTime(filter_input(INPUT_POST, "fin", FILTER_SANITIZE_STRING));           
            $rech = $perso->listeversement_periode($dd->format('d-m-Y'), $df->format('d-m-Y'));
            $s = $perso->som_listeversement_periode($dd->format('d-m-Y'), $df->format('d-m-Y'));
            $som = $s[0]['s'];
        }        
       include 'views/Administrateur/liste_versement_periode.php';
    }
    
    public function consultation_periode_produit() {
        $som=0;
        $perso = new versementmodel();
        
        if (isset($_POST['btn_consul'])) {
            $dd = new DateTime(filter_input(INPUT_POST, "debut", FILTER_SANITIZE_STRING));
            $df = new DateTime(filter_input(INPUT_POST, "fin", FILTER_SANITIZE_STRING));           
            $p = filter_input(INPUT_POST, "produit", FILTER_SANITIZE_STRING);           
            $rech = $perso->listeversement_periode_produit($dd->format('d-m-Y'), $df->format('d-m-Y'), $p);
            $s = $perso->som_listeversement_periode_produit($dd->format('d-m-Y'), $df->format('d-m-Y'), $p);
            $som = $s[0]['s'];
        }        
       include 'views/Administrateur/liste_versement_periode_produit.php';
    }

    public function liste() {
        $post = new postModel();
        $posts = $post->liste();
        include '';
    }

}
