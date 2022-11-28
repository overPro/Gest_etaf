<?php
require 'models/dossier.php';

class Gest_etaf {

    public function enregistrement() {

        //$stagiaire = "";
        $perso = new dossiermodel();

        if (isset($_POST['btn_enregistrer'])) {
            
            move_uploaded_file($_FILES['sai_lettre_motivation']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'motivation.'.strtolower(substr(strrchr($_FILES['sai_lettre_motivation']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_lettre_recommandation']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'recommandation.'.strtolower(substr(strrchr($_FILES['sai_lettre_recommandation']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_curriculum_vitae']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'curriculum.'.strtolower(substr(strrchr($_FILES['sai_curriculum_vitae']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_piece_identite']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'piece.'.strtolower(substr(strrchr($_FILES['sai_piece_identite']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_diplome_admissibilite']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'admissibilite.'.strtolower(substr(strrchr($_FILES['sai_diplome_admissibilite']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_fiche_engagement']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'engagement.'.strtolower(substr(strrchr($_FILES['sai_fiche_engagement']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_fiche_identification']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'identification.'.strtolower(substr(strrchr($_FILES['sai_fiche_identification']['name'], '.'), 1)));
            move_uploaded_file($_FILES['sai_fiche_circuit']['tmp_name'], "Fichiers/dossiers_Gest_etaf/" . $_POST['mat'] . 'circuit.'.strtolower(substr(strrchr($_FILES['sai_fiche_circuit']['name'], '.'), 1)));

            $perso->curriculum_vitae = $_POST['mat'] . 'curriculum.'.strtolower(substr(strrchr($_FILES['sai_curriculum_vitae']['name'], '.'), 1));
            $perso->date_depot_dossier = date('d-m-Y');
            $perso->diplome_admissibilite = $_POST['mat'] . 'admissibilite.'.strtolower(substr(strrchr($_FILES['sai_diplome_admissibilite']['name'], '.'), 1));
            $perso->fiche_circuit_stage = $_POST['mat'] . 'circuit.'.strtolower(substr(strrchr($_FILES['sai_fiche_circuit']['name'], '.'), 1));
            $perso->fiche_engagement = $_POST['mat'] . 'engagement.'.strtolower(substr(strrchr($_FILES['sai_fiche_engagement']['name'], '.'), 1));
            $perso->fiche_identification = $_POST['mat'] . 'identification.'.strtolower(substr(strrchr($_FILES['sai_fiche_identification']['name'], '.'), 1));
            $perso->lettre_motivation = $_POST['mat'] . 'motivation.'.strtolower(substr(strrchr($_FILES['sai_lettre_motivation']['name'], '.'), 1));
            $perso->lettre_recommandation = $_POST['mat'] . 'recommandation.'.strtolower(substr(strrchr($_FILES['sai_lettre_recommandation']['name'], '.'), 1));
            $perso->matricule = $_POST['mat'];
            $perso->piece_identite = $_POST['mat'] . 'piece.'.strtolower(substr(strrchr($_FILES['sai_piece_identite']['name'], '.'), 1));
            $perso->ajouterdossier();
        }

        $stagiaire = $perso->listestagiaire();
        include 'views/Administrateur/dossiers_stagiaire.php';
    }

    public function consultation() {

        $motivation = "";
        $recom = "";
        $vitae = "";
        $identite = "";
        $admi = "";
        $identification = "";
        $sircuit = "";
        $eng = "";
        $perso = new dossiermodel();

        if (isset($_POST['btn_consul'])) {
            $rech = $perso->rechercherdossiermat(filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING));
            $stag = $perso->stagiaire(filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING));

            $motivation = $rech[0]['lettre_motivation'];
            $recom = $rech[0]['lettre_recommandation'];
            $vitae = $rech[0]['curriculum_vitae'];
            $identite = $rech[0]['piece_identite'];
            $admi = $rech[0]['diplome_admissibilite'];
            $identification = $rech[0]['fiche_identification'];
            $sircuit = $rech[0]['fiche_circuit_stage'];
            $eng = $rech[0]['fiche_engagement'];
            $mat = $rech[0]['matricule'];
        }

        $stagiaire = $perso->listestagiaire();
        include 'views/Administrateur/liste_dossiers_stagiaire.php';
    }
    
    
    public function dossier() {
        $perso = new dossiermodel();
        $rech = $perso->rechercherdossiermat($_SESSION['matricule']);
        $motivation = $rech[0]['lettre_motivation'];
        $recom = $rech[0]['lettre_recommandation'];
        $vitae = $rech[0]['curriculum_vitae'];
        $identite = $rech[0]['piece_identite'];
        $admi = $rech[0]['diplome_admissibilite'];
        $identification = $rech[0]['fiche_identification'];
        $sircuit = $rech[0]['fiche_circuit_stage'];
        $eng = $rech[0]['fiche_engagement'];

        include 'views/Gest_etaf/liste_dossiers_stagiaire.php';
    }

    public function liste() {
        $post = new postModel();
        $posts = $post->liste();
        include '';
    }

}
