<?php

class versementmodel {

    public $id;
    public $montant;
    public $date_versement;
    public $mode_reglement;
    public $matricule;
    public $prod;
    public $user;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterversement() {
        $req = $this->con->prepare('INSERT INTO versement VALUES (null,:mont, :date, :reg, :mat, :u, :p)');
        $req->bindParam(':mont', $this->montant);
        $req->bindParam(':date', $this->date_versement);
        $req->bindParam(':reg', $this->mode_reglement);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':u', $this->user);
        $req->bindParam(':p', $this->prod);
        $exec = $req->execute() or print_r($this->con->ErrorInfo());
        if ($exec) {
            ?>
            <script >alert("Enregistrement effectué !")</script>
            <?php

        } else {
            ?>
            <script >alert("Echec de l'enregistrement!")</script>
            <?php

        }
    }

    public function supprimerversement() {
        $req = $this->con->prepare('DELETE FROM versement WHERE id=:id');
        $req->bindParam(':id', $this->id);
        $res = $req->execute();
        if ($res) {
            ?>
            <script >alert("Versement supprimé !")</script>
            <?php

        }
    }

    public function listeversement($mat) {
        $req = $this->con->prepare('SELECT * FROM versement WHERE matricule = :l');
        $req->bindParam(':l', $mat);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    
    public function som_listeversement($mat) {
        $req = $this->con->prepare('SELECT SUM(montant) AS s FROM versement WHERE matricule = :l');
        $req->bindParam(':l', $mat);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function listeversement_periode($d, $f) {
        $req = $this->con->prepare('SELECT * FROM versement, stagiaire WHERE stagiaire.matricule=versement.matricule AND versement.date_versement BETWEEN :l AND :n');
        $req->bindParam(':l', $d);
        $req->bindParam(':n', $f);
        $req->execute() or print_r($this->con->ErrorInfo());
        $l = $req->fetchAll();
        return $l;
    }
    
    public function som_listeversement_periode($d, $f) {
        $req = $this->con->prepare('SELECT SUM(montant) AS s FROM versement, stagiaire WHERE stagiaire.matricule=versement.matricule AND versement.date_versement BETWEEN :l AND :n');
        $req->bindParam(':l', $d);
        $req->bindParam(':n', $f);
        $req->execute() or print_r($this->con->ErrorInfo());
        $l = $req->fetchAll();
        return $l;
    }
    
    public function listeversement_periode_produit($d, $f, $p) {
        $req = $this->con->prepare('SELECT * FROM versement, stagiaire WHERE stagiaire.matricule=versement.matricule AND produit=:p AND date_versement BETWEEN :l AND :n');
        $req->bindParam(':l', $d);
        $req->bindParam(':n', $f);
        $req->bindParam(':p', $p);
        $req->execute() or print_r($this->con->ErrorInfo());
        $l = $req->fetchAll();
        return $l;
    }
    
    public function som_listeversement_periode_produit($d, $f, $p) {
        $req = $this->con->prepare('SELECT SUM(montant)) AS s FROM versement, stagiaire WHERE stagiaire.matricule=versement.matricule AND produit=:p AND date_versement BETWEEN :l AND :n');
        $req->bindParam(':l', $d);
        $req->bindParam(':n', $f);
        $req->bindParam(':p', $p);
        $req->execute() or print_r($this->con->ErrorInfo());
        $l = $req->fetchAll();
        return $l;
    }

    public function listeversements() {
        $req = $this->con->prepare('SELECT * FROM versement');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function listestagiaire() {
        $req = $this->con->prepare('SELECT * FROM stagiaire');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function stagiaire($mat) {
        $req = $this->con->prepare('SELECT * FROM stagiaire WHERE matricule=:l');
        $req->bindParam(':l', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

}
?>