<?php

class comptemodel {

    public $COMPTE_ID;
    public $COMPTE_ROLE;
    public $COMPTE_NOM;
    public $COMPTE_LOGIN;
    public $COMPTE_PASS;
    public $COMPTE_CODE;
    public $COMPTE_STATUS;
    public $COMPTE_EMAIL;
    public $COMPTE_NUMERO;
    public $COMPTE_PHOTO;
    public $COMPTE_CREATED;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }
    public function connexion() {
        $req = $this->con->prepare('SELECT * FROM compte WHERE COMPTE_LOGIN=:log AND COMPTE_PASS=:pass');
        $req->bindParam(':log', $this->COMPTE_LOGIN);
        $req->bindParam(':pass', $this->COMPTE_PASS);
        $req->execute() or print_r($this->con->ErrorInfo());
        $sol = $req->fetchAll();
        //var_dump($sol);
        return $sol;
    }
    public function compteId() {
        $req = $this->con->prepare('SELECT * FROM compte WHERE COMPTE_CODE = :l');
        $req->bindParam(':l', $this->COMPTE_CODE);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function ajouterCompte() {
        $req = $this->con->prepare('INSERT INTO compte VALUES (null,:COMPTE_ROLE, :COMPTE_NOM, :COMPTE_LOGIN, :COMPTE_PASS, :COMPTE_CODE, :COMPTE_STATUS,:COMPTE_EMAIL,:COMPTE_NUMERO,:COMPTE_PHOTO,:COMPTE_CREATED)');
        $req->bindParam(':COMPTE_ROLE', $this->COMPTE_ROLE);
        $req->bindParam(':COMPTE_NOM', $this->COMPTE_NOM);
        $req->bindParam(':COMPTE_LOGIN', $this->COMPTE_LOGIN);
        $req->bindParam(':COMPTE_PASS', $this->COMPTE_PASS);
        $req->bindParam(':COMPTE_CODE', $this->COMPTE_CODE);
        $req->bindParam(':COMPTE_STATUS', $this->COMPTE_STATUS);
        $req->bindParam(':COMPTE_EMAIL', $this->COMPTE_EMAIL);
        $req->bindParam(':COMPTE_NUMERO', $this->COMPTE_NUMERO);
        $req->bindParam(':COMPTE_PHOTO', $this->COMPTE_PHOTO);
        $req->bindParam(':COMPTE_CREATED', $this->COMPTE_CREATED);
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
    
   

    public function supprimerCompte() {
        $req = $this->con->prepare('DELETE FROM compte WHERE COMPTE_CODE=:log');
        $req->bindParam(':log', $this->COMPTE_CODE);
        $res = $req->execute();
        if ($res) {
            ?>
            <script >alert("Suppression effectuée avec succes !")</script>
            <?php

        }
    }

     

   

    public function FindCompte($code) {
        $req = $this->con->prepare('SELECT * FROM compte WHERE COMPTE_CODE=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    public function FindCompteByDate($date1,$date2) {
        $req = $this->con->prepare('SELECT * FROM compte WHERE COMPTE_CREATED BETWEEN :date1 AND :date2 ');
        $req->bindParam(':date1', $date1);
        $req->bindParam(':date2', $date2);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
  

    public function listeCompte() {
        $req = $this->con->prepare('SELECT * FROM compte');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }



    public function modifiercompte_avec_photo() {
    $req = $this->con->prepare('UPDATE compte SET COMPTE_ROLE=:COMPTE_ROLE, COMPTE_NOM=:COMPTE_NOM, COMPTE_LOGIN=:COMPTE_LOGIN, COMPTE_PASS=:COMPTE_PASS, COMPTE_STATUS=:COMPTE_STATUS,COMPTE_EMAIL=:COMPTE_EMAIL,COMPTE_NUMERO=:COMPTE_NUMERO;COMPTE_PHOTO=:COMPTE_PHOTO WHERE COMPTE_CODE=:COMPTE_CODE');
    $req->bindParam(':COMPTE_ROLE', $this->COMPTE_ROLE);
    $req->bindParam(':COMPTE_NOM', $this->COMPTE_NOM);
    $req->bindParam(':COMPTE_LOGIN', $this->COMPTE_LOGIN);
    $req->bindParam(':COMPTE_PASS', $this->COMPTE_PASS);
    $req->bindParam(':COMPTE_CODE', $this->COMPTE_CODE);
    $req->bindParam(':COMPTE_STATUS', $this->COMPTE_STATUS);
    $req->bindParam(':COMPTE_EMAIL', $this->COMPTE_EMAIL);
    $req->bindParam(':COMPTE_NUMERO', $this->COMPTE_NUMERO);
    $req->bindParam(':COMPTE_PHOTO', $this->COMPTE_PHOTO);
    $exec = $req->execute();
    if ($exec) {
        ?>
        <script >alert("Modification effectuée avec succes !")</script>
        <?php

    } else {
        ?>
        <script >alert("Echec de la modification!")</script>
        <?php

    }
}
public function modifiercompte_sans_photo() {
    $req = $this->con->prepare('UPDATE compte SET COMPTE_ROLE=:COMPTE_ROLE, COMPTE_NOM=:COMPTE_NOM, COMPTE_LOGIN=:COMPTE_LOGIN, COMPTE_PASS=:COMPTE_PASS, COMPTE_STATUS=:COMPTE_STATUS,COMPTE_EMAIL=:COMPTE_EMAIL,COMPTE_NUMERO=:COMPTE_NUMERO WHERE COMPTE_CODE=:COMPTE_CODE');
    $req->bindParam(':COMPTE_ROLE', $this->COMPTE_ROLE);
    $req->bindParam(':COMPTE_NOM', $this->COMPTE_NOM);
    $req->bindParam(':COMPTE_LOGIN', $this->COMPTE_LOGIN);
    $req->bindParam(':COMPTE_PASS', $this->COMPTE_PASS);
    $req->bindParam(':COMPTE_CODE', $this->COMPTE_CODE);
    $req->bindParam(':COMPTE_STATUS', $this->COMPTE_STATUS);
    $req->bindParam(':COMPTE_EMAIL', $this->COMPTE_EMAIL);
    $req->bindParam(':COMPTE_NUMERO', $this->COMPTE_NUMERO);
    $exec = $req->execute();
    if ($exec) {
        ?>
        <script >alert("Modification effectuée avec succes !")</script>
        <?php

    } else {
        ?>
        <script >alert("Echec de la modification!")</script>
        <?php

    }
}
}
?>