<?php

class stagiairemodel {

    public $matricule;
    public $nom_prenom;
    public $date_naissance;
    public $lieu_naissance;
    public $nationalite;
    public $situation_matrimoniale;
    public $nombre_enfant;
    public $ville;
    public $quartier;
    public $telephone;
    public $email;
    public $cycle;
    public $filiere;
    public $date_debut_stage;
    public $date_fin_stage;
    public $duree_stage;
    public $type_stage;
    public $etat;
    public $photo;
    public $nom_prenom_pere;
    public $lieu_habitation_pere;
    public $nationalite_pere;
    public $profession_pere;
    public $nombre_enfant_pere;
    public $telephone_pere;
    public $nom_prenom_mere;
    public $lieu_habitation_mere;
    public $nationalite_mere;
    public $profession_mere;
    public $nombre_enfant_mere;
    public $telephone_mere;
    public $nom_prenom_urgence;
    public $lieu_habitation_urgence;
    public $nationalite_urgence;
    public $profession_urgence;
    public $date_naissance_urgence;
    public $lieu_naissance_urgence;
    public $telephone_urgence;
    public $date_enregistrement;
    public $code_theme;
    public $login;
    public $pass;
    public $role;
    public $id;
    public $con;

    function __construct() {
        require "database/connexion.php";
    }

    public function ajouterstagiaire() {

        $req = $this->con->prepare('INSERT INTO stagiaire VALUES (:matricule,:nom_prenom,:date_naissance,:lieu_naissance,:nationalite,:situation_matrimoniale,:nombre_enfant,:ville,:quartier,:telephone,:email,:cycle,:filiere,:date_debut_stage,:date_fin_stage,:duree_stage,NULL,:photo,:nom_prenom_pere,:lieu_habitation_pere,:nationalite_pere,:profession_pere,:nombre_enfant_pere,:telephone_pere,:nom_prenom_mere,:lieu_habitation_mere,:nationalite_mere,:profession_mere,:nombre_enfant_mere,:telephone_mere,:nom_prenom_urgence,:date_naissance_urgence,:lieu_naiss_urgence,:nationalite_urgence,:profession_urgence,:lieu_habitation_urgence,:telephone_urgence,:date_enregistrement,NULL,:type)');

        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':nom_prenom', $this->nom_prenom);
        $req->bindParam(':date_naissance', $this->date_naissance);
        $req->bindParam(':lieu_naissance', $this->lieu_naissance);
        $req->bindParam(':nationalite', $this->nationalite);
        $req->bindParam(':situation_matrimoniale', $this->situation_matrimoniale);
        $req->bindParam(':nombre_enfant', $this->nombre_enfant);
        $req->bindParam(':ville', $this->ville);
        $req->bindParam(':quartier', $this->quartier);
        $req->bindParam(':telephone', $this->telephone);
        $req->bindParam(':email', $this->email);
        $req->bindParam(':cycle', $this->cycle);
        $req->bindParam(':filiere', $this->filiere);
        $req->bindParam(':date_debut_stage', $this->date_debut_stage);
        $req->bindParam(':date_fin_stage', $this->date_fin_stage);
        $req->bindParam(':duree_stage', $this->duree_stage);
        $req->bindParam(':photo', $this->photo);
        $req->bindParam(':nom_prenom_pere', $this->nom_prenom_pere);
        $req->bindParam(':lieu_habitation_pere', $this->lieu_habitation_pere);
        $req->bindParam(':nationalite_pere', $this->nationalite_pere);
        $req->bindParam(':profession_pere', $this->profession_pere);
        $req->bindParam(':nombre_enfant_pere', $this->nombre_enfant_pere);
        $req->bindParam(':telephone_pere', $this->telephone_pere);
        $req->bindParam(':nom_prenom_mere', $this->nom_prenom_mere);
        $req->bindParam(':lieu_habitation_mere', $this->lieu_habitation_mere);
        $req->bindParam(':nationalite_mere', $this->nationalite_mere);
        $req->bindParam(':profession_mere', $this->profession_mere);
        $req->bindParam(':nombre_enfant_mere', $this->nombre_enfant_mere);
        $req->bindParam(':telephone_mere', $this->telephone_mere);
        $req->bindParam(':nom_prenom_urgence', $this->nom_prenom_urgence);
        $req->bindParam(':date_naissance_urgence', $this->date_naissance_urgence);
        $req->bindParam(':lieu_naiss_urgence', $this->lieu_naissance_urgence);
        $req->bindParam(':nationalite_urgence', $this->nationalite_urgence);
        $req->bindParam(':profession_urgence', $this->profession_urgence);
        $req->bindParam(':lieu_habitation_urgence', $this->lieu_habitation_urgence);
        $req->bindParam(':telephone_urgence', $this->telephone_urgence);
        $req->bindParam(':date_enregistrement', $this->date_enregistrement);
        $req->bindParam(':type', $this->type_stage);
        //var_dump($this->);
        $res = $req->execute() or die(print_r($this->con->ErrorInfo()));
        if ($res) {
            ?>
            <script language="javascript">
                alert("enregistrement effectué !");
            </script>
            <?php

        } else {
            ?>
            <script language="javascript">
                alert("enregistrement  non effectué !");
            </script>
            <?php

        }
    }

    public function modifierstagiaire() {

        $req = $this->con->prepare('UPDATE stagiaire SET nom_prenom=:nom_prenom,date_naissance=:date_naissance,lieu_naissance=:lieu_naissance,nationalite=:nationalite,situation_matrimoniale=:situation_matrimoniale,nombre_enfant=:nombre_enfant,ville=:ville,quartier=:quartier,telephone=:telephone,email=:email,cycle=:cycle,filiere=:filiere,date_debut_stage=:date_debut_stage,date_fin_stage=:date_fin_stage,duree_stage=:duree_stage,etat=:etat,photo=:photo,nom_prenom_pere=:nom_prenom_pere,lieu_habitation_pere=:lieu_habitation_pere,nationalite_pere=:nationalite_pere,profession_pere=:profession_pere,nombre_enfant_pere=:nombre_enfant_pere,telephone_pere=:telephone_pere,nombre_enfant_mere=:nom_prenom_mere,lieu_habitation_mere= :lieu_habitation_mere,nationalite_mere=:nationalite_mere,profession_mere=:profession_mere,nombre_enfant_mere=:nombre_enfant_mere,telephone_mere= :telephone_mere,nom_prenom_urgence=:nom_prenom_urgence, date_naissance_urgence=:date_naissance_urgence,nationalite_urgence=:nationalite_urgence,profession_urgence=:profession_urgence,lieu_habitation_urgence=:lieu_habitation_urgence,telephone_urgence=:telephone_urgence,date_enregistrement=:date_enregistrement,code_theme=:code_theme, type_stage=:type WHERE matricule=:matricule');

        //$req->bindParam(':id', $this->id);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':nom_prenom', $this->nom_prenom);
        $req->bindParam(':date_naissance', $this->date_naissance);
        $req->bindParam(':lieu_naissance', $this->lieu_naissance);
        $req->bindParam(':nationalite', $this->nationalite);
        $req->bindParam(':situation_matrimoniale', $this->situation_matrimoniale);
        $req->bindParam(':nombre_enfant', $this->nombre_enfant);
        $req->bindParam(':ville', $this->ville);
        $req->bindParam(':quartier', $this->quartier);
        $req->bindParam(':telephone', $this->telephone);
        $req->bindParam(':email', $this->email);
        $req->bindParam(':cycle', $this->cycle);
        $req->bindParam(':filiere', $this->filiere);
        $req->bindParam(':date_debut_stage', $this->date_debut_stage);
        $req->bindParam(':date_fin_stage', $this->date_fin_stage);
        $req->bindParam(':duree_stage', $this->duree_stage);
        $req->bindParam(':etat', $this->etat);
        $req->bindParam(':photo', $this->photo);
        $req->bindParam(':nom_prenom_pere', $this->nom_prenom_pere);
        $req->bindParam(':lieu_habitation_pere', $this->lieu_habitation_pere);
        $req->bindParam(':nationalite_pere', $this->nationalite_pere);
        $req->bindParam(':profession_pere', $this->profession_pere);
        $req->bindParam(':nombre_enfant_pere', $this->profession_pere);
        $req->bindParam(':telephone_pere', $this->telephone_pere);
        $req->bindParam(':nom_prenom_mere', $this->nom_prenom_mere);
        $req->bindParam(':lieu_habitation_mere', $this->lieu_habitation_mere);
        $req->bindParam(':nationalite_mere', $this->nationalite_mere);
        $req->bindParam(':profession_mere', $this->profession_mere);
        $req->bindParam(':nombre_enfant_mere', $this->nombre_enfant_mere);
        $req->bindParam(':telephone_mere', $this->telephone_mere);
        $req->bindParam(':nom_prenom_urgence', $this->nom_prenom_urgence);
        $req->bindParam(':date_naissance_urgence', $this->date_naissance_urgence);
        $req->bindParam(':lieu_habitation_urgence', $this->lieu_habitation_urgence);
        $req->bindParam(':nationalite_urgence', $this->nationalite_urgence);
        $req->bindParam(':profession_urgence', $this->profession_urgence);
        $req->bindParam(':lieu_habitation_urgence', $this->lieu_habitation_urgence);
        $req->bindParam(':telephone_urgence', $this->telephone_urgence);
        $req->bindParam(':date_enregistrement', $this->date_enregistrement);
        $req->bindParam(':code_theme', $this->code_theme);
        $req->bindParam(':type', $this->type_stage);

        $res = $req->execute() or die(print_r($this->con->ErrorInfo()));
        if ($res) {
            ?>
            <script language="javascript">
                alert("modification effectuée !");
            </script>
            <?php

        } else {
            ?>
            <script language="javascript">
                alert("modification  non effectuée !");
            </script>
            <?php

        }
    }

    public function soutenu() {

        $req = $this->con->prepare('UPDATE stagiaire SET etat=:etat WHERE matricule=:matricule');
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat', $this->etat);
        $res = $req->execute() or die(print_r($this->con->ErrorInfo()));
        
    }

    public function supprimerstagiaire() {
        $req = $this->con->prepare('DELETE FROM stagiaire WHERE matricule=:matricule');
        $req->bindParam(':matricule', $this->matricule);
        $req->execute();
    }

    public function rechercherstagiaire($rech) {
        $req = $this->con->prepare('SELECT * FROM stagiaire WHERE matricule=:matricule');
        $req->bindParam(':matricule', $rech);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listestagiaire() {
        $req = $this->con->prepare('SELECT * FROM stagiaire');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listeGest_etafoutenu() {
        $req = $this->con->prepare('SELECT * FROM stagiaire WHERE etat="soutenu" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listestagiairenonsoutenu() {
        $req = $this->con->prepare('SELECT * FROM stagiaire WHERE etat="non soutenu" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listestagiaireencours() {
        $req = $this->con->prepare('SELECT * FROM stagiaire WHERE etat="en cours" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function creationCompteStagiaire() {
        $req = $this->con->prepare('INSERT INTO compte VALUES (null,:log, :nom, :mail, :pass, :tel, :mat, :role, :photo)');
        $req->bindParam(':log', $this->login);
        $req->bindParam(':nom', $this->nom_prenom);
        $req->bindParam(':mail', $this->email);
        $req->bindParam(':pass', $this->pass);
        $req->bindParam(':tel', $this->telephone);
        $req->bindParam(':role', $this->role);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':photo', $this->photo);
        $exec = $req->execute();
    }

    public function Postulant() {
        $req = $this->con->prepare('SELECT * FROM postulant WHERE id=:id');
        $req->bindParam(':id', $this->id);
        $exec = $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

}
?>