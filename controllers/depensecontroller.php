<?php
require "models/depense.php";

class debit {

    public function enregistrement() {
        

        $depense = new depensemodel();

         $DEPENSE_NEW_ID= "";
     $MEACANIQUE_MATERIEL_1= "";
     $MECANIQUE_MATERIEL_2= "";
     $MECANIQUE_MATERIEL_3= "";
     $MECANIQUE_MATERIEL_4= "";
     $MECANIQUE_SOMMES_1= "";
     $MECANIQUE_SOMMES_2= "";
     $MECANIQUE_SOMMES_3= "";
     $MECANIQUE_SOMMES_4= "";
     $MECANIQUE_TOTAL= "";
     $DON_MATERIEL_1= "";
     $DON_SOMMES_1= "";
     $DON_TOTAL= "";
     $NOURRITURE_MATERIEL_1= "";
     $NOURRITURE_MATERIEL_2= "";
     $NOURRITURE_MATERIEL_3= "";
     $NOURRITURE_MATERIEL_4= "";
     $NOURRITURE_SOMMES_1= "";
     $NOURRITURE_SOMMES_2= "";
     $NOURRITURE_SOMMES_3= "";
     $NOURRITURE_SOMMES_4= "";
     $NOURRITURE_TOTAL= "";
     $CARBURANT_SOMMES_1= "";
     $CARBURANT_TOTAL= "";
     $TRANSPORT_SOMMES_1= "";
     $TRANSPORT_SOMMES_2= "";
     $TRANSPORT_NOM_BENEFICIAIRE_1= "";
     $TRANSPORT_NOM_BENEFICIARE_2= "";
     $TRANSPORT_TOTAL= "";
     $ELECTRICITE_SOMMES_1= "";
     $ELECTRICITE_NOM_BENEFICIAIRE_1= "";
     $ELECTRICITE_TOTAL= "";
     $SANTE_PRIX_ET_NOM_DU_MEDICAL_1= "";
     $SANTE_NOM_DU_BENEFICIAIRE_1= "";
     $SANTE_TOTAL= "";
     $DEPENSE_CODE= "";
     $DEPENSE_TOTAL_DU_JOUR= "";
     $DEPENSES_CREATED= "";
        $code=time()."".date("d"); 

        if (isset($_POST['btn_ajouter'])) {
            
     $depense->MEACANIQUE_MATERIEL_1= $_POST['txt_MEACANIQUE_MATERIEL_1'];
     $depense->MECANIQUE_MATERIEL_2= $_POST['txt_MECANIQUE_MATERIEL_2'];
     $depense->MECANIQUE_MATERIEL_3= $_POST['txt_MECANIQUE_MATERIEL_3'];
     $depense->MECANIQUE_MATERIEL_4= $_POST['txt_MECANIQUE_MATERIEL_4'];
     $depense->MECANIQUE_SOMMES_1= $_POST['txt_MECANIQUE_SOMMES_1'];
     $depense->MECANIQUE_SOMMES_2= $_POST['txt_MECANIQUE_SOMMES_2'];
     $depense->MECANIQUE_SOMMES_3= $_POST['txt_MECANIQUE_SOMMES_3'];
     $depense->MECANIQUE_SOMMES_4= $_POST['txt_MECANIQUE_SOMMES_4'];
     $depense->MECANIQUE_TOTAL= $_POST['txt_MECANIQUE_TOTAL'];
     $depense->DON_MATERIEL_1= $_POST['txt_DON_MATERIEL_1'];
     $depense->DON_SOMMES_1= $_POST['txt_DON_SOMMES_1'];
     $depense->DON_TOTAL= $_POST['txt_DON_TOTAL'];
     $depense->NOURRITURE_MATERIEL_1= $_POST['txt_NOURRITURE_MATERIEL_1'];
     $depense->NOURRITURE_MATERIEL_2= $_POST['txt_NOURRITURE_MATERIEL_2'];
     $depense->NOURRITURE_MATERIEL_3= $_POST['txt_NOURRITURE_MATERIEL_3'];
     $depense->NOURRITURE_MATERIEL_4= $_POST['txt_NOURRITURE_MATERIEL_4'];
     $depense->NOURRITURE_SOMMES_1= $_POST['txt_NOURRITURE_SOMMES_1'];
     $depense->NOURRITURE_SOMMES_2= $_POST['txt_NOURRITURE_SOMMES_2'];
     $depense->NOURRITURE_SOMMES_3= $_POST['txt_NOURRITURE_SOMMES_3'];
     $depense->NOURRITURE_SOMMES_4= $_POST['txt_NOURRITURE_SOMMES_4'];
     $depense->NOURRITURE_TOTAL= $_POST['txt_NOURRITURE_TOTAL'];
     $depense->CARBURANT_SOMMES_1= $_POST['txt_CARBURANT_SOMMES_1'];
     $depense->CARBURANT_TOTAL= $_POST['txt_CARBURANT_TOTAL'];
     $depense->TRANSPORT_SOMMES_1= $_POST['txt_TRANSPORT_SOMMES_1'];
     $depense->TRANSPORT_SOMMES_2= $_POST['txt_TRANSPORT_SOMMES_2'];
     $depense->TRANSPORT_NOM_BENEFICIAIRE_1= $_POST['txt_TRANSPORT_NOM_BENEFICIAIRE_1'];
     $depense->TRANSPORT_NOM_BENEFICIARE_2= $_POST['txt_TRANSPORT_NOM_BENEFICIARE_2'];
     $depense->TRANSPORT_TOTAL= $_POST['txt_TRANSPORT_TOTAL'];
     $depense->ELECTRICITE_SOMMES_1= $_POST['txt_ELECTRICITE_SOMMES_1'];
     $depense->ELECTRICITE_NOM_BENEFICIAIRE_1= $_POST['txt_ELECTRICITE_NOM_BENEFICIAIRE_1'];
     $depense->ELECTRICITE_TOTAL= $_POST['txt_ELECTRICITE_TOTAL'];
     $depense->SANTE_PRIX_ET_NOM_DU_MEDICAL_1= $_POST['txt_SANTE_PRIX_ET_NOM_DU_MEDICAL_1'];
     $depense->SANTE_NOM_DU_BENEFICIAIRE_1= $_POST['txt_SANTE_NOM_DU_BENEFICIAIRE_1'];
     $depense->SANTE_TOTAL= $_POST['txt_SANTE_TOTAL'];
     $depense->DEPENSE_CODE= "code".time();
     $depense->DEPENSE_TOTAL_DU_JOUR= $_POST['txt_DEPENSE_TOTAL_DU_JOUR'];
     $depense->DEPENSES_CREATED= date("Y-m-d H:i:s");


            
            //var_dump($depense);
            //die();
    
           

            $depense->ajouterDepense();
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
            $depense = new depensemodel();
            $depense->DEPENSES_CREATED = $_POST['txt_DEPENSES_CREATED'];
            
            //$sol=$production->FindProduction($production->PRODUCTION_CREATED." "."00:00:00", $production->PRODUCTION_CODE_GROUPE);
            

            $sol=$depense->FindDepenseAllTwoDate($depense->DEPENSES_CREATED." "."00:00:00");
            //var_dump($sol);
            //die();


    $DEPENSE_NEW_ID= $sol[0]['DEPENSE_NEW_ID'];
     $MEACANIQUE_MATERIEL_1= $sol[0]['MEACANIQUE_MATERIEL_1'];
     $MECANIQUE_MATERIEL_2= $sol[0]['MECANIQUE_MATERIEL_2'];
     $MECANIQUE_MATERIEL_3= $sol[0]['MECANIQUE_MATERIEL_3'];
     $MECANIQUE_MATERIEL_4= $sol[0]['MECANIQUE_MATERIEL_4'];
     $MECANIQUE_SOMMES_1= $sol[0]['MECANIQUE_SOMMES_1'];
     $MECANIQUE_SOMMES_2= $sol[0]['MECANIQUE_SOMMES_2'];
     $MECANIQUE_SOMMES_3= $sol[0]['MECANIQUE_SOMMES_3'];
     $MECANIQUE_SOMMES_4= $sol[0]['MECANIQUE_SOMMES_4'];
     $MECANIQUE_TOTAL= $sol[0]['MECANIQUE_TOTAL'];
     $DON_MATERIEL_1= $sol[0]['DON_MATERIEL_1'];
     $DON_SOMMES_1= $sol[0]['DON_SOMMES_1'];
     $DON_TOTAL= $sol[0]['DON_TOTAL'];
     $NOURRITURE_MATERIEL_1= $sol[0]['NOURRITURE_MATERIEL_1'];
     $NOURRITURE_MATERIEL_2= $sol[0]['NOURRITURE_MATERIEL_2'];
     $NOURRITURE_MATERIEL_3= $sol[0]['NOURRITURE_MATERIEL_3'];
     $NOURRITURE_MATERIEL_4= $sol[0]['NOURRITURE_MATERIEL_4'];
     $NOURRITURE_SOMMES_1= $sol[0]['NOURRITURE_SOMMES_1'];
     $NOURRITURE_SOMMES_2= $sol[0]['NOURRITURE_SOMMES_2'];
     $NOURRITURE_SOMMES_3= $sol[0]['NOURRITURE_SOMMES_3'];
     $NOURRITURE_SOMMES_4= $sol[0]['NOURRITURE_SOMMES_4'];
     $NOURRITURE_TOTAL= $sol[0]['NOURRITURE_TOTAL'];
     $CARBURANT_SOMMES_1= $sol[0]['CARBURANT_SOMMES_1'];
     $CARBURANT_TOTAL= $sol[0]['CARBURANT_TOTAL'];
     $TRANSPORT_SOMMES_1= $sol[0]['TRANSPORT_SOMMES_1'];
     $TRANSPORT_SOMMES_2= $sol[0]['TRANSPORT_SOMMES_2'];
     $TRANSPORT_NOM_BENEFICIAIRE_1= $sol[0]['TRANSPORT_NOM_BENEFICIAIRE_1'];
     $TRANSPORT_NOM_BENEFICIARE_2= $sol[0]['TRANSPORT_NOM_BENEFICIARE_2'];
     $TRANSPORT_TOTAL= $sol[0]['TRANSPORT_TOTAL'];
     $ELECTRICITE_SOMMES_1= $sol[0]['ELECTRICITE_SOMMES_1'];
     $ELECTRICITE_NOM_BENEFICIAIRE_1= $sol[0]['ELECTRICITE_NOM_BENEFICIAIRE_1'];
     $ELECTRICITE_TOTAL= $sol[0]['ELECTRICITE_TOTAL'];
     $SANTE_PRIX_ET_NOM_DU_MEDICAL_1= $sol[0]['SANTE_PRIX_ET_NOM_DU_MEDICAL_1'];
     $SANTE_NOM_DU_BENEFICIAIRE_1= $sol[0]['SANTE_NOM_DU_BENEFICIAIRE_1'];
     $SANTE_TOTAL= $sol[0]['SANTE_TOTAL'];
     $DEPENSE_CODE= $sol[0]['DEPENSE_CODE'];
     $DEPENSE_TOTAL_DU_JOUR= $sol[0]['DEPENSE_TOTAL_DU_JOUR'];
     $DEPENSES_CREATED= $sol[0]['DEPENSES_CREATED'];
        }
        //$sol = $depense->listeContractuel();
        //var_dump($sol);
        include "views/Administrateur/enregistrement_depense.php";
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

        $depense = new depensemodel();


        /*if (isset($_POST['btn_voir'])) {
            $mat = $_POST['mat'];            
            //$sol = $sam->UnStagiaire($mat);           
            $sol = $sam->ThemeStagiaire($mat);
        }*/
        
        $sol = $depense->listeDepense();
        include "views/Administrateur/liste_depense.php";
    }


}

?>