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
                                    <div class="col-lg-6"><h2 align="center">Productions</h2></div>
                                    <div class="col-lg-3"><hr style="background-color: #0000ff"></div>                                
                                </div>
                            <form action="http://localhost:81/Gest_etaf/compte/production/activite/enregistrement" method="POST" enctype="multipart/form-data">

                                <div class="row" style="margin-left: 15%">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input name="txt_PRODUCTION_CREATED" type="date" class="form-control"  value="<?php echo $PRODUCTION_QUANTITE; ?>"> 
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Groupe</label>
                                            <select name="txt_PRODUCTION_CODE_GROUPE_Search" class="selectpicker form-control" data-live-search="true">
                                            <option value="1667782959">A</option>
                                                                    <option value="1667782979">B</option>
                                                                    <option value="1667783003">C</option>
                                                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-2"><br />
                                        <button name="btn_rechercher" type="submit" class="btn btn-primary mb-2">Rechercher</button>
                                    </div>
                                </div>
                            </form>
                            
                             <form action="http://localhost:81/Gest_etaf/compte/production/activite/enregistrement" method="POST" enctype="multipart/form-data">
                                                                             
                                <div class="row"> 
                                                <div class="col-md-3  col-md-offset-3">
                                                    
                                                
                                                <input name="txt_PRODUCTION_CODE" type="hidden" class="form-control"  value="<?php echo $PRODUCTION_CODE; ?>"> 
                                                            
                                   
                              
                                                       
                                                      
                                                      
                                                </div> 
                                                    <div class="col-md-3   col-md-offset-3">
                                                        
                                                        <div class="form-group" >
                                                            <label>Libelle</label>
                                                            <select style="width:34px" name="txt_PRODUCTION_CODE_LIBELLE" class="selectpicker form-control" data-live-search="true">
                                                                    <?php
                                                                     if($PRODUCTION_CODE_LIBELLE=="1667783485"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783485"; ?>"><?php echo "Nombre de sacs utilises"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE=="1667783580"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783580"; ?>"><?php echo "Aliment Betail (50) kg"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE=="1667783671"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783671"; ?>"><?php echo "Huile brute de 25L"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE=="1667783705"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783705"; ?>"><?php echo "Sac vide"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                            if (isset($sol1)) {
                                                                                //var_dump($sol);
                                                                                //die();
                                                                                foreach ($sol1 as $key => $value) {
                                                                                    ?>
                                                                                    <option value="<?php echo $value['PRODUCTION_TYPE_CODE']; ?>"><?php echo $value['PRODUCTION_TYPE_LIBELLE']; ?></option> 
                                                                                <?php
                                                                                }
                                                                            }
                                                                    ?>
                                                                
                                                            </select>
                                                        </div>     
                                                    </div>     
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Quantite</label> 
                                                            <input name="txt_PRODUCTION_QUANTITE" type="text" class="form-control"  value="<?php echo $PRODUCTION_QUANTITE; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Total</label> 
                                                            <input name="txt_PRODUCTION_TOTAL" type="text" class="form-control"  value="<?php echo $PRODUCTION_TOTAL; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                                                                     
                                                </div> 




                                                <!-- deuxieme lignes -->
                                
                                                <div class="row"> 
                                                <div class="col-md-3  col-md-offset-3">
                                                    
                                                            <div class="form-group">
                                                                <label>Groupe</label>
                                                                <select name="txt_PRODUCTION_CODE_GROUPE" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                        if (!empty($PRODUCTION_CODE_GROUPE)) {
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667782959")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782959" ?>"><?php echo "A"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667782979")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782979" ?>"><?php echo "B"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667783003")) {

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
                                                    <div class="col-md-3   col-md-offset-3">
                                                        
                                                        <div class="form-group" >
                                                            <label>Libelle</label>
                                                            <select style="width:34px" name="txt_PRODUCTION_CODE_LIBELLE_1" class="selectpicker form-control" data-live-search="true">
                                                                    <?php

                                                                     if($PRODUCTION_CODE_LIBELLE_1=="1667783485"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783485"; ?>"><?php echo "Nombre de sacs utilises"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_1=="1667783580"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783580"; ?>"><?php echo "Aliment Betail (50) kg"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_1=="1667783671"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783671"; ?>"><?php echo "Huile brute de 25L"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_1=="1667783705"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783705"; ?>"><?php echo "Sac vide"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                            if (isset($sol1)) {
                                                                                //var_dump($sol);
                                                                                //die();
                                                                                foreach ($sol1 as $key => $value) {
                                                                                    ?>
                                                                                    <option value="<?php echo $value['PRODUCTION_TYPE_CODE']; ?>"><?php echo $value['PRODUCTION_TYPE_LIBELLE']; ?></option> 
                                                                                <?php
                                                                                }
                                                                            }
                                                                    ?>
                                                                
                                                            </select>
                                                        </div>     
                                                    </div>     
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Quantite</label> 
                                                            <input name="txt_PRODUCTION_QUANTITE_1" type="text" class="form-control"  value="<?php echo $PRODUCTION_QUANTITE_1; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Total</label> 
                                                            <input name="txt_PRODUCTION_TOTAL_1" type="text" class="form-control"  value="<?php echo $PRODUCTION_TOTAL_1; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                                                                     
                                                </div> 

                                                <!-- Troisième lignes -->
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="row"> 
                                                <div class="col-md-3  col-md-offset-3">
                                                    
                                                            <div class="form-group" style="display:none">
                                                                <label>Groupe</label>
                                                                <select name="txt_PRODUCTION_CODE_GROUPE_2" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                        if (!empty($PRODUCTION_CODE_GROUPE)) {
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667782959")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782959" ?>"><?php echo "A"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667782979")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782979" ?>"><?php echo "B"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667783003")) {

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
                                                    <div class="col-md-3   col-md-offset-3">
                                                        
                                                        <div class="form-group" >
                                                            <label>Libelle</label>
                                                            <select style="width:34px" name="txt_PRODUCTION_CODE_LIBELLE_2" class="selectpicker form-control" data-live-search="true">
                                                                    <?php
                                                                     if($PRODUCTION_CODE_LIBELLE_2=="1667783485"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783485"; ?>"><?php echo "Nombre de sacs utilises"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_2=="1667783580"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783580"; ?>"><?php echo "Aliment Betail (50) kg"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_2=="1667783671"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783671"; ?>"><?php echo "Huile brute de 25L"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_2=="1667783705"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783705"; ?>"><?php echo "Sac vide"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                            if (isset($sol1)) {
                                                                                //var_dump($sol);
                                                                                //die();
                                                                                foreach ($sol1 as $key => $value) {
                                                                                    ?>
                                                                                    <option value="<?php echo $value['PRODUCTION_TYPE_CODE']; ?>"><?php echo $value['PRODUCTION_TYPE_LIBELLE']; ?></option> 
                                                                                <?php
                                                                                }
                                                                            }
                                                                    ?>
                                                                
                                                            </select>
                                                        </div>     
                                                    </div>     
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Quantite</label> 
                                                            <input name="txt_PRODUCTION_QUANTITE_2" type="text" class="form-control"  value="<?php echo $PRODUCTION_QUANTITE_2; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Total</label> 
                                                            <input name="txt_PRODUCTION_TOTAL_2" type="text" class="form-control"  value="<?php echo $PRODUCTION_TOTAL_2; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                                                                     
                                                </div> 

                                                                            <!-- Quatrième lignes -->
                                                
                                    <div class="row"> 
                                                <div class="col-md-3  col-md-offset-3">
                                                    
                                                            <div class="form-group" style="display:none">
                                                                <label>Groupe</label>
                                                                <select name="txt_PRODUCTION_CODE_GROUPE_" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                        if (!empty($PRODUCTION_CODE_GROUPE)) {
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667782959")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782959" ?>"><?php echo "A"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667782979")) {

                                                                            ?>
                                                                            <option value="<?php echo "1667782979" ?>"><?php echo "B"; ?></option>
                                                                            <?php 
                                                                            
                                                                        }
                                                                        if (($PRODUCTION_CODE_GROUPE=="1667783003")) {

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
                                                    <div class="col-md-3   col-md-offset-3">
                                                        
                                                        <div class="form-group" >
                                                            <label>Libelle</label>
                                                            <select style="width:34px" name="txt_PRODUCTION_CODE_LIBELLE_3" class="selectpicker form-control" data-live-search="true">
                                                                    <?php

                                                                    if($PRODUCTION_CODE_LIBELLE_3=="1667783485"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783485"; ?>"><?php echo "Nombre de sacs utilises"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_3=="1667783580"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783580"; ?>"><?php echo "Aliment Betail (50) kg"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_3=="1667783671"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783671"; ?>"><?php echo "Huile brute de 25L"; ?></option> 
                                                                    <?php  
                                                                    }
                                                                    if($PRODUCTION_CODE_LIBELLE_3=="1667783705"){
                                                                        ?>
                                                                        <option value="<?php echo "1667783705"; ?>"><?php echo "Sac vide"; ?></option> 
                                                                    <?php  
                                                                    }



                                                                            if (isset($sol1)) {
                                                                                //var_dump($sol);
                                                                                //die();
                                                                                foreach ($sol1 as $key => $value) {
                                                                                    ?>
                                                                                    <option value="<?php echo $value['PRODUCTION_TYPE_CODE']; ?>"><?php echo $value['PRODUCTION_TYPE_LIBELLE']; ?></option> 
                                                                                <?php
                                                                                }
                                                                            }
                                                                    ?>
                                                                
                                                            </select>
                                                        </div>     
                                                    </div>     
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Quantite</label> 
                                                            <input name="txt_PRODUCTION_QUANTITE_3" type="text" class="form-control"  value="<?php echo $PRODUCTION_QUANTITE_3; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
                                                    </div>
                                                    <div class="col-md-3 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Total</label> 
                                                            <input name="txt_PRODUCTION_TOTAL_3" type="text" class="form-control"  value="<?php echo $PRODUCTION_TOTAL_3; ?>"> 
                                                        </div>                                                    
                                                       
                                                    
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