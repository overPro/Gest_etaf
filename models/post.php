<?php
class postModel
{
	public $id;
	public $nom;
	public $prenom;
	public $datenaiss;
	public $lieunaiss;
	public $nationalite;
	public $matrim;
	public $nbre_enf;
	public $ville;
	public $quartier;
	public $telephone;
	public $email;
	public $cycle;
	public $sexe;
	public $filiere;
	public $con;
	

	public function __construct()
	{
		require "database/connexion.php";
	}


	public function ajouterpost()
	{
               
		$req = $this->con->prepare('INSERT INTO postulant VALUES (null,:nom, :prenom, :date, :lieu, :nationalite, :sit, :enf, :ville, :quar, :tel, :email, :cycle, :fil, :se)');
		$req->bindParam(':nom', $this->nom);
		$req->bindParam(':prenom', $this->prenom);
		$req->bindParam(':date', $this->datenaiss);
		$req->bindParam(':lieu', $this->lieunaiss);
		$req->bindParam(':nationalite', $this->nationalite);
		$req->bindParam(':sit', $this->matrim);
		$req->bindParam(':enf', $this->nbre_enf);
		$req->bindParam(':ville', $this->ville);
		$req->bindParam(':quar', $this->quartier);
		$req->bindParam(':tel', $this->telephone);
		$req->bindParam(':email', $this->email);
		$req->bindParam(':cycle', $this->cycle);
		$req->bindParam(':fil', $this->filiere);
		$req->bindParam(':se', $this->sexe);
		$exec = $req->execute();
		if($exec)
		{ 
			?>
			<script >alert("Enregistrement effectué !")</script>
			<?php 
		} else { 
			?>
			<script >alert("Echec de l'enregistrement!")</script>
			<?php              
		}      
        }        
               
	

	public function rechercherpost()
	{
		$req = $this->con->prepare('SELECT * FROM postulant WHERE nom=:n AND prenoms=:pr AND telephone=:tel AND email=:mail');
		$req->bindParam(':n', $this->nom);
		$req->bindParam(':pr', $this->prenom);
		$req->bindParam(':tel', $this->telephone);
		$req->bindParam(':mail', $this->email);
		$req->execute();
		$data = $req->fetchAll();
		return $data;

	}
        
	public function liste()
	{
		$req = $this->con->prepare('SELECT * FROM postulant');
		$req->execute();
		$data = $req->fetchAll();
		return $data;

	}

}