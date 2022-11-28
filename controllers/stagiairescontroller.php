<?php
require 'models/stagiaire.php';

class info {

    public function enregistrement() {
        $matricule = "";
        $nom_prenom = "";
        $date_naissance = "";
        $lieu_naissance = "";
        $nationalite = "";
        $situation_matrimoniale = "";
        $nombre_enfant = "";
        $ville = "";
        $quartier = "";
        $telephone = "";
        $email = "";
        $cycle = "";
        $filiere = "";
        $date_debut_stage = "";
        $date_fin_stage = "";
        $duree_stage = "";
        $etat = "";
        $photo = "";
        $nom_prenom_pere = "";
        $lieu_habitation_pere = "";
        $nationalite_pere = "";
        $profession_pere = "";
        $nombre_enfant_pere = "";
        $telephone_pere = "";
        $nom_prenom_mere = "";
        $lieu_habitation_mere = "";
        $nationalite_mere = "";
        $profession_mere = "";
        $nombre_enfant_mere = "";
        $telephone_mere = "";
        $nom_prenom_urgence = "";
        $lieu_habitation_urgence = "";
        $nationalite_urgence = "";
        $profession_urgence = "";
        $date_naissance_urgence = "";
        $lieu_naissance_urgence = "";
        $telephone_urgence = "";
        $date_enregistrement = "";
        $code_theme = "";
        $type_stage = "";


        $stagiaire = new stagiairemodel();
        if (isset($_POST['btn_ajouter'])) {
        $stagiaire->photo = "";
            if (isset($_POST['sai_photo'])) {
                $ext = strtolower(substr(strrchr($_FILES['sai_photo']['name'], '.'), 1));
                move_uploaded_file($_FILES['sai_photo']['tmp_name'], "Fichiers/Gest_etaf/" . $_POST['sai_matricule'] . "." . $ext);

                $stagiaire->photo = $_POST['sai_matricule'] . "." . $ext;
            }


            $stagiaire->matricule = $_POST['sai_matricule'];
            $stagiaire->nom_prenom = $_POST['sai_nom_prenom'];
            $stagiaire->date_naissance = $_POST['sai_date_naissance'];
            $stagiaire->lieu_naissance = $_POST['sai_lieu_naissance'];
            $stagiaire->nationalite = $_POST['sai_nationalite'];
            $stagiaire->situation_matrimoniale = $_POST['sai_situation_matrimoniale'];
            $stagiaire->nombre_enfant = $_POST['sai_nombre_enfant'];
            $stagiaire->ville = $_POST['sai_ville'];
            $stagiaire->quartier = $_POST['sai_quartier'];
            $stagiaire->telephone = $_POST['sai_telephone'];
            $stagiaire->email = $_POST['sai_email'];
            $stagiaire->cycle = $_POST['sai_cycle'];
            $stagiaire->filiere = $_POST['sai_filiere'];
            $stagiaire->date_debut_stage = $_POST['sai_date_debut_stage'];
            $stagiaire->date_fin_stage = $_POST['sai_date_fin_stage'];
            $stagiaire->duree_stage = $_POST['sai_duree_stage'];
            $stagiaire->photo = $_POST['sai_matricule'] . "." . $ext;
            $stagiaire->nom_prenom_pere = $_POST['sai_nom_prenom_pere'];
            $stagiaire->lieu_habitation_pere = $_POST['sai_lieu_habitation_pere'];
            $stagiaire->nationalite_pere = $_POST['sai_nationalite_pere'];
            $stagiaire->profession_pere = $_POST['sai_profession_pere'];
            $stagiaire->nombre_enfant_pere = $_POST['sai_nombre_enfant_pere'];
            $stagiaire->telephone_pere = $_POST['sai_telephone_pere'];
            $stagiaire->nom_prenom_mere = $_POST['sai_nom_prenom_mere'];
            $stagiaire->lieu_habitation_mere = $_POST['sai_lieu_habitation_mere'];
            $stagiaire->nationalite_mere = $_POST['sai_nationalite_mere'];
            $stagiaire->profession_mere = $_POST['sai_profession_mere'];
            $stagiaire->nombre_enfant_mere = $_POST['sai_nombre_enfant_mere'];
            $stagiaire->telephone_mere = $_POST['sai_telephone_mere'];
            $stagiaire->nom_prenom_urgence = $_POST['sai_nom_prenom_urgence'];
            $stagiaire->date_naissance_urgence = $_POST['sai_date_naissance_urgence'];
            $stagiaire->lieu_naissance_urgence = $_POST['sai_lieu_naissance_urgence'];
            $stagiaire->nationalite_urgence = $_POST['sai_nationalite_urgence'];
            $stagiaire->profession_urgence = $_POST['sai_profession_urgence'];
            $stagiaire->lieu_habitation_urgence = $_POST['sai_lieu_habitation_urgence'];
            $stagiaire->telephone_urgence = $_POST['sai_telephone_urgence'];
            $stagiaire->date_enregistrement = $_POST['sai_date_enreg'];
            $stagiaire->type_stage = $_POST['type'];
            $stagiaire->login = $_POST['sai_matricule'];
            $stagiaire->pass = $_POST['sai_matricule'];
            $stagiaire->role = "Stagiaire";
            $stagiaire->ajouterstagiaire();
            $stagiaire->creationCompteStagiaire();
        }

        include 'views/Administrateur/enregistrement_stagiaire.php';
    }

    public function inscription() {
        $matricule = "";
        $nom_prenom = "";
        $date_naissance = "";
        $lieu_naissance = "";
        $nationalite = "";
        $situation_matrimoniale = "";
        $nombre_enfant = "";
        $ville = "";
        $quartier = "";
        $telephone = "";
        $email = "";
        $cycle = "";
        $filiere = "";
        $date_debut_stage = "";
        $date_fin_stage = "";
        $duree_stage = "";
        $etat = "";
        $photo = "";
        $nom_prenom_pere = "";
        $lieu_habitation_pere = "";
        $nationalite_pere = "";
        $profession_pere = "";
        $nombre_enfant_pere = "";
        $telephone_pere = "";
        $nom_prenom_mere = "";
        $lieu_habitation_mere = "";
        $nationalite_mere = "";
        $profession_mere = "";
        $nombre_enfant_mere = "";
        $telephone_mere = "";
        $nom_prenom_urgence = "";
        $lieu_habitation_urgence = "";
        $nationalite_urgence = "";
        $profession_urgence = "";
        $date_naissance_urgence = "";
        $lieu_naissance_urgence = "";
        $telephone_urgence = "";
        $date_enregistrement = "";
        $code_theme = "";
        $type_stage = "";
        
        
        $stagiaire = new stagiairemodel();
        $stagiaire->id = $_SESSION['post'];
        $post = $stagiaire->Postulant();
        
        $nom_prenom = $post[0]['nom'].' '.$post[0]['prenoms'];
        $date_naissance = $post[0]['datenaiss'];
        $lieu_naissance = $post[0]['lieunaiss'];
        $nationalite = $post[0]['nationalite'];
        $situation_matrimoniale = $post[0]['situation_matrimoniale'];
        $nombre_enfant = $post[0]['nbre_enfant'];
        $ville = $post[0]['ville'];
        $quartier = $post[0]['quartier'];
        $telephone = $post[0]['telephone'];
        $email = $post[0]['email'];
        $cycle = $post[0]['cycle'];
        $filiere = $post[0]['filiere'];
        
        include 'views/Administrateur/enregistrement_stagiaire.php';
    }

    public function liste() {
        $stagiaire = new stagiairemodel();
        
        if(isset($_POST['sout'])){
            $stagiaire->matricule=$_POST['mat'];
            $stagiaire->etat="Déjà Soutenu";
            $stagiaire->soutenu();            
        }        
        $sol = $stagiaire->listestagiaire();
        include 'views/Administrateur/liste_stagiaire.php';
    }

    public function rechercher() {
        $stagiaire = new stagiairemodel();

        if (isset($_POST['btn_rechercher'])) {

            $rech = $_POST['sai_rechercher'];

            $sol = $stagiaire->rechercherstagiaire($rech);
            if ($sol) {

                $matricule = $sol[0]['matricule'];
                $nom_prenom = $sol[0]['nom_prenom'];
                $date_naissance = $sol[0]['date_naissance'];
                $lieu_naissance = $sol[0]['lieu_naissance'];
                $nationalite = $sol[0]['nationalite'];
                $situation_matrimoniale = $sol[0]['situation_matrimoniale'];
                $nombre_enfant = $sol[0]['nombre_enfant'];
                $ville = $sol[0]['ville'];
                $quartier = $sol[0]['quartier'];
                $telephone = $sol[0]['telephone'];
                $email = $sol[0]['email'];
                $cycle = $sol[0]['cycle'];
                $filiere = $sol[0]['filiere'];
                $date_debut_stage = $sol[0]['date_debut_stage'];
                $date_fin_stage = $sol[0]['date_fin_stage'];
                $duree_stage = $sol[0]['duree_stage'];
                $etat = $sol[0]['etat'];
                $photo = $sol[0]['photo'];
                $nom_prenom_pere = $sol[0]['nom_prenom_pere'];
                $lieu_habitation_pere = $sol[0]['lieu_habitation_pere'];
                $nationalite_pere = $sol[0]['nationalite_pere'];
                $profession_pere = $sol[0]['profession_pere'];
                $nombre_enfant_pere = $sol[0]['nombre_enfant_pere'];
                $telephone_pere = $sol[0]['telephone_pere'];
                $nom_prenom_mere = $sol[0]['nom_prenom_mere'];
                $lieu_habitation_mere = $sol[0]['lieu_habitation_mere'];
                $nationalite_mere = $sol[0]['nationalite_mere'];
                $profession_mere = $sol[0]['profession_mere'];
                $nombre_enfant_mere = $sol[0]['nombre_enfant_mere'];
                $telephone_mere = $sol[0]['telephone_mere'];
                $nom_prenom_urgence = $sol[0]['nom_prenom_urgence'];
                $lieu_habitation_urgence = $sol[0]['lieu_habitation_urgence'];
                $nationalite_urgence = $sol[0]['nationalite_urgence'];
                $profession_urgence = $sol[0]['profession_urgence'];
                $date_naissance_urgence = $sol[0]['date_naissance_urgence'];
                $lieu_naissance_urgence = $sol[0]['lieu_naissance_urgence'];
                $telephone_urgence = $sol[0]['telephone_urgence'];
                $date_enregistrement = $sol[0]['date_enregistrement'];
                $type = $sol[0]['type_stage'];
            }

            //include 'views/Administrateur/rechercher_stagiaire.php';
        }

        // modifier
        if (isset($_POST['btn_modifier']) and ! empty($_FILES['sai_photo'])) {
            $ext = strtolower(substr(strrchr($_FILES['sai_photo']['name'], '.'), 1));
            move_uploaded_file($_FILES['sai_photo']['tmp_name'], "Fichiers/Gest_etaf/" . $_POST['sai_matricule'] . "." . $ext);

            $stagiaire->matricule = $_POST['sai_matricule'];
            $stagiaire->nom_prenom = $_POST['sai_nom_prenom'];
            $stagiaire->date_naissance = $_POST['sai_date_naissance'];
            $stagiaire->lieu_naissance = $_POST['sai_lieu_naissance'];
            $stagiaire->nationalite = $_POST['sai_nationalite'];
            $stagiaire->situation_matrimoniale = $_POST['sai_situation_matrimoniale'];
            $stagiaire->nombre_enfant = $_POST['sai_nombre_enfant'];
            $stagiaire->ville = $_POST['sai_ville'];
            $stagiaire->quartier = $_POST['sai_quartier'];
            $stagiaire->telephone = $_POST['sai_telephone'];
            $stagiaire->email = $_POST['sai_email'];
            $stagiaire->cycle = $_POST['sai_cycle'];
            $stagiaire->filiere = $_POST['sai_filiere'];
            $stagiaire->date_debut_stage = $_POST['sai_date_debut_stage'];
            $stagiaire->date_fin_stage = $_POST['sai_date_fin_stage'];
            $stagiaire->duree_stage = $_POST['sai_duree_stage'];
            $stagiaire->photo = $_POST['sai_matricule'] . "." . $ext;
            $stagiaire->nom_prenom_pere = $_POST['sai_nom_prenom_pere'];
            $stagiaire->lieu_habitation_pere = $_POST['sai_lieu_habitation_pere'];
            $stagiaire->nationalite_pere = $_POST['sai_nationalite_pere'];
            $stagiaire->profession_pere = $_POST['sai_profession_pere'];
            $stagiaire->nombre_enfant_pere = $_POST['sai_nombre_enfant_pere'];
            $stagiaire->telephone_pere = $_POST['sai_telephone_pere'];
            $stagiaire->nom_prenom_mere = $_POST['sai_nom_prenom_mere'];
            $stagiaire->lieu_habitation_mere = $_POST['sai_lieu_habitation_mere'];
            $stagiaire->nationalite_mere = $_POST['sai_nationalite_mere'];
            $stagiaire->profession_mere = $_POST['sai_profession_mere'];
            $stagiaire->nombre_enfant_mere = $_POST['sai_nombre_enfant_mere'];
            $stagiaire->telephone_mere = $_POST['sai_telephone_mere'];
            $stagiaire->nom_prenom_urgence = $_POST['sai_nom_prenom_urgence'];
            $stagiaire->date_naissance_urgence = $_POST['sai_date_naissance_urgence'];
            $stagiaire->lieu_naissance_urgence = $_POST['sai_lieu_naissance_urgence'];
            $stagiaire->nationalite_urgence = $_POST['sai_nationalite_urgence'];
            $stagiaire->profession_urgence = $_POST['sai_profession_urgence'];
            $stagiaire->lieu_habitation_urgence = $_POST['sai_lieu_habitation_urgence'];
            $stagiaire->telephone_urgence = $_POST['sai_telephone_urgence'];
            $stagiaire->date_enregistrement = $_POST['sai_date_enreg'];
            $stagiaire->type_stage = $_POST['type'];
            $stagiaire->login = $_POST['sai_matricule'];
            $stagiaire->pass = $_POST['sai_matricule'];
            $stagiaire->role = "Stagiaire";

            $stagiaire->modifierstagiaire();
        }


// supprimer
        if (isset($_POST['btn_supprimer'])) {

            $stagiaire->matricule = $_POST['sai_matricule'];
            $stagiaire->supprimerstagiaire();
            //include 'views/Administrateur/rechercher_stagiaire.php';
        }


        if (isset($_POST['btn_imprimer'])) {
            $rech = $_POST['sai_rechercher'];
            $sol = $stagiaire->rechercherstagiaire($rech);
            if ($sol) {
                $matricule = $sol[0]['matricule'];
                $nom_prenom = $sol[0]['nom_prenom'];
                $date_naissance = $sol[0]['date_naissance'];
                $lieu_naissance = $sol[0]['lieu_naissance'];
                $nationalite = $sol[0]['nationalite'];
                $situation_matrimoniale = $sol[0]['situation_matrimoniale'];
                $nombre_enfant = $sol[0]['nombre_enfant'];
                $ville = $sol[0]['ville'];
                $quartier = $sol[0]['quartier'];
                $telephone = $sol[0]['telephone'];
                $email = $sol[0]['email'];
                $cycle = $sol[0]['cycle'];
                $filiere = $sol[0]['filiere'];
                $date_debut_stage = $sol[0]['date_debut_stage'];
                $date_fin_stage = $sol[0]['date_fin_stage'];
                $duree_stage = $sol[0]['duree_stage'];
                $etat = $sol[0]['etat'];
                $photo = $sol[0]['photo'];
                $nom_prenom_pere = $sol[0]['nom_prenom_pere'];
                $lieu_habitation_pere = $sol[0]['lieu_habitation_pere'];
                $nationalite_pere = $sol[0]['nationalite_pere'];
                $profession_pere = $sol[0]['profession_pere'];
                $nombre_enfant_pere = $sol[0]['nombre_enfant_pere'];
                $telephone_pere = $sol[0]['telephone_pere'];
                $nom_prenom_mere = $sol[0]['nom_prenom_mere'];
                $lieu_habitation_mere = $sol[0]['lieu_habitation_mere'];
                $nationalite_mere = $sol[0]['nationalite_mere'];
                $profession_mere = $sol[0]['profession_mere'];
                $nombre_enfant_mere = $sol[0]['nombre_enfant_mere'];
                $telephone_mere = $sol[0]['telephone_mere'];
                $nom_prenom_urgence = $sol[0]['nom_prenom_urgence'];
                $lieu_habitation_urgence = $sol[0]['lieu_habitation_urgence'];
                $nationalite_urgence = $sol[0]['nationalite_urgence'];
                $profession_urgence = $sol[0]['profession_urgence'];
                $date_naissance_urgence = $sol[0]['date_naissance_urgence'];
                $lieu_naissance_urgence = $sol[0]['lieu_naissance_urgence'];
                $telephone_urgence = $sol[0]['telephone_urgence'];
                $date_enregistrement = $sol[0]['date_enregistrement'];
                $type = $sol[0]['type_stage'];
            }

            include 'views/includes/pdf.php';
        }

        include 'views/Administrateur/rechercher_stagiaire.php';
    }

}
