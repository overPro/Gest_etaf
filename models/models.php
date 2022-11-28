<?php
class modModel {

    public $id;
    public $con;

    function __construct() {
        require "database/connexion.php";
    }

    public function listeProcedure() {
        $req = $this->con->prepare('SELECT * FROM procedure_operation WHERE code =:id');
        $req->bindParam(':id', $this->id);
        $reponse = $req->execute() or die(print_r($this->con->errorInfo()));
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listeInvestissement() {
        $req = $this->con->prepare('SELECT * FROM plan_investissement WHERE id =:id');
        $req->bindParam(':id', $this->id);
        $reponse = $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listeCout() {
        $req = $this->con->prepare('SELECT * FROM cout_operation WHERE id =:id');
        $req->bindParam(':id', $this->id);
        $reponse = $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listeDette() {
        $req = $this->con->prepare('SELECT * FROM plan_appui WHERE id =:id');
        $req->bindParam(':id', $this->id);
        $reponse = $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

}
?>