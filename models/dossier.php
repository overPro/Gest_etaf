<?php 
class dossiermodel
{
  public $id;
  public $matricule;
  public $date_depot_dossier;
  public $lettre_motivation;
  public $lettre_recommandation;
  public $curriculum_vitae;
  public $piece_identite;
  public $diplome_admissibilite;
  public $fiche_identification;
  public $fiche_circuit_stage;
  public $fiche_engagement;
  public $con;

  function __construct()
  {
   require "database/connexion.php";
 }

 // generation de code

// Ajouter
 public function ajouterdossier()
 {  
   $req = $this->con->prepare('INSERT INTO dossier VALUES(null,:date_depot_dossier,:lettre_motivation,:lettre_recommandation,:curriculum_vitae,:piece_identite,:diplome_admissibilite,:matricule,:fiche_identification,:fiche_circuit_stage,:fiche_engagement)');

   $req->bindParam(':matricule',$this->matricule);
   $req->bindParam(':fiche_identification',$this->fiche_identification);
   $req->bindParam(':fiche_circuit_stage',$this->fiche_circuit_stage);
   $req->bindParam(':fiche_engagement',$this->fiche_engagement);
   $req->bindParam(':date_depot_dossier',$this->date_depot_dossier);
   $req->bindParam(':lettre_motivation',$this->lettre_motivation);
   $req->bindParam(':lettre_recommandation',$this->lettre_recommandation);
   $req->bindParam(':curriculum_vitae',$this->curriculum_vitae);
   $req->bindParam(':piece_identite',$this->piece_identite);
   $req->bindParam(':diplome_admissibilite',$this->diplome_admissibilite);

   $reponse = $req->execute();

   if($reponse)

    { ?>
      <script type="text/javascript">
        alert("Ajout effectue avec succes");
      </script>
      <?php } 
      else{
        ?>
        <script type="text/javascript">
          alert("Echec de l'ajout");
        </script>
        <?php 
      } 
    } 

    
    

// Modifier
    public function modifierdossier()
    {
     $req = $this->con->prepare('UPDATE dossier SET matricule=:matricule,
      fiche_identification=:fiche_identification,
      fiche_circuit_stage=:fiche_circuit_stage,
      fiche_engagement=:fiche_engagement,date_depot_dossier=:date_depot_dossier,lettre_motivation=:lettre_motivation,lettre_recommandation=:lettre_recommandation,curriculum_vitae=:curriculum_vitae,piece_identite=:piece_identite,diplome_admissibilite=:diplome_admissibilite WHERE id=:id');

     $req->bindParam(':id',$this->id);
     $req->bindParam(':matricule',$this->matricule);
     $req->bindParam(':fiche_identification',$this->fiche_identification);
     $req->bindParam(':fiche_circuit_stage',$this->fiche_circuit_stage);
     $req->bindParam(':fiche_engagement',$this->fiche_engagement);
    $req->bindParam(':date_depot_dossier',$this->date_depot_dossier);
    $req->bindParam(':lettre_motivation',$this->lettre_motivation);
    $req->bindParam(':lettre_recommandation',$this->lettre_recommandation);
    $req->bindParam(':curriculum_vitae',$this->curriculum_vitae);
    $req->bindParam(':piece_identite',$this->piece_identite);
    $req->bindParam(':diplome_admissibilite',$this->diplome_admissibilite);

     $reponse = $req->execute();

     if($reponse)

      { ?>
        <script type="text/javascript">
          alert("Modification effectuee avec succes");
        </script>
        <?php } 
        else{
          ?>
          <script type="text/javascript">
            alert("Echec de la modification");
          </script>
          <?php 
        } 
      }

// Supprimer
      public function supprimerdossier()
      {
       $req = $this->con->prepare('DELETE FROM dossier WHERE matricule=:matricule');
       $req->bindParam(':matricule',$this->matricule);
       $req->execute();
       $reponse = $req->execute();
       if($reponse)

         { ?>
          <script type="text/javascript">
           alert("Suppression effectuee avec succes");
         </script>
         <?php } 
         else{
           ?>
           <script type="text/javascript">
            alert("Echec de la suppression");
          </script>
          <?php 
        } 
      }

// Rechercher des dossiers par matricule et code
      public function rechercherdossier($rech1,$rech2)
      {
       $req = $this->con->prepare('SELECT * FROM dossier WHERE matricule=:matricule AND id=:id');
       $req->bindParam(':matricule',$rech1);
       $req->bindParam(':id',$rech2);
       $req->execute();
       $sol = $req->fetchAll();
       return $sol;
     }

     // Rechercher des dossiers par matricule seulement
      public function rechercherdossiermat($rech1)
      {
       $req = $this->con->prepare('SELECT * FROM dossier WHERE matricule=:matricule');
       $req->bindParam(':matricule',$rech1);
       $req->execute();
       $sol = $req->fetchAll();
       return $sol;
     }

   


// Rechercher des dossiers par periode de stage
     public function rechercherdossierperiode($rech1,$rech2)
     {
      $req = $this->con->prepare('SELECT *
        FROM dossier
        WHERE date_debut_stage BETWEEN :date_debut_stage AND :date_fin_stage
        UNION 
        SELECT * 
        FROM dossier 
        WHERE date_fin_stage BETWEEN :date_debut_stage AND :date_fin_stage');
      $req->bindParam(':date_debut_stage',$rech1);
      $req->bindParam(':date_fin_stage',$rech2);
      $req->execute();
      $sol = $req->fetchAll();
      return $sol;
    }
// .....
    public function rechercherdossierTous()
    {
     $req = $this->con->prepare('SELECT *
        FROM dossier');
     $req->execute();
     $sol = $req->fetchAll();
     return $sol;
   }

  public function telecharger($rech)
{
  $req=$this->con->prepare('SELECT
   personne.id,
    personne.nom_personne,
    personne.prenom_personne,
     dossier.date_depot_dossier,
     dossier.lettre_motivation,
     dossier.lettre_recommandation,
     dossier.curriculum_vitae,
     dossier.piece_identite,
     dossier.diplome_admissibilite,
     dossier.photo
      FROM dossier,personne WHERE dossier.matricule=:mat AND dossier.id = personne.id');

                $req->bindParam(':mat',$rech);
                $req->execute();
                $solution = $req->fetchAll();
                return $solution;
}


// retrouver matricules ensaisissant le code unique
 public function retrouvermat($mat)
{
  $req=$this->con->prepare('SELECT * FROM dossier WHERE id=:code');
      $req->bindParam(':code',$mat);
      $req->execute();
      $solution = $req->fetchAll();
      return $solution;
}
  // Rechercher des dossiers inscrit a une meme periode
      public function rechercherdossierinscrit()
      {
       $req = $this->con->prepare('SELECT * FROM dossier,personne WHERE personne.id=dossier.id AND personne.id =:code AND dossier.date_debut_stage = :dd AND dossier.date_fin_stage=:df');
       $req->bindParam(':code',$this->id);
       $req->bindParam(':dd',$this->date_debut_stage);
       $req->bindParam(':df',$this->date_fin_stage);
       $req->execute();
       $ex = $req->fetchAll();
       return $ex;
     }
// Rechercher des dossiers existants
      public function rechercherdossierexistant()
      {
       $req = $this->con->prepare('SELECT id FROM personne WHERE id=:code');
       $req->bindParam(':code',$this->id);
       $req->execute();
       $exit = $req->fetchAll();
       return $exit;
     }
// envoier

 public function envoierdossier()
 {
$ok = $this->rechercherdossierinscrit();
$ko = $this->rechercherdossierexistant();
if(!empty($ko))
  { 

if(empty($ok))
  { 

   $req = $this->con->prepare('INSERT INTO dossier VALUES(:matricule,:id,:type_stage,:date_debut_stage,:date_fin_stage,:duree_stage,:code_filiere,:date_depot_dossier,:lettre_motivation,:lettre_recommandation,:curriculum_vitae,:piece_identite,:diplome_admissibilite,:photo)');

   $req->bindParam(':id',$this->id);
   $req->bindParam(':matricule',$this->matricule);
   $req->bindParam(':type_stage',$this->type_stage);
   $req->bindParam(':date_debut_stage',$this->date_debut_stage);
   $req->bindParam(':date_fin_stage',$this->date_fin_stage);
   $req->bindParam(':duree_stage',$this->duree_stage);
   $req->bindParam(':code_filiere',$this->code_filiere);
   $req->bindParam(':date_depot_dossier',$this->date_depot_dossier);
    $req->bindParam(':lettre_motivation',$this->lettre_motivation);
    $req->bindParam(':lettre_recommandation',$this->lettre_recommandation);
    $req->bindParam(':curriculum_vitae',$this->curriculum_vitae);
    $req->bindParam(':piece_identite',$this->piece_identite);
    $req->bindParam(':diplome_admissibilite',$this->diplome_admissibilite);
    $req->bindParam(':photo',$this->photo);


   $reponse = $req->execute();

   if($reponse)

    { ?>
      <script type="text/javascript">
        alert("Ajout effectue avec succes");
      </script>
      <?php } 
      else{
        ?>
        <script type="text/javascript">
          alert("Echec de l'ajout");
        </script>
        <?php 
      }
}
else
{
  ?>
      <script type="text/javascript">
        alert("Vous ne pouvez pas effectue plusieurs stages au cours d'une meme periode");
      </script>
      <?php
}
}
else
{
  ?>
      
      <script type="text/javascript">
        alert("Ce code n'existe pas");
      </script>
      <?php
}

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