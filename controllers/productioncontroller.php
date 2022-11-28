<?php
require "models/production.php";

class activite {

    public function enregistrement() {

        $production = new productionmodel();

         $PRODUCTION_ID="";
     $PRODUCTION_CODE="";
     $PRODUCTION_QUANTITE="";
     $PRODUCTION_QUANTITE_1="";
     $PRODUCTION_QUANTITE_2="";
     $PRODUCTION_QUANTITE_3="";
     $PRODUCTION_CODE_GROUPE="";
     $PRODUCTION_CREATED="";
     $PRODUCTION_CODE_LIBELLE="";
     $PRODUCTION_JOUR="";
     $PRODUCTION_TOTAL="";
     $PRODUCTION_CODE_LIBELLE_1="";
     $PRODUCTION_CODE_LIBELLE_2="";
     $PRODUCTION_CODE_LIBELLE_3="";
     $code=time()."".date("d"); 
     $PRODUCTION_TOTAL_1="";
     $PRODUCTION_TOTAL_2="";
     $PRODUCTION_TOTAL_3="";
     
        if (isset($_POST['btn_enregistrer'])) {
            
            
            $production->PRODUCTION_QUANTITE = $_POST['txt_PRODUCTION_QUANTITE'];
            $production->PRODUCTION_QUANTITE_1 = $_POST['txt_PRODUCTION_QUANTITE_1'];
            $production->PRODUCTION_QUANTITE_2 = $_POST['txt_PRODUCTION_QUANTITE_2'];
            $production->PRODUCTION_QUANTITE_3 = $_POST['txt_PRODUCTION_QUANTITE_3'];
            $production->PRODUCTION_CODE_GROUPE = $_POST['txt_PRODUCTION_CODE_GROUPE'];
            $production->PRODUCTION_CODE_LIBELLE = $_POST['txt_PRODUCTION_CODE_LIBELLE'];
            $production->PRODUCTION_CODE_LIBELLE_1 = $_POST['txt_PRODUCTION_CODE_LIBELLE_1'];
            $production->PRODUCTION_CODE_LIBELLE_2 = $_POST['txt_PRODUCTION_CODE_LIBELLE_2'];
            $production->PRODUCTION_CODE_LIBELLE_3 = $_POST['txt_PRODUCTION_CODE_LIBELLE_3'];
            $production->PRODUCTION_JOUR = date("l");
            $production->PRODUCTION_TOTAL = $_POST['txt_PRODUCTION_TOTAL'];
            $production->PRODUCTION_TOTAL_1 = $_POST['txt_PRODUCTION_TOTAL_1'];
            $production->PRODUCTION_TOTAL_2 = $_POST['txt_PRODUCTION_TOTAL_2'];
            $production->PRODUCTION_TOTAL_3 = $_POST['txt_PRODUCTION_TOTAL_3'];
            $production->PRODUCTION_CREATED = date("Y-m-d H:i:s");
            $production->PRODUCTION_CODE = "code".time();
            //var_dump($production);
            //die();
    
           

            $production->ajouterProduction();
        }


        if (isset($_POST['btn_modifier'])) {
            $production->PRODUCTION_QUANTITE = $_POST['txt_PRODUCTION_QUANTITE'];
            $production->PRODUCTION_QUANTITE_1 = $_POST['txt_PRODUCTION_QUANTITE_1'];
            $production->PRODUCTION_QUANTITE_2 = $_POST['txt_PRODUCTION_QUANTITE_2'];
            $production->PRODUCTION_QUANTITE_3 = $_POST['txt_PRODUCTION_QUANTITE_3'];
            $production->PRODUCTION_CODE_GROUPE = $_POST['txt_PRODUCTION_CODE_GROUPE'];
            $production->PRODUCTION_CODE_LIBELLE = $_POST['txt_PRODUCTION_CODE_LIBELLE'];
            $production->PRODUCTION_CODE_LIBELLE_1 = $_POST['txt_PRODUCTION_CODE_LIBELLE_1'];
            $production->PRODUCTION_CODE_LIBELLE_2 = $_POST['txt_PRODUCTION_CODE_LIBELLE_2'];
            $production->PRODUCTION_CODE_LIBELLE_3 = $_POST['txt_PRODUCTION_CODE_LIBELLE_3'];
            $production->PRODUCTION_JOUR = date("l");
            $production->PRODUCTION_TOTAL = $_POST['txt_PRODUCTION_TOTAL'];
            $production->PRODUCTION_TOTAL_1 = $_POST['txt_PRODUCTION_TOTAL_1'];
            $production->PRODUCTION_TOTAL_2 = $_POST['txt_PRODUCTION_TOTAL_2'];
            $production->PRODUCTION_TOTAL_3 = $_POST['txt_PRODUCTION_TOTAL_3'];
             $production->PRODUCTION_CODE =$_POST['txt_PRODUCTION_CODE'];
           // var_dump($contractuel);
            //die();
            
            
            $production->modifierProduction();
            
            


        }

        if (isset($_POST['btn_supprimer'])) {
            $production->PRODUCTION_CODE = $_POST['txt_PRODUCTION_CODE'];


            $production->supprimerProduction();
        }
        if (isset($_POST['btn_actualiser'])) {
            ?>
            <script >alert("Actualisation effectué !")</script>
            <?php
        }
        if (isset($_POST['btn_rechercher'])) {
            $production->PRODUCTION_CREATED = $_POST['txt_PRODUCTION_CREATED'];
            $production->PRODUCTION_CODE_GROUPE = $_POST['txt_PRODUCTION_CODE_GROUPE_Search'];
            //var_dump($production->PRODUCTION_CREATED." ".date("H:i:s"));
            //die();
            
            $sol=$production->FindProduction($production->PRODUCTION_CREATED." "."00:00:00", $production->PRODUCTION_CODE_GROUPE);
            //var_dump($sol);
            //die();
           

             $PRODUCTION_ID=$sol[0]['PRODUCTION_ID'];
             $PRODUCTION_CODE=$sol[0]['PRODUCTION_CODE'];
             $PRODUCTION_QUANTITE=$sol[0]['PRODUCTION_QUANTITE'];
             $PRODUCTION_QUANTITE_1=$sol[0]['PRODUCTION_QUANTITE_1'];
             $PRODUCTION_QUANTITE_2=$sol[0]['PRODUCTION_QUANTITE_2'];
             $PRODUCTION_QUANTITE_3=$sol[0]['PRODUCTION_QUANTITE_3'];
             $PRODUCTION_CODE_GROUPE=$sol[0]['PRODUCTION_CODE_GROUPE'];
             $PRODUCTION_CREATED=$sol[0]['PRODUCTION_CREATED'];
             $PRODUCTION_CODE_LIBELLE=$sol[0]['PRODUCTION_CODE_LIBELLE'];
             $PRODUCTION_JOUR=$sol[0]['PRODUCTION_JOUR'];
             $PRODUCTION_TOTAL=$sol[0]['PRODUCTION_TOTAL'];
             $PRODUCTION_CODE_LIBELLE_1=$sol[0]['PRODUCTION_CODE_LIBELLE_1'];
             $PRODUCTION_CODE_LIBELLE_2=$sol[0]['PRODUCTION_CODE_LIBELLE_2'];
             $PRODUCTION_CODE_LIBELLE_3=$sol[0]['PRODUCTION_CODE_LIBELLE_3'];    
             $PRODUCTION_TOTAL_1=$sol[0]['PRODUCTION_TOTAL_1'];
             $PRODUCTION_TOTAL_2=$sol[0]['PRODUCTION_TOTAL_2'];
             $PRODUCTION_TOTAL_3=$sol[0]['PRODUCTION_TOTAL_3'];
            
        }
        $sol = $production->listeProduction();
        $sol1 = $production->listeProduction_type();
        //var_dump($sol);
        include "views/Administrateur/enregistrement_production.php";
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

        $production = new productionmodel();


        /*if (isset($_POST['btn_voir'])) {
            $mat = $_POST['mat'];            
            //$sol = $sam->UnStagiaire($mat);           
            $sol = $sam->ThemeStagiaire($mat);
        }*/
        
        $sol = $production->listeProduction();
        include "views/Administrateur/liste_production.php";
    }


}

?>