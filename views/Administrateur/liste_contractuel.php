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
                                <div class="col-lg-4"><h2 align="center">Liste Gest_etaf</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>CONTRACTUEL_NOM</th>
                                            <th>CONTRACTUEL_CODE</th>
                                            <th>CONTRACTUEL_CODE_GROUPE</th>
                                            <th>CONTRACTUEL_CODE_HORAIRE</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($sol)) {
                                            foreach ($sol as $key => $value) {
                                                ?>


                                                <tr>
                                                    <td><?php echo $value['CONTRACTUEL_NOM']; ?></td>
                                                    <td><?php echo $value['CONTRACTUEL_CODE']; ?></td>
                                                    <td>
                                                    <?php 
                                                    if ($value['CONTRACTUEL_CODE_GROUPE']=="1667782959") {
                                                        
                                                                            ?>
                                                                            <?php echo "A"; ?>
                                                                            <?php 

                                                                            }
                                                                if ($value['CONTRACTUEL_CODE_GROUPE']=="1667782979") {
                                                                                
                                                                            ?>
                                                                            <?php echo "B"; ?>
                                                                            <?php 

                                                                            }
                                                             if ($value['CONTRACTUEL_CODE_GROUPE']=="1667783003") {
                                                                              
                                                                            ?>
                                                                            <?php echo "C"; ?>
                                                                            <?php 

                                                                            }
                                                                            
                                                                            ?></td>


                                                    <td>
                                                    <?php 
                                                    if ($value['CONTRACTUEL_CODE_HORAIRE']=="1667783325") {
                                                        
                                                                            ?>
                                                                            <?php echo "07H00 - 15H00"; ?>
                                                                            <?php 

                                                                            }
                                                                if ($value['CONTRACTUEL_CODE_HORAIRE']=="1667783355") {
                                                                                
                                                                            ?>
                                                                            <?php echo "15H00 - 23H00"; ?>
                                                                            <?php 

                                                                            }
                                                             if ($value['CONTRACTUEL_CODE_HORAIRE']=="1667783388") {
                                                                              
                                                                            ?>
                                                                            <?php echo "23H00 - 07H00"; ?>
                                                                            <?php 

                                                                            }
                                                                            
                                                                            ?></td>
                                                  
                                                   
                                                    


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