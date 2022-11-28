<?php

class depensemodel {

    public $DEPENSE_NEW_ID;
    public $MEACANIQUE_MATERIEL_1;
    public $MECANIQUE_MATERIEL_2;
    public $MECANIQUE_MATERIEL_3;
    public $MECANIQUE_MATERIEL_4;
    public $MECANIQUE_SOMMES_1;
    public $MECANIQUE_SOMMES_2;
    public $MECANIQUE_SOMMES_3;
    public $MECANIQUE_SOMMES_4;
    public $MECANIQUE_TOTAL;
    public $DON_MATERIEL_1;
    public $DON_SOMMES_1;
    public $DON_TOTAL;
    public $NOURRITURE_MATERIEL_1;
    public $NOURRITURE_MATERIEL_2;
    public $NOURRITURE_MATERIEL_3;
    public $NOURRITURE_MATERIEL_4;
    public $NOURRITURE_SOMMES_1;
    public $NOURRITURE_SOMMES_2;
    public $NOURRITURE_SOMMES_3;
    public $NOURRITURE_SOMMES_4;
    public $NOURRITURE_TOTAL;
    public $CARBURANT_SOMMES_1;
    public $CARBURANT_TOTAL;
    public $TRANSPORT_SOMMES_1;
    public $TRANSPORT_SOMMES_2;
    public $TRANSPORT_NOM_BENEFICIAIRE_1;
    public $TRANSPORT_NOM_BENEFICIARE_2;
    public $TRANSPORT_TOTAL;
    public $ELECTRICITE_SOMMES_1;
    public $ELECTRICITE_NOM_BENEFICIAIRE_1;
    public $ELECTRICITE_TOTAL;
    public $SANTE_PRIX_ET_NOM_DU_MEDICAL_1;
    public $SANTE_NOM_DU_BENEFICIAIRE_1;
    public $SANTE_TOTAL;
    public $DEPENSE_CODE;
    public $DEPENSE_TOTAL_DU_JOUR;
    public $DEPENSES_CREATED;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterDepense() {
        $req = $this->con->prepare('INSERT INTO depense_new VALUES (
            null,
        :MEACANIQUE_MATERIEL_1,
         :MECANIQUE_MATERIEL_2, 
         :MECANIQUE_MATERIEL_3, 
         :MECANIQUE_MATERIEL_4, 
         :MECANIQUE_SOMMES_1,
          :MECANIQUE_SOMMES_2,
          :MECANIQUE_SOMMES_3,
          :MECANIQUE_SOMMES_4,
          :MECANIQUE_TOTAL,
          :DON_MATERIEL_1,
          :DON_SOMMES_1,
          :DON_TOTAL,
          :NOURRITURE_MATERIEL_1,
          :NOURRITURE_MATERIEL_2,
          :NOURRITURE_MATERIEL_3,
          :NOURRITURE_MATERIEL_4,
          :NOURRITURE_SOMMES_1,
          :NOURRITURE_SOMMES_2,
          :NOURRITURE_SOMMES_3,
          :NOURRITURE_SOMMES_4,
          :NOURRITURE_TOTAL,
          :CARBURANT_SOMMES_1,
          :CARBURANT_TOTAL,
          :TRANSPORT_SOMMES_1,
          :TRANSPORT_SOMMES_2,
          :TRANSPORT_NOM_BENEFICIAIRE_1,
          :TRANSPORT_NOM_BENEFICIARE_2,
          :TRANSPORT_TOTAL,
          :ELECTRICITE_SOMMES_1,
          :ELECTRICITE_NOM_BENEFICIAIRE_1,
          :ELECTRICITE_TOTAL,
          :SANTE_PRIX_ET_NOM_DU_MEDICAL_1,
          :SANTE_NOM_DU_BENEFICIAIRE_1,
          :SANTE_TOTAL,
          :DEPENSE_CODE,
          :DEPENSE_TOTAL_DU_JOUR,
          :DEPENSES_CREATED)');
        $req->bindParam(':MEACANIQUE_MATERIEL_1', $this->MEACANIQUE_MATERIEL_1);
        $req->bindParam(':MECANIQUE_MATERIEL_2', $this->MECANIQUE_MATERIEL_2);
        $req->bindParam(':MECANIQUE_MATERIEL_3', $this->MECANIQUE_MATERIEL_3);
        $req->bindParam(':MECANIQUE_MATERIEL_4', $this->MECANIQUE_MATERIEL_4);
        $req->bindParam(':MECANIQUE_SOMMES_1', $this->MECANIQUE_SOMMES_1);
        $req->bindParam(':MECANIQUE_SOMMES_2', $this->MECANIQUE_SOMMES_2);
        $req->bindParam(':MECANIQUE_SOMMES_3', $this->MECANIQUE_SOMMES_3);
        $req->bindParam(':MECANIQUE_SOMMES_4', $this->MECANIQUE_SOMMES_4);
        $req->bindParam(':MECANIQUE_TOTAL', $this->MECANIQUE_TOTAL);
        $req->bindParam(':DON_MATERIEL_1', $this->DON_MATERIEL_1);
        $req->bindParam(':DON_SOMMES_1', $this->DON_SOMMES_1);
        $req->bindParam(':DON_TOTAL', $this->DON_TOTAL);
        $req->bindParam(':NOURRITURE_MATERIEL_1', $this->NOURRITURE_MATERIEL_1);
        $req->bindParam(':NOURRITURE_MATERIEL_2', $this->NOURRITURE_MATERIEL_2);
        $req->bindParam(':NOURRITURE_MATERIEL_3', $this->NOURRITURE_MATERIEL_3);
        $req->bindParam(':NOURRITURE_MATERIEL_4', $this->NOURRITURE_MATERIEL_4);
        $req->bindParam(':NOURRITURE_SOMMES_1', $this->NOURRITURE_SOMMES_1);
        $req->bindParam(':NOURRITURE_SOMMES_2', $this->NOURRITURE_SOMMES_2);
        $req->bindParam(':NOURRITURE_SOMMES_3', $this->NOURRITURE_SOMMES_3);
        $req->bindParam(':NOURRITURE_SOMMES_4', $this->NOURRITURE_SOMMES_4);
        $req->bindParam(':NOURRITURE_TOTAL', $this->NOURRITURE_TOTAL);
        $req->bindParam(':CARBURANT_SOMMES_1', $this->CARBURANT_SOMMES_1);
        $req->bindParam(':CARBURANT_TOTAL', $this->CARBURANT_TOTAL);
        $req->bindParam(':TRANSPORT_SOMMES_1', $this->TRANSPORT_SOMMES_1);
        $req->bindParam(':TRANSPORT_SOMMES_2', $this->TRANSPORT_SOMMES_2);
        $req->bindParam(':TRANSPORT_NOM_BENEFICIAIRE_1', $this->TRANSPORT_NOM_BENEFICIAIRE_1);
        $req->bindParam(':TRANSPORT_NOM_BENEFICIARE_2', $this->TRANSPORT_NOM_BENEFICIARE_2);
        $req->bindParam(':TRANSPORT_TOTAL', $this->TRANSPORT_TOTAL);
        $req->bindParam(':ELECTRICITE_SOMMES_1', $this->ELECTRICITE_SOMMES_1);
        $req->bindParam(':ELECTRICITE_NOM_BENEFICIAIRE_1', $this->ELECTRICITE_NOM_BENEFICIAIRE_1);
        $req->bindParam(':ELECTRICITE_TOTAL', $this->ELECTRICITE_TOTAL);
        $req->bindParam(':SANTE_PRIX_ET_NOM_DU_MEDICAL_1', $this->SANTE_PRIX_ET_NOM_DU_MEDICAL_1);
        $req->bindParam(':SANTE_NOM_DU_BENEFICIAIRE_1', $this->SANTE_NOM_DU_BENEFICIAIRE_1);
        $req->bindParam(':SANTE_TOTAL', $this->SANTE_TOTAL);
        $req->bindParam(':DEPENSE_CODE', $this->DEPENSE_CODE);
        $req->bindParam(':DEPENSE_TOTAL_DU_JOUR', $this->DEPENSE_TOTAL_DU_JOUR);
        $req->bindParam(':DEPENSES_CREATED', $this->DEPENSES_CREATED);
        $exec = $req->execute() or die(print_r($this->con->errorInfo()));
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
   

    public function supprimerDepense() {
        $req = $this->con->prepare('DELETE FROM depense WHERE DEPENSE_CODE=:log');
        $req->bindParam(':log', $this->DEPENSE_CODE);
        $res = $req->execute();
        if ($res) {
            ?>
            <script >alert("Suppression effectuée avec succes !")</script>
            <?php

        }
    }

     

   

    public function FindDepenseAll($code) {
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
    public function FindDepenseAllTwoDate($code) {
        $a= date("Y-m-d")." 23:59:59";
        $req = $this->con->prepare('SELECT * FROM depense_new WHERE DEPENSES_CREATED BETWEEN :code AND :a');
        $req->bindParam(':code', $code);
        $req->bindParam(':a', $a);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
  

    public function listeDepense() {
        $req = $this->con->prepare('SELECT * FROM depense_new');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

}
?>