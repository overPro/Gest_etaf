<?php

class productionmodel {

   public $PRODUCTION_ID;
   public $PRODUCTION_CODE;
   public $PRODUCTION_QUANTITE;
   public $PRODUCTION_QUANTITE_1;
    public $PRODUCTION_QUANTITE_2;
    public  $PRODUCTION_QUANTITE_3;
    public  $PRODUCTION_CODE_GROUPE;
   public $PRODUCTION_CREATED;
  public  $PRODUCTION_CODE_LIBELLE;
  public  $PRODUCTION_JOUR;
  public  $PRODUCTION_TOTAL;
  public  $PRODUCTION_CODE_LIBELLE_1;
  public  $PRODUCTION_CODE_LIBELLE_2;
  public  $PRODUCTION_CODE_LIBELLE_3;    
  public  $PRODUCTION_TOTAL_1;
  public  $PRODUCTION_TOTAL_2;
  public  $PRODUCTION_TOTAL_3;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterProduction() {
        $req = $this->con->prepare('INSERT INTO production VALUES (null,:PRODUCTION_CODE, :PRODUCTION_QUANTITE,:PRODUCTION_QUANTITE_1,:PRODUCTION_QUANTITE_2,:PRODUCTION_QUANTITE_3, :PRODUCTION_CODE_GROUPE, :PRODUCTION_CREATED, :PRODUCTION_CODE_LIBELLE,:PRODUCTION_CODE_LIBELLE_1,:PRODUCTION_CODE_LIBELLE_2,:PRODUCTION_CODE_LIBELLE_3, :PRODUCTION_JOUR,:PRODUCTION_TOTAL,:PRODUCTION_TOTAL_1,:PRODUCTION_TOTAL_2,:PRODUCTION_TOTAL_3)');
        $req->bindParam(':PRODUCTION_CODE', $this->PRODUCTION_CODE);
        $req->bindParam(':PRODUCTION_QUANTITE', $this->PRODUCTION_QUANTITE);
        $req->bindParam(':PRODUCTION_QUANTITE_1', $this->PRODUCTION_QUANTITE_1);
        $req->bindParam(':PRODUCTION_QUANTITE_2', $this->PRODUCTION_QUANTITE_2);
        $req->bindParam(':PRODUCTION_QUANTITE_3', $this->PRODUCTION_QUANTITE_3);
        $req->bindParam(':PRODUCTION_CODE_GROUPE', $this->PRODUCTION_CODE_GROUPE);
        $req->bindParam(':PRODUCTION_CREATED', $this->PRODUCTION_CREATED);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE', $this->PRODUCTION_CODE_LIBELLE);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE_1', $this->PRODUCTION_CODE_LIBELLE_1);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE_2', $this->PRODUCTION_CODE_LIBELLE_2);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE_3', $this->PRODUCTION_CODE_LIBELLE_3);
        $req->bindParam(':PRODUCTION_JOUR', $this->PRODUCTION_JOUR);
        $req->bindParam(':PRODUCTION_TOTAL', $this->PRODUCTION_TOTAL);
        $req->bindParam(':PRODUCTION_TOTAL_1', $this->PRODUCTION_TOTAL_1);
        $req->bindParam(':PRODUCTION_TOTAL_2', $this->PRODUCTION_TOTAL_2);
        $req->bindParam(':PRODUCTION_TOTAL_3', $this->PRODUCTION_TOTAL_3);
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
        $req = $this->con->prepare('UPDATE production SET PRODUCTION_QUANTITE=:PRODUCTION_QUANTITE,PRODUCTION_QUANTITE_1=:PRODUCTION_QUANTITE_1,PRODUCTION_QUANTITE_2=:PRODUCTION_QUANTITE_2,PRODUCTION_QUANTITE_3=:PRODUCTION_QUANTITE_3, PRODUCTION_CODE_GROUPE=:PRODUCTION_CODE_GROUPE,  PRODUCTION_CODE_LIBELLE=:PRODUCTION_CODE_LIBELLE,PRODUCTION_CODE_LIBELLE_1=:PRODUCTION_CODE_LIBELLE_1,PRODUCTION_CODE_LIBELLE_2=:PRODUCTION_CODE_LIBELLE_2,PRODUCTION_CODE_LIBELLE_3=:PRODUCTION_CODE_LIBELLE_3, PRODUCTION_JOUR=:PRODUCTION_JOUR,PRODUCTION_TOTAL=:PRODUCTION_TOTAL,PRODUCTION_TOTAL_1=:PRODUCTION_TOTAL_1,PRODUCTION_TOTAL_2=:PRODUCTION_TOTAL_2,PRODUCTION_TOTAL_3=:PRODUCTION_TOTAL_3 WHERE PRODUCTION_CODE=:PRODUCTION_CODE');
        $req->bindParam(':PRODUCTION_CODE', $this->PRODUCTION_CODE);
        $req->bindParam(':PRODUCTION_QUANTITE', $this->PRODUCTION_QUANTITE);
        $req->bindParam(':PRODUCTION_QUANTITE_1', $this->PRODUCTION_QUANTITE_1);
        $req->bindParam(':PRODUCTION_QUANTITE_2', $this->PRODUCTION_QUANTITE_2);
        $req->bindParam(':PRODUCTION_QUANTITE_3', $this->PRODUCTION_QUANTITE_3);
        $req->bindParam(':PRODUCTION_CODE_GROUPE', $this->PRODUCTION_CODE_GROUPE);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE', $this->PRODUCTION_CODE_LIBELLE);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE_1', $this->PRODUCTION_CODE_LIBELLE_1);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE_2', $this->PRODUCTION_CODE_LIBELLE_2);
        $req->bindParam(':PRODUCTION_CODE_LIBELLE_3', $this->PRODUCTION_CODE_LIBELLE_3);
        $req->bindParam(':PRODUCTION_JOUR', $this->PRODUCTION_JOUR);
        $req->bindParam(':PRODUCTION_TOTAL', $this->PRODUCTION_TOTAL);
        $req->bindParam(':PRODUCTION_TOTAL_1', $this->PRODUCTION_TOTAL_1);
        $req->bindParam(':PRODUCTION_TOTAL_2', $this->PRODUCTION_TOTAL_2);
        $req->bindParam(':PRODUCTION_TOTAL_3', $this->PRODUCTION_TOTAL_3);
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

     

   

    public function FindProduction($code,$groupe) {
        $a= date("Y-m-d")." 23:59:59";
        $req = $this->con->prepare('SELECT * FROM production WHERE PRODUCTION_CODE_GROUPE=:groupe AND PRODUCTION_CREATED BETWEEN :code AND :a');
        $req->bindParam(':code', $code);
        $req->bindParam(':groupe', $groupe);
        $req->bindParam(':a', $a);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    public function FindProductionByDate($date1,$date2) {
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
    public function listeProduction_type() {
        $req = $this->con->prepare('SELECT * FROM production_type');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

}
?>