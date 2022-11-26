<?php

class productionmodel {

    public $PRODUCTION_ID;
    public $PRODUCTION_CODE;
    public $PRODUCTION_QUANTITE;
    public $PRODUCTION_CODE_GROUPE;
    public $PRODUCTION_CREATED;
    public $PRODUCTION_CODE_LIBELLE;
    public $PRODUCTION_JOUR;
    public $PRODUCTION_TOTAL;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterProduction() {
        $req = $this->con->prepare('INSERT INTO production VALUES (null,:PRODUCTION_CODE, :PRODUCTION_QUANTITE, :PRODUCTION_CODE_GROUPE, :PRODUCTION_CREATED, :PRODUCTION_CODE_LIBELLE, :PRODUCTION_JOUR,:PRODUCTION_TOTAL)');
        $req->bindParam(':PRODUCTION_CODE', $this->PRODUCTION_CODE);
        $req->bindParam(':PRODUCTION_QUANTITE', $this->PRODUCTION_QUANTITE);
        $req->bindParam(':PRODUCTION_CODE_GROUPE', $this->PRODUCTION_CODE_GROUPE);
        $req->bindParam(':PRODUCTION_CREATED', $this->PRODUCTION_CREATED);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE', $this->PRODUCTION_CODE_LIBELLE);
        $req->bindParam(':PRODUCTION_JOUR', $this->PRODUCTION_JOUR);
        $req->bindParam(':PRODUCTION_TOTAL', $this->PRODUCTION_TOTAL);
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
    public function modifierProduction() {
        $req = $this->con->prepare('UPDATE production SET PRODUCTION_QUANTITE=:PRODUCTION_QUANTITE, PRODUCTION_CODE_GROUPE=:PRODUCTION_CODE_GROUPE, PRODUCTION_CODE_LIBELLE=:PRODUCTION_CODE_LIBELLE, PRODUCTION_JOUR=:PRODUCTION_JOUR,PRODUCTION_TOTAL=:PRODUCTION_TOTAL WHERE PRODUCTION_CODE=:PRODUCTION_CODE');
        $req->bindParam(':PRODUCTION_CODE', $this->PRODUCTION_CODE);
        $req->bindParam(':PRODUCTION_QUANTITE', $this->PRODUCTION_QUANTITE);
        $req->bindParam(':PRODUCTION_CODE_GROUPE', $this->PRODUCTION_CODE_GROUPE);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE', $this->PRODUCTION_CODE_LIBELLE);
        $req->bindParam(':PRODUCTION_JOUR', $this->PRODUCTION_JOUR);
        $req->bindParam(':PRODUCTION_TOTAL', $this->PRODUCTION_TOTAL);
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
   

    public function supprimerProduction() {
        $req = $this->con->prepare('DELETE FROM production WHERE PRODUCTION_CODE=:log');
        $req->bindParam(':log', $this->PRODUCTION_CODE);
        $res = $req->execute();
        if ($res) {
            ?>
            <script >alert("Suppression effectuée avec succes !")</script>
            <?php

        }
    }

     

   

    public function FindProduction($code) {
        $req = $this->con->prepare('SELECT * FROM production WHERE PRODUCTION_CODE=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    public function FindProduction($date1,$date2) {
        $req = $this->con->prepare('SELECT * FROM production WHERE PRODUCTION_CREATED BETWEEN :date1 AND :date2 ');
        $req->bindParam(':date1', $date1);
        $req->bindParam(':date2', $date2);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
  

    public function listeProduction() {
        $req = $this->con->prepare('SELECT * FROM production');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

}
?>