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
        <title>Compte - Stagiaire</title>
        <link rel="icon" href="http://localhost:81/Gest_etaf/framework/admin/s.png-.png">
        <link href="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.css" rel="stylesheet">
        <link href="http://localhost:81/Gest_etaf/framework/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="app">
            <div class="app-body">
                <?php include "views/includes/sidebar_stag.php"; ?>

                <div class="app-content"><nav class="navbar navbar-expand navbar-light bg-white"><button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="icon-menu"></i></button>

                        <?php include "views/includes/header.php"; ?>     
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3"><hr style="background-color: #0000ff"></div>
                                <div class="col-lg-6"><h2 align="center">Liste de mes dossiers</h2></div>
                                <div class="col-lg-3"><hr style="background-color: #0000ff"></div>                                
                            </div><br />
                            
                            <table class="table table-striped table-responsive">
                                <thead>
                                <th>Matricule</th>
                                <th>Lettre Motivation</th>
                                <th>Lettre Recommandation</th>
                                <th>Curriculum</th>
                                <th>Pièce d'identité</th>
                                <th>Admissibilité</th>
                                <th>Fiche d'Identification</th>
                                <th>circuit de stage</th>
                                <th>Fiche d'engagement<th>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($rech)) {
                                        foreach ($rech as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo $_SESSION['matricule']; ?></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $motivation; ?>"><?php echo $motivation; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $recom; ?>"><?php echo $recom; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $vitae; ?>"><?php echo $vitae; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $identite; ?>"><?php echo $identite; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $admi; ?>"><?php echo $admi; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $identification; ?>"><?php echo $identification; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $sircuit; ?>"><?php echo $sircuit; ?></a></td>
                                                <td><a target="_blank" href="http://localhost:81/Gest_etaf/Fichiers/dossiers_Gest_etaf/<?php echo $eng; ?>"><?php echo $eng; ?></a></td>
                                            </tr>

                                            <?php }
                                            }
                                            ?>
                                </tbody>
                            </table>

                        </div>
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