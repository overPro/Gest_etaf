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
                                <div class="col-lg-4"><h2 align="center">Liste Versements</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <form style="margin-left: 20%;" action="http://localhost:81/Gest_etaf/compte/versements/Gest_etaf/consultation" method="POST">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
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
                                    <div class="col-lg-3">                                        
                                        <button name="btn_consul" type="submit" class="btn btn-danger" style="margin-left: 45%">Consulter</button>
                                    </div>                                    
                                </div>                                
                            </form>                            
                            <br /><br />

                            <table class="table table-striped">
                                <?php
                                if(isset($s)){
                                    ?>
                                <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="alert alert-danger">
                                        <h1 align="center">Total : <?php echo $som.' F CFA'; ?></h1>
                                    </div>
                                </div>
                            </div>
                                <?php
                                }
                                    ?>
                                <thead>
                                <th>Matricule</th>
                                <th>Nom & Prénoms</th>
                                <th>Montant</th>
                                <th>Date Versement</th>
                                <th>Mode Versement</th>
                                <th>Produit</th>
                                <th>Utilisateur</th>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($stag) AND isset($rech)) {
                                        foreach ($rech as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo $matricule; ?></td>
                                                <td><?php echo $nom_pre; ?></td>
                                                <td><?php echo $value['montant']; ?></td>
                                                <td><?php echo $value['date_versement']; ?></td>
                                                <td><?php echo $value['mode_reglement']; ?></td>
                                                <td><?php echo $value['produit']; ?></td>
                                                <td><?php echo $value['user']; ?></td>
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