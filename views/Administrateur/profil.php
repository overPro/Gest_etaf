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
                                <div class="col-lg-4"><h2 align="center">Édition du Profil</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <form enctype="multipart/form-data" action="http://localhost:81/Gest_etaf/compte/administrateur/local/editProfil" method="POST">

                                <div class="row">
                                    <div class="col-md-4">                                        
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                        if(!empty($photo)){
                                        ?>
                                        <img src="http://localhost:81/Gest_etaf/images/<?php echo $photo;?>" width="150"><br /><br />
                                        <?php
                                        }  else {
                                            ?>
                                        <img src="http://localhost:81/Gest_etaf/images/default.jpg" width="150"><br /><br />
                                        
                                        <?php
                                        }
                                        ?>
                                        <input type="file" class="form-control" placeholder=" im" name="photo" style="width: 40%"><br />
                                    </div>
                                    <div class="col-md-4">                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label>Nom et prenoms</label> 
                                            <input name="sai_nom_prenom" type="text" class="form-control" readonly="" value="<?php echo $nom_prenom; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label> 
                                            <input name="sai_telephone" type="text" class="form-control" value="<?php echo $tel; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Mot de passe</label> 
                                            <input name="sai_pass" type="text" class="form-control" value="<?php echo $mdp; ?>"> 
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label>Email</label> 
                                            <input name="sai_email" type="email" class="form-control" value="<?php echo $email; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Nom utilisateur</label> 
                                            <input name="sai_login" type="text" class="form-control" value="<?php echo $login; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Confirmation du mot de passe</label> 
                                            <input name="sai_conf_password" type="text" class="form-control" value="<?php echo $mdp; ?>"> 
                                        </div>

                                        <div hidden="" class="form-group">
                                            <label>id</label> 
                                            <input name="sai_id" type="text" class="form-control" readonly="" value="<?php echo $id; ?>"> 
                                        </div>
                                    </div>
                                </div>


                                <br>


                                <div class="form-group">
                                    <center>
                                        <button type="submit" class="btn btn-success" name="btn_modifier">Enregistrer les modifications</button>
                                    </center>
                                </div>


                            </form>

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