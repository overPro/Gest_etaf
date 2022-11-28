<?php
require "models/compte.php";

class personnel {

    
    public function verification() {

        $perso =  new comptemodel();

        if (isset($_POST['btn_connexion'])) {
            $perso->COMPTE_LOGIN = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
            $perso->COMPTE_PASS = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
            $cnx = $perso->connexion();
            if (!empty($cnx)) {
                if ($cnx[0]['COMPTE_ROLE'] == "ADMINISTRATEUR") {
                    
                    $_SESSION['role']="Administrateur";
                    $_SESSION['user']=$cnx[0]['COMPTE_NOM'];
                    $_SESSION['email']=$cnx[0]['COMPTE_EMAIL'];
                    $_SESSION['user_id']=$cnx[0]['COMPTE_CODE'];
                    $_SESSION['photo']=$cnx[0]['COMPTE_PHOTO'];
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
        include 'views/kramoh.php';
    }

    public function enregistrement() {

        $compte = new comptemodel();

         $COMPTE_ID ="";
     $COMPTE_ROLE ="";
     $COMPTE_NOM ="";
     $COMPTE_LOGIN ="";
     $COMPTE_PASS ="";
     $COMPTE_CODE ="";
     $COMPTE_STATUS ="";
     $COMPTE_EMAIL ="";
     $COMPTE_NUMERO ="";
     $COMPTE_PHOTO ="";
     $COMPTE_CREATED ="";
        $code=time()."".date("d"); 

        if (isset($_POST['btn_enregistrer'])) {
            
            move_uploaded_file($_FILES['txt_COMPTE_PHOTO']['tmp_name'], "Fichiers/compte/" . $code . '.'.strtolower(substr(strrchr($_FILES['txt_COMPTE_PHOTO']['name'], '.'), 1)));
            $compte->COMPTE_ROLE = $_POST['txt_COMPTE_ROLE'];
            $compte->COMPTE_NOM = $_POST['txt_COMPTE_NOM'];
            $compte->COMPTE_LOGIN = $_POST['txt_COMPTE_LOGIN'];
            $compte->COMPTE_PASS = $_POST['txt_COMPTE_PASS'];
            $compte->COMPTE_EMAIL = $_POST['txt_COMPTE_EMAIL'];
            $compte->COMPTE_NUMERO = $_POST['txt_COMPTE_NUMERO'];
            $compte->COMPTE_PHOTO = $code . '__.'.strtolower(substr(strrchr($_FILES['txt_COMPTE_PHOTO']['name'], '.'), 1));
            $compte->COMPTE_CREATED = date("Y-m-d H:i:s");
            $compte->COMPTE_STATUS = 1;
            $compte->COMPTE_CODE = "code".time();
            //var_dump($compte);
            //die();
           

            $compte->ajouterCompte();
        }


        if (isset($_POST['btn_modifier'])) {
            if(isset($_FILES['txt_COMPTE_PHOTO']['tmp_name']))
            {
                move_uploaded_file($_FILES['txt_COMPTE_PHOTO']['tmp_name'], "Fichiers/compte/" . $code . '.'.strtolower(substr(strrchr($_FILES['sai_img']['name'], '.'), 1)));
                $compte->COMPTE_ROLE = $_POST['txt_COMPTE_ROLE'];
                $compte->COMPTE_NOM = $_POST['txt_COMPTE_NOM'];
                $compte->COMPTE_LOGIN = $_POST['txt_COMPTE_LOGIN'];
                $compte->COMPTE_PASS = $_POST['txt_COMPTE_PASS'];
                $compte->COMPTE_EMAIL = $_POST['txt_COMPTE_EMAIL'];
                $compte->COMPTE_NUMERO = $_POST['txt_COMPTE_NUMERO'];
                $compte->COMPTE_PHOTO = $code . '__.'.strtolower(substr(strrchr($_FILES['txt_COMPTE_PHOTO']['name'], '.'), 1));
                //$compte->COMPTE_CREATED = date("Y-m-d H:i:s");
                $compte->COMPTE_STATUS = 0;
                $compte->COMPTE_CODE = "code".time();
                $compte->modifiercompte_avec_photo();
            }else{
                //move_uploaded_file($_FILES['txt_COMPTE_PHOTO']['tmp_name'], "Fichiers/compte/" . $code . '.'.strtolower(substr(strrchr($_FILES['sai_img']['name'], '.'), 1)));
                $compte->COMPTE_ROLE = $_POST['txt_COMPTE_ROLE'];
                $compte->COMPTE_NOM = $_POST['txt_COMPTE_NOM'];
                $compte->COMPTE_LOGIN = $_POST['txt_COMPTE_LOGIN'];
                $compte->COMPTE_PASS = $_POST['txt_COMPTE_PASS'];
                $compte->COMPTE_EMAIL = $_POST['txt_COMPTE_EMAIL'];
                $compte->COMPTE_NUMERO = $_POST['txt_COMPTE_NUMERO'];
                //$compte->COMPTE_PHOTO = $code . '__.'.strtolower(substr(strrchr($_FILES['txt_COMPTE_PHOTO']['name'], '.'), 1));
                //$compte->COMPTE_CREATED = date("Y-m-d H:i:s");
                $compte->COMPTE_STATUS = 0;
                $compte->COMPTE_CODE = "code".time();
                $compte->modifiercompte_sans_photo();
            }
            


        }

        if (isset($_POST['btn_supprimer'])) {
            $compte->COMPTE_CODE = $_POST['txt_COMPTE_CODE'];


            $sam->supprimerCompte();
        }
        $sol=$compte->listeCompte();
        include "views/Administrateur/enregistrement_compte.php";
    }

    public function modification() {

        $signaux_covid_libelle="";
        $Sigaux_covid_image="";
        $sam = new signauxmodel();


        if (isset($_GET['id'])) {
            $tola = $_GET['id'];
            $sol = $sam->FindSignaux($tola);
            $signaux_covid_libelle=$sol[0]['signaux_covid_libelle'];          
            $Sigaux_covid_image=$sol[0]['Sigaux_covid_image'];          
            //var_dump($Sigaux_covid_image);
            //die();           
        }
        
        if (isset($_POST['btn_attribuer'])) {
            $sam->code_theme_stage = $_POST['sai_code_theme'];            
            $sam->mat = $_POST['mat'];            
            $sol = $sam->attribuertheme();           
        }
        
        //liste();
        include "views/Administrateur/modification_signaux.php";
        //$stagiaire = $sam->listestagiaire();
        //include "views/Administrateur/choix_theme.php";
    }
    public function suppression() {

        $signaux_covid_libelle="";
        $Sigaux_covid_image="";
        $sam = new signauxmodel();


        if (isset($_GET['id'])) {
            $tola = $_GET['id'];
            $sol = $sam->SuppSignaux($tola);
                  
            //var_dump($Sigaux_covid_image);
            //die();           
        }
        include "views/Administrateur/liste_signaux.php";
      
        
       
        //include "views/Administrateur/modification_signaux.php";
        //$stagiaire = $sam->listestagiaire();
        //include "views/Administrateur/choix_theme.php";
    }
    
    public function theme() {
        $sam = new thememodel();
        
        if (isset($_POST['btn_attribuer'])) {
            $sam->code_theme_stage = $_POST['sai_code_theme'];            
            $sam->mat = $_POST['mat'];            
            $sol = $sam->attribuertheme();           
        }        
        $sole = $sam->ThemeStagiaire($_SESSION['matricule']);
       $sol = $sam->rechercherThemeFiliere($_SESSION['filiere']);
        include "views/Gest_etaf/choix_theme.php";
    }
    
    public function liste() {

        $compte = new comptemodel();


        /*if (isset($_POST['btn_voir'])) {
            $mat = $_POST['mat'];            
            //$sol = $sam->UnStagiaire($mat);           
            $sol = $sam->ThemeStagiaire($mat);
        }*/
        
        $sol = $compte->listeCompte();
        include "views/Administrateur/liste_signaux.php";
    }


}

?>