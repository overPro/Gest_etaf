<?php
if(isset($_SESSION['user_id']))
{
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="author" content="">
        <meta name="description" content="">
        <title>Compte - Administrateur</title>
        <link rel="icon" href="http://localhost:81/Gest_etaf/framework/admin/favicon.ico">
        <link href="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.css" rel="stylesheet">
        <link href="http://localhost:81/Gest_etaf/framework/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="app">
            <div class="app-body">
                <?php include "views/includes/sidebar.php"; ?>

                <div class="app-content"><nav class="navbar navbar-expand navbar-light bg-white"><button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="icon-menu"></i></button>

                        <?php include "views/includes/header.php"; ?>     
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>
                                <div class="col-lg-4"><h2 align="center">Enregistrement des dossiers</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <form style="" action="http://localhost:81/Gest_etaf/compte/dossiers/Gest_etaf/enregistrement" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group" style="margin-left: 25%">
                                            <label>Nom & Prénoms &nbsp;</label>
                                            <select name="mat" class="selectpicker" data-live-search="true">
                                                <?php
                                                if (isset($stagiaire)) {
                                                    foreach ($stagiaire as $key => $value) {
                                                        ?>
                                                        <option value="<?php echo $value['matricule']; ?>"><?php echo $value['nom_prenom']; ?></option> 
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fiche d'engagement</label><br />
                                            <input type="file" class="form-control" placeholder="Fiche d'engagement" name="sai_fiche_engagement">
                                        </div>
                                        <div class="form-group">
                                             <label>Pièce d'identité</label><br />
                                            <input type="file" class="form-control" placeholder="Piece d'identite" name="sai_piece_identite">
                                        </div>
                                        <div class="form-group">
                                             <label>Diplôme d'admissibilité</label><br />
                                            <input type="file" class="form-control" placeholder="Diplome d'admissibilite" name="sai_diplome_admissibilite">
                                        </div>
                                        <div class="form-group">
                                             <label>Fiche d'identification</label><br />
                                            <input type="file" class="form-control" placeholder="Fiche d'dentification" name="sai_fiche_identification">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                             <label>Lettre de motivation</label><br />
                                            <input class="form-control" placeholder="Lettre de motivation" type="file" name="sai_lettre_motivation">
                                        </div>

                                        <div class="form-group">
                                            <label>Lettre de recommandation</label><br />
                                            <input type="file" class="form-control" placeholder="lettre de recommandation" name="sai_lettre_recommandation">
                                        </div>
                                        <div class="form-group">
                                            <label>Curriculum Vitae</label><br />
                                            <input class="form-control" placeholder="curriculum vitae" type="file" name="sai_curriculum_vitae">
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Fiche de circuit de stage</label><br />
                                            <input class="form-control" placeholder="Circuit de stage" type="file" name="sai_fiche_circuit">
                                        </div>                                        
                                    </div>
                                </div>
                        <br />
                        <button name="btn_enregistrer" type="submit" class="btn btn-danger" style="margin-left: 45%">Enregistrer</button>

                        </form>

                </div>
            </div>
        </div>        
        <script src="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.js"></script>        
        <script src ="http://localhost:81/Gest_etaf/framework/js/bootstrap-select.min.js" type = "text/javascript" ></script>
    </body>
</html>
<?php
}  else {
   ?>
<script language="javascript">
    document.location.href="http://localhost:81/Gest_etaf/";
</script>
<?php
}
?>