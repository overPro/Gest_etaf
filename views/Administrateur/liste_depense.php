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
                                <div class="col-lg-4"><h2 align="center">Liste des productions</h2></div>
                                <div class="col-lg-4"><hr style="background-color: #0000ff"></div>                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>DEPENSE_CODE</th>
                                            <th>DEPENSES_CREATED</th>
                                            <th>MECANIQUE_TOTAL</th>                                            
                                            <th>DON_TOTAL</th>                                          
                                            <th>NOURRITURE_TOTAL</th>                                           
                                            <th>CARBURANT_TOTAL</th>
                                            <th>TRANSPORT_TOTAL</th>
                                            <th>ELECTRICITE_TOTAL</th>
                                            <th>SANTE_TOTAL</th>
                                            <th>DEPENSE_TOTAL_DU_JOUR</th>
                                           
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($sol)) {
                                            foreach ($sol as $key => $value) {
                                                ?>


                                                <tr>
                                                    <td><?php echo $value['DEPENSE_CODE']; ?></td>
                                                    <td><?php echo $value['DEPENSES_CREATED']; ?></td>
                                                    <td><?php echo $value['MECANIQUE_TOTAL']; ?></td>
                                                    <td><?php echo $value['DON_TOTAL']; ?></td>
                                                    <td><?php echo $value['NOURRITURE_TOTAL']; ?></td>
                                                    <td><?php echo $value['CARBURANT_TOTAL']; ?></td>
                                                    <td><?php echo $value['TRANSPORT_TOTAL']; ?></td>
                                                    <td><?php echo $value['ELECTRICITE_TOTAL']; ?></td>
                                                    <td><?php echo $value['SANTE_TOTAL']; ?></td>
                                                    <td><?php echo $value['DEPENSE_TOTAL_DU_JOUR']; ?></td>
                                                    
                                                    
                                                  
                                                   
                                                    


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