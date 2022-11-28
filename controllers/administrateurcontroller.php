<?php
require 'models/compte.php';
class local {

    public function index() {
        include 'views/Administrateur/index.php';
    }

    public function deconnexion() {
//        session_start();
        $_SESSION = array();
        session_destroy();
        ?>
        <script language="javascript">
            document.location.href = "http://localhost:81/Gest_etaf/";
        </script>
        <?php

    }

    public function profil() {
//        session_start();
        $compte = new comptemodel();
        $compte->COMPTE_CODE = $_SESSION['user_id'];
        $profil = $compte->compteId();
        $id = $profil[0]['COMPTE_CODE'];
        $login = $profil[0]['COMPTE_LOGIN'];
        $nom_prenom = $profil[0]['COMPTE_NOM'];
        $email = $profil[0]['COMPTE_EMAIL'];
        $mdp = $profil[0]['COMPTE_PASS'];
        $tel = $profil[0]['COMPTE_NUMERO'];
        $photo = $profil[0]['COMPTE_PHOTO'];
        include 'views/Administrateur/profil.php';
    }

    public function editProfil() {
        $compte = new comptemodel();
        if (isset($_POST['btn_modifier'])) {

            $compte->COMPTE_CODE = $_POST['sai_id'];
            $pass = $_POST['sai_pass'];
            $conf_pass = $_POST['sai_conf_password'];
            $compte->COMPTE_NOM = $_POST['sai_nom_prenom'];
            $compte->COMPTE_EMAIL = $_POST['sai_email'];
            $compte->COMPTE_NUMERO = $_POST['sai_telephone'];
            $compte->COMPTE_LOGIN = $_POST['sai_login'];
            $compte->COMPTE_PASS = $_POST['sai_pass'];
            $compte->COMPTE_ROLE = $_POST['sai_role'];
            
            //prevoir la photo

            //verifier si les deux mots de passe correspondent
            if ($pass !== $conf_pass) {
                ?>
                <script >alert("echec dû aux mots de passe ne correspondant pas!")</script>
                <?php

            } else {
                move_uploaded_file($_FILES['photo']['tmp_name'], "Fichiers/Compte/" . $compte->COMPTE_CODE . '.'.strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1)));
                $compte->COMPTE_PHOTO=$compte->COMPTE_CODE . '.'.strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
                $compte->modifiercompte_avec_photo();
            }
        }
        
        $this->profil();
    }

}
