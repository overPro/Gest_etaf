<?php
require 'models/compte.php';

class Connect {

    public function verification() {

        $perso = new comptemodel();

        if (isset($_POST['btn_connexion'])) {
            $perso->login = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
            $perso->pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
            $cnx = $perso->connexion();
            if (!empty($cnx)) {
                if ($cnx[0]['role'] == "admin") {
                    
                    $_SESSION['role']="Administrateur";
                    $_SESSION['user']=$cnx[0]['nom_prenom'];
                    $_SESSION['email']=$cnx[0]['email'];
                    $_SESSION['user_id']=$cnx[0]['id'];
                    $_SESSION['photo']=$cnx[0]['photo'];
                   // die();
                    ?>
                    <script language="javascript">
                        document.location.href = "http://localhost:81/Gest_etaf/compte/administrateur/local/index"
                    </script>

                    <?php

                }
                
                if ($cnx[0]['role'] == "Stagiaire") {
                    $_SESSION['role']="Stagiaire";
                    $_SESSION['email']=$cnx[0]['email'];
                    $_SESSION['user']=$cnx[0]['nom_prenom'];
                    $_SESSION['user_id']=$cnx[0]['id'];
                    $_SESSION['matricule']=$cnx[0]['matricule'];
                    $persos= $perso->perso($_SESSION['matricule']);
                    $_SESSION['filiere']= $persos[0]['filiere'];
                   
                    ?>
                    <script language="javascript">
                        document.location.href = "http://localhost:81/Gest_etaf/compte/stagiaire/local/index"
                    </script>

                    <?php

                }
            }
        }

        if (isset($_POST['btn_modif'])) {
            $perso->nom = filter_input(INPUT_POST, "txt_nom", FILTER_SANITIZE_STRING);
            $perso->prenoms = filter_input(INPUT_POST, "txt_prenom", FILTER_SANITIZE_STRING);
            $perso->contact = filter_input(INPUT_POST, "txt_contact", FILTER_SANITIZE_STRING);
            $perso->id = filter_input(INPUT_POST, "txt_id", FILTER_SANITIZE_NUMBER_INT);
            $perso->modif();
            $this->liste();
        }
        
        if (isset($_POST['btn_add'])) {
            $perso->nom = filter_input(INPUT_POST, "txt_nom", FILTER_SANITIZE_STRING);
            $perso->prenoms = filter_input(INPUT_POST, "txt_prenom", FILTER_SANITIZE_STRING);
            $perso->contact = filter_input(INPUT_POST, "txt_contact", FILTER_SANITIZE_STRING);
            $perso->id = filter_input(INPUT_POST, "txt_id", FILTER_SANITIZE_NUMBER_INT);
            $perso->modif();
            $this->liste();
        }

        if (isset($_POST['btn_sup'])) {
            $perso->id = filter_input(INPUT_POST, "txt_id", FILTER_SANITIZE_NUMBER_INT);
            $perso->sup();
            $this->liste();
        }
    }

    public function liste() {
        $perso = new Personne();
        $persos = $perso->liste();
        include 'views/kramoh.php';
    }

    public function listeIdVue() {
        $perso = new Personne();
        $persos = $perso->listeId();
        include 'views/models_vue.php';
    }

    public function listeIdEdit() {
        $perso = new Personne();
        $persos = $perso->listeId();
        include 'views/models_edit.php';
    }

    public function listeIdDelete() {
        $perso = new Personne();
        $persos = $perso->listeId();
        include 'views/models_delete.php';
    }

    public function mod() {

        $mod = new Personne();

        $act = filter_input(INPUT_POST, 'dir', FILTER_SANITIZE_STRING);
        $par = filter_input(INPUT_POST, 'spec', FILTER_SANITIZE_STRING);



        if ($act == "personne") {
            if ($par == "editer") {
                if (isset($_POST["modif"])) {
                    $mod->id = $_POST["modif"];
                    $mod = $mod->listeId();
                    include 'views/models_edit.php';
                }
            }

            if ($par == "voir") {
                if (isset($_POST["vue"])) {
                    $mod->id = $_POST["vue"];
                    $mod = $mod->listeId();
                    include 'views/models_vue.php';
                }
            }

            if ($par == "supprimer") {
                if (isset($_POST["sup"])) {
                    $mod->id = $_POST["sup"];
                    $mod = $mod->listeId();
                    include 'views/models_delete.php';
                }
            }
        }
    }

}
