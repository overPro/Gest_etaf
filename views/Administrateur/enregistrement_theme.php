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
                                <div class="col-lg-4"><h2 align="center">Enregistrement du thème</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <form action="http://localhost:81/Gest_etaf/compte/theme/stagiaire/enregistrement" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                            <label>Code du thème</label><br />
                                            <input type="text" class="form-control" placeholder="Code du thème" name="sai_code_theme_stage" required="">
                                        </div>
                                       <div class="form-group">
                                            <label>Filière</label>
                                            <select name="sai_code_filiere" class="selectpicker form-control" data-live-search="true">
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Libellé du thème</label><br />
                                            <input type="text" class="form-control" placeholder="Libellé du thème" name="sai_titre_theme_stage" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Description du thème</label><br />
                                            <textarea style="line-height: 0.4em" class="form-control" placeholder="description du thème" name="sai_description_theme_stage" required=""></textarea>
                                        </div>
                                    </div>
                                    
                                </div><br />
                                <button name="btn_enregistrer" type="submit" class="btn btn-danger" style="margin-left: 45%">Enregistrer</button>


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