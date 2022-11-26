<?php

class depensemodel {

    public $DEPENSE_ID;
    public $DEPENSE_CODE;
    public $DEPENSE_TYPE_CODE;
    public $DEPENSE_LIBELLE_MATERIEL;
    public $DEPENSE_SOMME;
    public $DEPENSE_CREATED;
    public $DEPENSE_TOTAL;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterDepense() {
        $req = $this->con->prepare('INSERT INTO depense VALUES (null,:DEPENSE_CODE, :DEPENSE_TYPE_CODE, :DEPENSE_LIBELLE_MATERIEL, :DEPENSE_SOMME, :DEPENSE_CREATED, :DEPENSE_TOTAL)');
        $req->bindParam(':DEPENSE_CODE', $this->DEPENSE_CODE);
        $req->bindParam(':DEPENSE_TYPE_CODE', $this->DEPENSE_TYPE_CODE);
        $req->bindParam(':DEPENSE_LIBELLE_MATERIEL', $this->DEPENSE_LIBELLE_MATERIEL);
        $req->bindParam(':DEPENSE_SOMME', $this->DEPENSE_SOMME);
        $req->bindParam(':DEPENSE_CREATED', $this->DEPENSE_CREATED);
        $req->bindParam(':DEPENSE_TOTAL', $this->DEPENSE_TOTAL);
        $exec = $req->execute();
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
    public function modifierDepense() {
        $req = $this->con->prepare('UPDATE depense SET  DEPENSE_TYPE_CODE=:DEPENSE_TYPE_CODE,DEPENSE_LIBELLE_MATERIEL=:DEPENSE_LIBELLE_MATERIEL, DEPENSE_SOMME=:DEPENSE_SOMME,  DEPENSE_TOTAL:DEPENSE_TOTAL WHERE DEPENSE_CODE=:DEPENSE_CODE');
        $req->bindParam(':DEPENSE_CODE', $this->DEPENSE_CODE);
        $req->bindParam(':DEPENSE_TYPE_CODE', $this->DEPENSE_TYPE_CODE);
        $req->bindParam(':DEPENSE_LIBELLE_MATERIEL', $this->DEPENSE_LIBELLE_MATERIEL);
        $req->bindParam(':DEPENSE_SOMME', $this->DEPENSE_SOMME);
        $req->bindParam(':DEPENSE_TOTAL', $this->DEPENSE_TOTAL);
        $exec = $req->execute();
        if ($exec) {
            ?>
            <script >alert("Modification effectué !")</script>
            <?php

        } else {
            ?>
            <script >alert("Echec de Modification !")</script>
            <?php

        }
    }
   

    public function supprimerDepense {
        $req = $this->con->prepare('DELETE FROM depense WHERE DEPENSE_CODE=:log');
        $req->bindParam(':log', $this->DEPENSE_CODE);
        $res = $req->execute();
        if ($res) {
            ?>
            <script >alert("Suppression effectuée avec succes !")</script>
            <?php

        }
    }

     

   

    public function FindDepense($code) {
        $req = $this->con->prepare('SELECT * FROM depense WHERE DEPENSE_CODE=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    public function FindDepense($date1,$date2) {
        $req = $this->con->prepare('SELECT * FROM depense WHERE DEPENSE_CREATED BETWEEN :date1 AND :date2 ');
        $req->bindParam(':date1', $date1);
        $req->bindParam(':date2', $date2);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
  

    public function listeDepense() {
        $req = $this->con->prepare('SELECT * FROM depense');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

}
?>