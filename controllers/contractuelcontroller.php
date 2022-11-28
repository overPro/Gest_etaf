<?php
require "models/contractuel.php";

class employe {

    public function enregistrement() {

        $contractuel = new contractuelmodel();

        $CONTRACTUEL_ID="";
        $CONTRACTUEL_CODE="";
        $CONTRACTUEL_NOM="";
        $CONTRACTUEL_CODE_GROUPE="";
        $CONTRACTUEL_CODE_HORAIRE="";
        $CONTRACTUEL_PRESENCE="";
        $CONTRACTUEL_CREATED="";
        $code=time()."".date("d"); 

        if (isset($_POST['btn_enregistrer'])) {
            
            
            $contractuel->CONTRACTUEL_NOM = $_POST['txt_CONTRACTUEL_NOM'];
            $contractuel->CONTRACTUEL_CODE_GROUPE = $_POST['txt_CONTRACTUEL_CODE_GROUPE'];
            $contractuel->CONTRACTUEL_CODE_HORAIRE = $_POST['txt_CONTRACTUEL_CODE_HORAIRE'];
            $contractuel->CONTRACTUEL_PRESENCE = $_POST['txt_CONTRACTUEL_PRESENCE'];
            $contractuel->CONTRACTUEL_CREATED = date("Y-m-d H:i:s");
            $contractuel->CONTRACTUEL_CODE = "code".time();
            //var_dump($contractuel);
            //die();
    
           

            $contractuel->ajouterContractuel();
        }


        if (isset($_POST['btn_modifier'])) {
            $contractuel->CONTRACTUEL_NOM = $_POST['txt_CONTRACTUEL_NOM'];
            $contractuel->CONTRACTUEL_CODE_GROUPE = $_POST['txt_CONTRACTUEL_CODE_GROUPE'];
            $contractuel->CONTRACTUEL_CODE_HORAIRE = $_POST['txt_CONTRACTUEL_CODE_HORAIRE'];
            $contractuel->CONTRACTUEL_PRESENCE = $_POST['txt_CONTRACTUEL_PRESENCE'];
            $contractuel->CONTRACTUEL_CODE = $_POST['txt_CONTRACTUEL_CODE'];
           // var_dump($contractuel);
            //die();
            
            
            $contractuel->modifierContractuel();
            
            


        }

        if (isset($_POST['btn_supprimer'])) {
            $contractuel->CONTRACTUEL_CODE = $_POST['txt_CONTRACTUEL_CODE'];


            $contractuel->supprimerContractuel();
        }
        if (isset($_POST['btn_actualiser'])) {
            ?>
            <script >alert("Actualisation effectué !")</script>
            <?php
        }
        if (isset($_POST['btn_rechercher'])) {
            $contractuel->CONTRACTUEL_CODE = $_POST['txt_CONTRACTUEL_CODE'];


            $sol1=$contractuel->FindContractuel($contractuel->CONTRACTUEL_CODE);
            //$Sigaux_covid_image=$sol[0]['Sigaux_covid_image'];
            $CONTRACTUEL_ID=$sol1[0]['CONTRACTUEL_ID'];
            $CONTRACTUEL_CODE=$sol1[0]['CONTRACTUEL_CODE'];
            $CONTRACTUEL_NOM=$sol1[0]['CONTRACTUEL_NOM'];
            $CONTRACTUEL_CODE_GROUPE=$sol1[0]['CONTRACTUEL_CODE_GROUPE'];
            $CONTRACTUEL_CODE_HORAIRE=$sol1[0]['CONTRACTUEL_CODE_HORAIRE'];
            $CONTRACTUEL_PRESENCE=$sol1[0]['CONTRACTUEL_PRESENCE'];
            $CONTRACTUEL_CREATED=$sol1[0]['CONTRACTUEL_CREATED'];
        }
        $sol = $contractuel->listeContractuel();
        //var_dump($sol);
        include "views/Administrateur/enregistrement_contractuel.php";
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

        $contractuel = new contractuelmodel();


        /*if (isset($_POST['btn_voir'])) {
            $mat = $_POST['mat'];            
            //$sol = $sam->UnStagiaire($mat);           
            $sol = $sam->ThemeStagiaire($mat);
        }*/
        
        $sol = $contractuel->listeContractuel();
        include "views/Administrateur/liste_contractuel.php";
    }


}

?>