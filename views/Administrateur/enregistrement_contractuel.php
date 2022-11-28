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
                                    <div class="col-lg-6"><h2 align="center">Enregistrement d'un contractuel</h2></div>
                                    <div class="col-lg-3"><hr style="background-color: #0000ff"></div>                                
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
                                                        <option value="<?php echo $value['CONTRACTUEL_CODE']; ?>"><?php echo $value['CONTRACTUEL_NOM']; ?></option> 
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
                            
                             <form action="http://localhost:81/Gest_etaf/compte/contractuel/employe/enregistrement" method="POST" enctype="multipart/form-data">

                                                <div class="row">       
                                                    <div class="col-md-6 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Nom Prenom</label> 
                                                            <input name="txt_CONTRACTUEL_NOM" type="text" class="form-control"  value="<?php echo $CONTRACTUEL_NOM; ?>"> 
                                                        </div>                                                    
                                                       
                                                        <div class="row" style="display:none">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Situation Matrimoniale</label> 
                                                                    <select name="sai_situation_matrimoniale" class="selectpicker" data-live-search="true">
                                                                        <?php
                                                                        if (!empty($situation_matrimoniale)) {
                                                                            ?>
                                                                            <option value="<?php //echo $situation_matrimoniale; ?>"><?php //echo $situation_matrimoniale; ?></option>
                                                                            <?php }
                                                                        ?>
                                                                        <option value="Marié(e)">Marié(e)</option>
                                                                        <option value="Célibataire">Célibataire</option>
                                                                        <option value="Divorcé">Divorcé</option>
                                                                        <option value="Veuf(ve)">Veuf(ve)</option>
                                                                        <option value="Polygame">Polygame</option>
                                                                        <option value="Fiancé(e)">Fiancé(e)</option>
                                                                        <option value="Concubinage">Concubinage</option>
                                                                    </select>
                                                                </div>
                                                            </div>                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6  col-md-offset-3">
                                                    
                                                            <div class="form-group">
                                                                <label>Groupe</label>
                                                                <select name="txt_CONTRACTUEL_CODE_GROUPE" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                        if (!empty($CONTRACTUEL_CODE_GROUPE)) {
                                                                        if (($CONTRACTUEL_CODE_GROUPE=="1667782959")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782959" ?>"><?php echo "A"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($CONTRACTUEL_CODE_GROUPE=="1667782979")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782979" ?>"><?php echo "B"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($CONTRACTUEL_CODE_GROUPE=="1667783003")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667783003" ?>"><?php echo "C"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                    }
                                                                        ?>
                                                                    <option value="1667782959">A</option>
                                                                    <option value="1667782979">B</option>
                                                                    <option value="1667783003">C</option>
                                                                   
                                                                </select>
                                                            </div>
                                                            
                                   
                              
                                                       
                                                      
                                                      
                                                    </div>                                                 
                                                </div>
                                                <div class="row">       
                                                    
                                                    <div class="col-md-6   col-md-offset-3">
                                                        
                                                            <div class="form-group" >
                                                                <label>Horaire</label>
                                                                <select style="width:34px" name="txt_CONTRACTUEL_CODE_HORAIRE" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                        if (!empty($CONTRACTUEL_CODE_HORAIRE)) {
                                                                            if($CONTRACTUEL_CODE_HORAIRE=="1667783325"){
                                                        ?><option value="<?php echo "1667783325"; ?>"><?php echo "07H00 - 15H00"; ?></option><?php
                                                                     }
                                                                     if($CONTRACTUEL_CODE_HORAIRE=="1667783355"){
                                                        ?><option value="<?php echo "1667783355"; ?>"><?php echo "15H00 - 23H00"; ?></option><?php
                                                                     }
                                                                     if($CONTRACTUEL_CODE_HORAIRE=="1667783388"){
                                                        ?><option value="<?php echo "1667783388"; ?>"><?php echo "23H00 - 07H00"; ?></option><?php
                                                                     }
                                                                    }
                                                                        ?>
                                                                    <option value="1667783325">07H00 - 15H00</option>
                                                                    <option value="1667783355">15H00 - 23H00</option>
                                                                    <option value="1667783388">23H00 - 07H00</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            
                                                            <input name="txt_CONTRACTUEL_CODE" type="hidden" type="text" class="form-control"  value="<?php echo $CONTRACTUEL_CODE; ?>"> 
                                                         
                                                         
                                   
                              
                                                       
                                                      
                                                      
                                                    </div>                                                 
                                                    <div class="col-md-6  col-md-offset-3" >
                                                      
                                                            <div class="form-group">
                                                                <label>Presence</label>
                                                                <select name="txt_CONTRACTUEL_PRESENCE" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                        if (!empty($CONTRACTUEL_PRESENCE)) {
                                                                            if( $CONTRACTUEL_PRESENCE=="1"){
                                                                            ?>
                                                                            <option value="<?php echo "1"; ?>"><?php echo "1/1"; ?></option>
                                                                            <?php }
                                                                            if( $CONTRACTUEL_PRESENCE=="0"){
                                                                            ?>
                                                                            <option value="<?php echo "0"; ?>"><?php echo "0/0"; ?></option>
                                                                            <?php }
                                                                            }
                                                                        ?>
                                                                    <option value="1">1/1</option>
                                                                    <option value="0">0/0</option>
                                                                    
                                                                </select>
                                                          
                                                            </div>
                                   
                              
                                                       
                                                      
                                                      
                                                    </div>                                                 
                                                </div>
                                                <div class="row mt-3" >
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
}  else {
   ?>
<script language="javascript">
    document.location.href="http://localhost:81/Gest_etaf/";
</script>
<?php
}
?>