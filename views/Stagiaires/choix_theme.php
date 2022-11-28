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
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>
                                <div class="col-lg-4"><h2 align="center">Votre Thème :</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <?php
                            if (!empty($sole)) {
                                ?>                           
                                <table class = "table table-striped">
                                    <thead class = "thead-light">
                                    <th scope = "col"><center>Matricule</center></th>
                                    <th scope = "col"><center>Nom & Prénoms</center></th>
                                    <th scope = "col"><center>Thèmes</center></th>
                                    <th scope = "col"><center>Code Thème</center></th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($sole)) {
                                            foreach ($sole as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $value['matricule']; ?></center></td>
                                            <td><center><?php echo $value['nom_prenom']; ?></center></td>
                                            <td><center><?php echo $value['titre_theme_stage']; ?></center></td>
                                            <td><center><?php echo $value['code_theme_stage']; ?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>


                                    </tbody>	
                                </table>
                                <?php
                            }
                            ?>
                            <br />
                            <br /><br />
                            <div class="row">
                                <div class="col-lg-3"><hr style="background-color: #0000ff"></div>
                                <div class="col-lg-6"><h2 align="center">Liste des thèmes pour la Filière</h2></div>
                                <div class="col-lg-3"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <?php
                            if (!empty($sol)) {
                                ?>                           
                                <table class = "table table-striped">
                                    <thead class = "thead-light">
                                    <th scope = "col"><center>Code du theme de stage</center></th>
                                    <th scope = "col"><center>Titre du theme de stage</center></th>
                                    <th scope = "col"><center>Description des theme de stage</center></th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($sol)) {
                                            foreach ($sol as $key => $value) {
                                                ?>
                                                <tr>
                                            <td><center><?php echo $value['code_theme_stage']; ?></center></td>
                                            <td><center><?php echo $value['titre_theme_stage']; ?></center></td>
                                            <td><center><?php echo $value['description_theme_stage']; ?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>


                                    </tbody>	
                                </table>
                                <?php
                            }
                            ?>
                            <br />
                            
                            
                             
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.js">
    </script>
    <script src="http://localhost:81/Gest_etaf/framework/admin/admin4b.docs.js">
    </script>
    <script src="http://localhost:81/Gest_etaf/framework/js/bootstrap-select.min.js" type="text/javascript"></script>
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