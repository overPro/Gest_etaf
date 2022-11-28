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
                                <div class="col-lg-3"><hr style="background-color: #0000ff"></div>
                                <div class="col-lg-6"><h2 align="center">Enregistrement Versements</h2></div>
                                <div class="col-lg-3"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <form style="margin: 7%;" action="http://localhost:81/Gest_etaf/compte/versements/Gest_etaf/enregistrement" method="POST">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <select name="mat" class="selectpicker" data-live-search="true">
                                                <?php
                                                if (isset($stagiaire)) {
                                                    foreach ($stagiaire as $key => $value) {
                                                        ?>
                                                        <option value="<?php echo $value['matricule']; ?>"><?php echo $value['nom_prenom']; ?></option> 
                                                    <?php }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <input name="montant" type="text" class="form-control" placeholder="Montant du versement">
                                            <input name="date" type="hidden" class="form-control" value="<?php echo date("d-m-Y");?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="reg" class="selectpicker" data-live-search="true">
                                                <option value="Espèce">Espèce</option>
                                                <option value="Chèque">Chèque</option>
                                                <option value="Mobile Money">Mobile Money</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="produit" class="selectpicker" data-live-search="true">
                                                <option value="Assurance">Assurance</option>
                                                <option value="Formation">Formation</option>
                                                <option value="Matériel">Matériels</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                </div><br />
                                <button name="btn_enregistrer" type="submit" class="btn btn-danger" style="margin-left: 45%">Valider</button>
                            </form>

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