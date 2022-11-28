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
                                <div class="col-lg-4"><h2 align="center">Liste Gest_etaf</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Nom et prenoms</th>
                                            <th>Cycle</th>
                                            <th>Filiere</th>
                                            <th>Date de debut</th>
                                            <th>Date de fin</th>
                                            <th>Durée</th>
                                            <th>Etat</th>
                                            <th>Oérations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($sol)) {
                                            foreach ($sol as $key => $value) {
                                                ?>


                                                <tr>
                                                    <td><?php echo $value['matricule']; ?></td>
                                                    <td><?php echo $value['nom_prenom']; ?></td>
                                                    <td><?php echo $value['cycle']; ?></td>
                                                    <td><?php echo $value['filiere']; ?></td>
                                                    <td><?php echo $value['date_debut_stage']; ?></td>
                                                    <td><?php echo $value['date_fin_stage']; ?></td>
                                                    <td><?php echo $value['duree_stage']; ?></td>
                                                    <td><?php echo $value['etat']; ?></td>
                                                    <td>
                                                        <?php
                                                        if($value['etat']=="En cours"){
                                                        ?>
                                                        <form method="POST" action="http://localhost:81/Gest_etaf/search/Gest_etaf/info/liste">
                                                            <input type="hidden" value="<?php echo $value['matricule']; ?>" name="mat">
                                                            <button type="submit" name="sout" class="btn btn-outline-danger" title="cliquez pour valider la soutenance">Soutenu </button>
                                                        </form>
                                                        <?php
                                                        }  else {
                                                            echo '';
                                                        }
                                                        ?>
                                                    </td>


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
        </div>        
        <script src="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.js">
        </script>        
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