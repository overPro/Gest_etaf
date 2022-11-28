<?php
class thememodel {

    public $code_theme_stage;
    public $titre_theme_stage;
    public $description_theme_stage;
    public $code_filiere;
    public $mat;
    public $con;

    function __construct() {
        require "database/connexion.php";
    }

// Ajouter
    public function ajouterTheme() {
        $req = $this->con->prepare('INSERT INTO theme_stage VALUES(:code_theme_stage,:titre_theme_stage,:description_theme_stage,:code_filiere)');
        $req->bindParam(':code_theme_stage', $this->code_theme_stage);
        $req->bindParam(':titre_theme_stage', $this->titre_theme_stage);
        $req->bindParam(':description_theme_stage', $this->description_theme_stage);
        $req->bindParam(':code_filiere', $this->code_filiere);
        $reponse = $req->execute();

        if ($reponse) {
            ?>
            <script type="text/javascript">
                alert("Ajout effectue avec succes");
            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
                alert("Echec de l'ajout");
            </script>
            <?php

        }
    }

// Modifier
    public function modifierTheme() {
        $req = $this->con->prepare('UPDATE theme_stage SET titre_theme_stage=:titre_theme_stage,
        description_theme_stage=:description_theme_stage,
        code_filiere=:code_filiere WHERE code_theme_stage=:code_theme_stage');
        $req->bindParam(':code_theme_stage', $this->code_theme_stage);
        $req->bindParam(':titre_theme_stage', $this->titre_theme_stage);
        $req->bindParam(':description_theme_stage', $this->description_theme_stage);
        $req->bindParam(':code_filiere', $this->code_filiere);
        $reponse = $req->execute();

        if ($reponse) {
            ?>
            <script type="text/javascript">
                alert("Modification effectuee avec succes");
            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
                alert("Echec de la modification");
            </script>
            <?php

        }
    }

    public function attribuertheme() {

        $req = $this->con->prepare('UPDATE stagiaire SET code_theme=:code_theme WHERE matricule=:matricule');

        $req->bindParam(':matricule', $this->mat);
        $req->bindParam(':code_theme', $this->code_theme_stage);
        $res = $req->execute() or print_r($this->con->ErrorInfo());
        if ($res) {
            ?>
            <script language="javascript">
                alert("Thème attribué avec succès!");
            </script>
            <?php

        }
    }

// Supprimer
    public function supprimerTheme() {
        $req = $this->con->prepare('DELETE FROM theme_stage WHERE code_theme_stage=:code_theme_stage');
        $req->bindParam(':code_theme_stage', $this->code_theme_stage);
        $req->execute();
        $reponse = $req->execute();

        if ($reponse) {
            ?>
            <script type="text/javascript">
                alert("Suppression effectuee avec succes");
            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
                alert("Echec de la suppression");
            </script>
            <?php

        }
    }

// Rechercher par code du theme
    public function rechercherThemeCode($rech) {
        $req = $this->con->prepare('SELECT * FROM theme_stage WHERE code_theme_stage=:code_theme_stage');
        $req->bindParam(':code_theme_stage', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function rechercherThemeFiliere($rech) {
        $req = $this->con->prepare('SELECT * FROM theme_stage WHERE code_filiere=:code_filiere');
        $req->bindParam(':code_filiere', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function liste() {
        $req = $this->con->prepare('SELECT * FROM theme_stage');
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listestagiaire() {
        $req = $this->con->prepare('SELECT * FROM stagiaire');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function UnStagiaire($mat) {
        $req = $this->con->prepare('SELECT * FROM stagiaire WHERE matricule=:mat');
        $req->bindParam(':mat', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }
    
    public function ThemeStagiaire($mat) {
        $req = $this->con->prepare('SELECT * FROM stagiaire,theme_stage WHERE stagiaire.code_theme=theme_stage.code_theme_stage AND stagiaire.matricule=:mat');
        $req->bindParam(':mat', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

}
?>