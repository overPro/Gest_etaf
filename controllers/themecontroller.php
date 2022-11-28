<?php
require "models/theme.php";

class stagiaire {

    public function enregistrement() {

        $sam = new thememodel();

        $code_theme_stage = "";
        $titre_theme_stage = "";
        $description_theme_stage = "";
        $code_filiere = "";

        if (isset($_POST['btn_enregistrer'])) {
            $sam->code_theme_stage = $_POST['sai_code_theme_stage'];
            $sam->titre_theme_stage = $_POST['sai_titre_theme_stage'];
            $sam->description_theme_stage = $_POST['sai_description_theme_stage'];
            $sam->code_filiere = $_POST['sai_code_filiere'];

            $sam->ajouterTheme();
        }


        if (isset($_POST['btn_modifier'])) {
            $sam->code_theme_stage = $_POST['sai_code_theme_stage'];
            $sam->titre_theme_stage = $_POST['sai_titre_theme_stage'];
            $sam->description_theme_stage = $_POST['sai_description_theme_stage'];
            $sam->code_filiere = $_POST['sai_code_filiere'];


            $sam->modifierTheme();
        }

        if (isset($_POST['btn_supprimer'])) {
            $sam->code_theme_stage = $_POST['sai_code_theme_stage'];


            $sam->supprimerTheme();
        }
        include "views/Administrateur/enregistrement_theme.php";
    }

    public function choix() {


        $sam = new thememodel();


        if (isset($_POST['btn_rechercher'])) {
            $tola = $_POST['sai_filiere'];            
            $sol = $sam->rechercherThemeFiliere($tola);            
        }
        
        if (isset($_POST['btn_attribuer'])) {
            $sam->code_theme_stage = $_POST['sai_code_theme'];            
            $sam->mat = $_POST['mat'];            
            $sol = $sam->attribuertheme();           
        }
        
        
        $stagiaire = $sam->listestagiaire();
        include "views/Administrateur/choix_theme.php";
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

        $sam = new thememodel();


        if (isset($_POST['btn_voir'])) {
            $mat = $_POST['mat'];            
            //$sol = $sam->UnStagiaire($mat);           
            $sol = $sam->ThemeStagiaire($mat);
        }
        
        $stagiaire = $sam->listestagiaire();
        include "views/Administrateur/themestagiaire.php";
    }


}

?>