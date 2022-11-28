<?php
require 'models/compte.php';
require 'models/stagiaire.php';

class local {

    public function index() {
        include 'views/Gest_etaf/index.php';
    }

    public function editProfil() {
        $compte = new comptemodel();
        if (isset($_POST['btn_modifier'])) {

            $compte->id = $_POST['sai_id'];
            $pass = $_POST['sai_pass'];
            $conf_pass = $_POST['sai_conf_password'];
            $compte->nom_prenom = $_POST['sai_nom_prenom'];
            $compte->email = $_POST['sai_email'];
            $compte->telephone = $_POST['sai_telephone'];
            $compte->login = $_POST['sai_login'];
            $compte->pass = $_POST['sai_pass'];
            $compte->role = $_POST['sai_role'];
            $compte->matricule = $_POST['sai_matricule'];
            if (isset($_POST['sai_photo'])) {
                $ext = strtolower(substr(strrchr($_FILES['sai_photo']['name'], '.'), 1));
                move_uploaded_file($_FILES['sai_photo']['tmp_name'], "Fichiers/Gest_etaf/" . $_POST['sai_matricule'] . "." . $ext);
                $stagiaire->photo = $_POST['sai_matricule'] . "." . $ext;

                if ($pass !== $conf_pass) {
                    ?>
                    <script >alert("echec dû aux mots de passe ne correspondant pas!")</script>
                    <?php

                } else {
                    $compte->modifiercompte_avec_photo();
                }
            } else {
                $compte->modifiercompte_sans_photo();
            }
        }

        $this->profil();
    }

    public function profil() {
//        session_start();
        $compte = new comptemodel();
        $compte->id = $_SESSION['user_id'];
        $profil = $compte->compteId();
        $id = $profil[0]['id'];
        $login = $profil[0]['login'];
        $nom_prenom = $profil[0]['nom_prenom'];
        $email = $profil[0]['email'];
        $mdp = $profil[0]['mdp'];
        $tel = $profil[0]['telephone'];
        $photo = $profil[0]['photo'];
        include 'views/Gest_etaf/profil.php';
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
    
    
    public function liste() {
        $stagiaire = new stagiairemodel();
        $sol = $stagiaire->listestagiaire();
        include 'views/Gest_etaf/liste_stagiaire.php';
    }

}
