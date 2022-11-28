<?php
if (isset($_SESSION['user_id'])) {
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
        <link href="http://localhost:81/Gest_etaf/framework/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="app">
            <div class="app-body">
                <?php include "views/includes/sidebar.php"; ?>
                <div class="app-content">
                    <nav class="navbar navbar-expand navbar-light bg-white"><button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="icon-menu"></i></button>
                        <?php include "views/includes/header.php"; ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3">
                                    <hr style="background-color: #0000ff">
                                </div>
                                <div class="col-lg-6">
                                    <h2 align="center">Enregistrement d'un contractuel</h2>
                                </div>
                                <div class="col-lg-3">
                                    <hr style="background-color: #0000ff">
                                </div>
                            </div>
                            <form action="http://localhost:81/Gest_etaf/compte/contractuel/employe/enregistrement" method="POST" enctype="multipart/form-data">

                                <div class="row" style="margin-left: 15%">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <select name="txt_CONTRACTUEL_CODE" class="selectpicker form-control" data-live-search="true">
                                                <?php
                                                if (isset($sol)) {
                                                    //var_dump($sol);
                                                    //die();
                                                    foreach ($sol as $key => $value) {
                                                ?>
                                                        <option value="<?php echo $value['COMPTE_CODE']; ?>"><?php echo $value['COMPTE_NOM']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5"><br />
                                        <button name="btn_rechercher" type="submit" class="btn btn-primary mb-2">Rechercher</button>
                                    </div>
                                </div>
                            </form>

                            <form action="http://localhost:81/Gest_etaf/compte/compte/personnel/enregistrement" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label>Nom Prenom</label>
                                            <input name="txt_COMPTE_NOM" type="text" class="form-control" value="<?php echo $COMPTE_NOM; ?>">
                                        </div>


                                    </div>
                                    <div class="col-md-6  col-md-offset-3">

                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="txt_COMPTE_ROLE" class="selectpicker form-control" data-live-search="true">

                                                <option value="Administrateur">Administrateur</option>
                                                <option value="Comptable">Comptable</option>
                                                <option value="Secretaire">Secretaire</option>

                                            </select>
                                        </div>






                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6   col-md-offset-3">

                                        <div class="form-group">
                                            <label>Login</label>
                                            <input name="txt_COMPTE_LOGIN" type="text" class="form-control" value="<?php echo $COMPTE_LOGIN; ?>">
                                        </div>







                                    </div>
                                    <div class="col-md-6  col-md-offset-3">

                                        <div class="form-group">
                                            <label>Mot de passe</label>

                                            <input name="txt_COMPTE_PASS" type="text" class="form-control" value="<?php echo $COMPTE_PASS; ?>">
                                        </div>

                                    </div>





                                </div>
                                <div class="row">

                                    <div class="col-md-6   col-md-offset-3">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="txt_COMPTE_EMAIL" type="text" class="form-control" value="<?php echo $COMPTE_EMAIL; ?>">
                                        </div>







                                    </div>
                                    <div class="col-md-6  col-md-offset-3">

                                        <div class="form-group">
                                            <label>Numero</label>

                                            <input name="txt_COMPTE_NUMERO" type="text" class="form-control" value="<?php echo $COMPTE_NUMERO; ?>">
                                        </div>

                                    </div>





                                </div>
                                <div class="row">

                                    <div class="col-md-3   col-md-offset-3">

                                        







                                    </div>
                                    <div class="col-md-4  col-md-offset-3">

                                        <div class="form-group">
                                            <label>Photo</label>

                                            <input name="txt_COMPTE_PHOTO" type="file" class="form-control" value="<?php echo $COMPTE_PHOTO; ?>">
                                        </div>

                                    </div>





                                </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <button name="btn_enregistrer" type="submit" class="btn btn-primary" style="margin-left: 45%">Enregistrer</button>

                            </div>
                            <div class="col-md-3">
                                <button name="btn_modifier" type="submit" class="btn btn-success" style="margin-left: 45%">Modifier</button>

                            </div>
                            <div class="col-md-3">
                                <button name="btn_supprimer" type="submit" class="btn btn-danger" style="margin-left: 45%">Supprimer</button>

                            </div>
                            <div class="col-md-3">
                                <button name="btn_actualiser" type="submit" class="btn btn-default" style="margin-left: 45%">Actualiser</button>

                            </div>
                        </div>
                        </form>

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
} else {
?>
    <script language="javascript">
        document.location.href = "http://localhost:81/Gest_etaf/";
    </script>
<?php
}
?>