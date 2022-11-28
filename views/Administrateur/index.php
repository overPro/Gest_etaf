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
        <link href="http://localhost:81/Gest_etaf/framework/profil/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost:81/Gest_etaf/framework/profil/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="http://localhost:81/Gest_etaf/framework/admin/favicon.ico">
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
                <?php include "views/includes/sidebar.php"; ?>

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

                            <div class="row text-center pad-top"  >
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/Administrateur/local/profil" >
                                        <div class="div-square">
                                            <i class="fa fa-user fa-5x"></i>
                                            <h6>Éditer<br />Profil</h6>
                                        </div>
                                    </a>
                                </div> 
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/Gest_etaf/info/enregistrement" >
                                        <div class="div-square">
                                            <i class="fa fa-save fa-5x"></i>
                                            <h6>Enregistrement<br />Gest_etaf</h6>
                                        </div>
                                    </a>
                                </div> 

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/Gest_etaf/info/rechercher" >
                                        <div class="div-square">
                                            <i class="fa fa-search fa-5x"></i>
                                            <h6>Rechercher <br /> Gest_etaf</h6>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/Gest_etaf/info/liste" >
                                        <div class="div-square">
                                            <i class="fa fa-list fa-5x"></i>
                                            <h6>Liste <br /> Stagiaire</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/versements/Gest_etaf/enregistrement" >
                                        <div class="div-square">
                                            <i class="fa fa-pencil fa-5x"></i>
                                            <h6>Enregistrement Versement</h6>
                                        </div>
                                    </a>
                                </div> 

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <div class="div-square">
                                        <a href="http://localhost:81/Gest_etaf/compte/versements/Gest_etaf/consultation" >
                                            <i class="fa fa-list-alt fa-5x"></i>
                                            <h6>Versement par Stagiaire</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center pad-top"  >
                                
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/post/stagiaire/liste" >
                                        <div class="div-square">
                                            <i class="fa fa-list-alt fa-5x"></i>
                                            <h6>Liste <br /> Postulants</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/dossiers/Gest_etaf/enregistrement" >
                                        <div class="div-square">
                                            <i class="fa fa-file fa-5x"></i>
                                            <h6>Enregistrement Dossiers</h6>
                                        </div>
                                    </a>
                                </div> 

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <div class="div-square">
                                        <a href="http://localhost:81/Gest_etaf/compte/dossiers/Gest_etaf/consultation" >
                                            <i class="fa fa-folder-open fa-5x"></i>
                                            <h6>Consultation Dossiers</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/enregistrement" >
                                        <div class="div-square">
                                            <i class="fa fa-tasks fa-5x"></i>
                                            <h6>Enregistrement thèmes</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/choix" >
                                        <div class="div-square">
                                            <i class="fa fa-check-square-o fa-5x"></i>
                                            <h6>Choix <br /> Thème</h6>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                    <a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/liste" >
                                        <div class="div-square">
                                            <i class="fa fa-clipboard fa-5x"></i>
                                            <h6>Thème <br /> Stagiaire</h6>
                                        </div>
                                    </a>
                                </div>
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