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
                            <form action="http://localhost:81/Gest_etaf/compte/theme/stagiaire/choix" method="POST" enctype="multipart/form-data">

                                <div class="row" style="margin-left: 15%">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Filière</label>
                                            <select name="sai_filiere" class="selectpicker form-control" data-live-search="true">
                                                <option value="RHC">RHCOM</option>
                                                <option value="IDA">IDA</option>
                                                <option value="RIT">RIT</option>
                                                <option value="SI">SI</option>
                                                <option value="AD">AD</option>
                                                <option value="GC">Gestion Commerciale</option>
                                                <option value="FCGE">FCGE</option>
                                                <option value="FC">FC</option>
                                                <option value="GL">GL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5"><br />
                                        <button name="btn_rechercher" type="submit" class="btn btn-primary mb-2">Lancer l'affichage</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (!empty($sol)) {
                                ?>                           
                                <table class = "table table-striped">
                                    <thead class = "thead-light">
                                    <th scope = "col"><center>Code du theme de stage</center></th>
                                    <th scope = "col"><center>Titre du theme de stage</center></th>
                                    <th scope = "col"><center>Description des theme de stage</center></th>
                                    <th scope = "col"><center>Code la filiere</center></th>
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
                                            <td><center><?php echo $value['code_filiere']; ?></center></td>
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
                            <div class="row">
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>
                                <div class="col-lg-4"><h2 align="center">Choix du thème</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            
                             <form action="http://localhost:81/Gest_etaf/compte/theme/stagiaire/choix" method="POST" enctype="multipart/form-data">

                                <div class="row" style="">
                                    <div class="col-lg-5"> <br />
                                        <div class="form-group">
                                            <label>Nom & Prénoms &nbsp;</label>
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
                                        <div class="form-group">
                                        <label>Saisir le code du thème</label>
                                        <input type="text" name="sai_code_theme" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-3"><br />
                                        <button name="btn_attribuer" type="submit" class="btn btn-dark mb-2">Attribuer</button>
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
}  else {
   ?>
<script language="javascript">
    document.location.href="http://localhost:81/Gest_etaf/";
</script>
<?php
}
?>