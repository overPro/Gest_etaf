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
        <link href="http://localhost:81/Gest_etaf/framework/profil/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost:81/Gest_etaf/framework/profil/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="http://localhost:81/Gest_etaf/framework/admin/s.png-.png">
        <link href="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.css" rel="stylesheet">

        <style>
            .pad-top a{
                color: #0088cc;
                text-decoration: none;
            }
            .pad-top a:hover{
                color: #666666; 
            }
        </style>
    </head>

    <body>
        <div class="app">
            <div class="app-body">
                <?php include "views/includes/sidebar_stag.php"; ?>

                <div class="app-content"><nav class="navbar navbar-expand navbar-light bg-white"><button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="icon-menu"></i></button>

                        <?php include "views/includes/header.php"; ?>     
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="alert alert-info">
                                        <h1 align="center">Tableau de bord</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center pad-top" style="margin-left:">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/profil">
                                        <div class="div-square">
                                            <i class="fa fa-user fa-5x"></i>
                                            <h4>Mon Profil</h4>
                                        </div>
                                    </a>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/theme" >
                                        <div class="div-square">
                                            <i class="fa fa-check-square-o fa-5x"></i>
                                            <h4>Mon Thème</h4>
                                        </div>
                                    </a>
                                </div> 

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/dossiers/Gest_etaf/dossier" >
                                        <div class="div-square">
                                            <i class="fa fa-folder-open-o fa-5x"></i>
                                            <h4>Mes Dossiers</h4>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/liste">
                                        <div class="div-square">
                                            <i class="fa fa-list fa-5x"></i>
                                            <h4>Liste Stagiaire</h4>
                                        </div>
                                    </a>
                                </div>                            
                            </div>
                            <nav aria-label="breadcrumb" style="margin-top: 20%">
                                <ul class="breadcrumb" style="background: #99ccff">
                                    <div style="margin-left: 40%;">
                                    <?php echo "Mandigo @".  date('Y') ;?>
                                        </div>
                                </ul>
                            </nav>

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