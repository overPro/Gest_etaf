<?php

class contractuelmodel {

    public $CONTRACTUEL_ID;
    public $CONTRACTUEL_CODE;
    public $CONTRACTUEL_NOM;
    public $CONTRACTUEL_CODE_GROUPE;
    public $CONTRACTUEL_CODE_HORAIRE;
    public $CONTRACTUEL_PRESENCE;
    public $CONTRACTUEL_CREATED;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterContractuel() {
        $req = $this->con->prepare('INSERT INTO contractuel VALUES (null,:CONTRACTUEL_CODE, :CONTRACTUEL_NOM, :CONTRACTUEL_CODE_GROUPE, :CONTRACTUEL_CODE_HORAIRE, :CONTRACTUEL_PRESENCE, :CONTRACTUEL_CREATED)');
        $req->bindParam(':CONTRACTUEL_CODE', $this->CONTRACTUEL_CODE);
        $req->bindParam(':CONTRACTUEL_NOM', $this->CONTRACTUEL_NOM);
        $req->bindParam(':CONTRACTUEL_CODE_GROUPE', $this->CONTRACTUEL_CODE_GROUPE);
        $req->bindParam(':CONTRACTUEL_CODE_HORAIRE', $this->CONTRACTUEL_CODE_HORAIRE);
        $req->bindParam(':CONTRACTUEL_PRESENCE', $this->CONTRACTUEL_PRESENCE);
        $req->bindParam(':CONTRACTUEL_CREATED', $this->CONTRACTUEL_CREATED);
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
    public function modifierContractuel() {
        $req = $this->con->prepare('UPDATE contractuel SET CONTRACTUEL_NOM=:CONTRACTUEL_NOM, CONTRACTUEL_CODE_GROUPE=:CONTRACTUEL_CODE_GROUPE, CONTRACTUEL_CODE_HORAIRE=:CONTRACTUEL_CODE_HORAIRE, CONTRACTUEL_PRESENCE=:CONTRACTUEL_PRESENCE WHERE CONTRACTUEL_CODE=:CONTRACTUEL_CODE');
        $req->bindParam(':CONTRACTUEL_CODE', $this->CONTRACTUEL_CODE);
        $req->bindParam(':CONTRACTUEL_NOM', $this->CONTRACTUEL_NOM);
        $req->bindParam(':CONTRACTUEL_CODE_GROUPE', $this->CONTRACTUEL_CODE_GROUPE);
        $req->bindParam(':CONTRACTUEL_CODE_HORAIRE', $this->CONTRACTUEL_CODE_HORAIRE);
        $req->bindParam(':CONTRACTUEL_PRESENCE', $this->CONTRACTUEL_PRESENCE);
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
   

    public function supprimerContractuel() {
        $req = $this->con->prepare('DELETE FROM contractuel WHERE CONTRACTUEL_CODE=:log');
        $req->bindParam(':log', $this->CONTRACTUEL_CODE);
        $res = $req->execute();
        if ($res) {
            ?>
            <script >alert("Suppression effectuée avec succes !")</script>
            <?php

        }
    }

     

   

    public function FindContractuel($code) {
        $req = $this->con->prepare('SELECT * FROM contractuel WHERE CONTRACTUEL_CODE=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    public function FindContractuelByDate($date1,$date2) {
        $req = $this->con->prepare('SELECT * FROM contractuel WHERE CONTRACTUEL_CREATED BETWEEN :date1 AND :date2 ');
        $req->bindParam(':date1', $date1);
        $req->bindParam(':date2', $date2);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
  

    public function listeContractuel() {
        $req = $this->con->prepare('SELECT * FROM contractuel');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

}
?>