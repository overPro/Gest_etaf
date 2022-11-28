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
                                <div class="col-lg-4"><h2 align="center">Liste des Postulants</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <th>Nom & Prénoms</th>
                                <th>E-mail</th>
                                <th>Ville</th>
                                <th>Téléphone</th>
                                <th>Cycle</th>
                                <th>Filière</th>
                                <th>Sexe</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($posts)) {
                                        foreach ($posts as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo $value['nom']." ".$value['prenoms'] ;?></td>
                                                <td><?php echo $value['email']; ?></td>
                                                <td><?php echo $value['ville']; ?></td>
                                                <td><?php echo $value['telephone']; ?></td>
                                                <td><?php echo $value['cycle']; ?></td>
                                                <td><?php echo $value['filiere']; ?></td>
                                                <td><?php echo $value['sexe']; ?></td>
                                                <td><a href="http://localhost:81/Gest_etaf/compte/Gest_etaf/info/inscription&id=<?php echo $value['id']; ?>">Inscrire</a></td>
                                                
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
        <script src="http://localhost:81/Gest_etaf/framework/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="http://localhost:81/Gest_etaf/framework/admin/admin4b.min.js"></script>        
        <script src ="http://localhost:81/Gest_etaf/framework/js/bootstrap-select.min.js" type = "text/javascript" ></script>
        <script>
            $(document).ready(function () {
                $('.inscript').on('click', function () {
                    var id = $(this).attr("id");
                    window.location='http://localhost:81/Gest_etaf/Gest_etaf/info/inscription?id='+id;
                    
                });
            });
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