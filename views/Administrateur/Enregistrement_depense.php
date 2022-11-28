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
                                    <h2 align="center">Enregistrement de depenses</h2>
                                </div>
                                <div class="col-lg-3">
                                    <hr style="background-color: #0000ff">
                                </div>
                            </div>
                            <div class="nav-tabs-responsive">
                                <ul class="nav nav-tabs-progress nav-tabs-4 mb-4">
                                    <li class="nav-item">
                                        <a href="#account" class="nav-link active" data-toggle="tab">
                                            <span class="font-lg">1.
                                            </span> Mécanique/Dons <small class="d-block text-secondary">Toutes les informations concernant la mécanique et dons</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#dont" class="nav-link " data-toggle="tab">
                                            <span class="font-lg">2.
                                            </span> Nourriture/Carburant <small class="d-block text-secondary">Toutes les informations concernant les nourritures et carburant</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#personal" class="nav-link" data-toggle="tab">
                                            <span class="font-lg">3.</span> Transports/Electricités <small class="d-block text-secondary">Toutes les informations sur les transports et électricités</small></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#payment" class="nav-link" data-toggle="tab">
                                            <span class="font-lg">4.
                                            </span> Santé <small class="d-block text-secondary">Les informations sur la santé</small></a></li>
                                </ul>
                                <form action="http://localhost:81/Gest_etaf/compte/depense/debit/enregistrement" method="POST" enctype="multipart/form-data">

                                    <div class="row" style="margin-left: 15%">
                                        <div class="col-2"></div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="txt_DEPENSES_CREATED" type="date" class="form-control" value="<?php echo $DEPENSES_CREATED; 
                                                                                                                            ?>">
                                            </div>
                                        </div>

                                        <div class="col-2"><br />
                                            <button name="btn_rechercher" type="submit" class="btn btn-primary mb-2">Rechercher</button>
                                        </div>
                                    </div>
                                </form>

                                <form class="tab-content" action="http://localhost:81/Gest_etaf/compte/depense/debit/enregistrement" method="POST" enctype="multipart/form-data">
                                    <div id="account" class="tab-pane show active">
                                        <div class="mb-3">
                                            <a href="#account-collapse" data-toggle="collapse">
                                                <span class="font-lg">1.
                                                </span> Mécanique/Dons <small class="d-block text-secondary">Toutes les informations concernant la mécanique et dons</small>
                                            </a>
                                        </div>
                                        <div id="account-collapse" class="collapse show" data-parent="#formOrder">
                                            <div class="text-secondary mb-3"><small>Étape 1 sur 4</small>
                                            </div>



                                            <!--info perso-->
                                            <!-- 1eme lignes -->
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>MATERIEL 1</label>
                                                        <input name="txt_MEACANIQUE_MATERIEL_1" type="text" class="form-control" value="<?php echo $MEACANIQUE_MATERIEL_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 1</label>
                                                        <input name="txt_MECANIQUE_SOMMES_1" type="text" class="form-control" value="<?php echo $MECANIQUE_SOMMES_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>MATERIEL 2</label>
                                                        <input name="txt_MECANIQUE_MATERIEL_2" type="text" class="form-control" value="<?php echo $MECANIQUE_MATERIEL_2; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 2</label>
                                                        <input name="txt_MECANIQUE_SOMMES_2" type="text" class="form-control" value="<?php echo $MECANIQUE_SOMMES_2; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL </label>
                                                        <input name="txt_MECANIQUE_TOTAL" type="text" class="form-control" value="<?php echo $MECANIQUE_TOTAL; 
                                                                                                                                    ?>">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    MECANIQUE
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>MATERIEL 3</label>
                                                        <input name="txt_MECANIQUE_MATERIEL_3" type="text" class="form-control" value="<?php echo $MECANIQUE_MATERIEL_3; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 3</label>
                                                        <input name="txt_MECANIQUE_SOMMES_3" type="text" class="form-control" value="<?php echo $MECANIQUE_SOMMES_3; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>MATERIEL 4</label>
                                                        <input name="txt_MECANIQUE_MATERIEL_4" type="text" class="form-control" value="<?php echo $MECANIQUE_MATERIEL_4; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 4</label>
                                                        <input name="txt_MECANIQUE_SOMMES_4" type="text" class="form-control" value="<?php echo $MECANIQUE_SOMMES_4; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>




                                            </div>
                                            <hr>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    DON
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>MATERIEL </label>
                                                        <input name="txt_DON_MATERIEL_1" type="text" class="form-control" value="<?php echo $DON_MATERIEL_1; 
                                                                                                                                    ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME </label>
                                                        <input name="txt_DON_SOMMES_1" type="text" class="form-control" value="<?php echo $DON_SOMMES_1; 
                                                                                                                                ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL </label>
                                                        <input name="txt_DON_TOTAL" type="text" class="form-control" value="<?php echo $DON_TOTAL; 
                                                                                                                            ?>">
                                                    </div>
                                                </div>




                                            </div>


                                            <div class="d-none d-md-block">
                                                <hr>
                                                <div class="d-flex mb-3"><button type="button" class="btn btn-success ml-auto" data-form-step="#dont">Nourriture/Carburant &nbsp; <i class="icon-arrow-right font-sm"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dont" class="tab-pane show">
                                        <div class="mb-3">
                                            <a href="#dont-collapse" data-toggle="collapse">
                                                <span class="font-lg">2.
                                                </span> Nourriture/Carburant <small class="d-block text-secondary">Toutes les informations concernant les norritures et carburants</small>
                                            </a>
                                        </div>
                                        <div id="dont-collapse" class="collapse show" data-parent="#formOrder">
                                            <div class="text-secondary mb-3"><small>Étape 2 sur 4</small>
                                            </div>


                                            <!--info perso-->
                                            <!-- 1eme lignes -->
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOURRITURE 1</label>
                                                        <input name="txt_NOURRITURE_MATERIEL_1" type="text" class="form-control" value="<?php echo $NOURRITURE_MATERIEL_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 1</label>
                                                        <input name="txt_NOURRITURE_SOMMES_1" type="text" class="form-control" value="<?php echo $NOURRITURE_SOMMES_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOURRITURE 2</label>
                                                        <input name="txt_NOURRITURE_MATERIEL_2" type="text" class="form-control" value="<?php echo $NOURRITURE_MATERIEL_2; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 2</label>
                                                        <input name="txt_NOURRITURE_SOMMES_2" type="text" class="form-control" value="<?php echo $NOURRITURE_SOMMES_2; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL </label>
                                                        <input name="txt_NOURRITURE_TOTAL" type="text" class="form-control" value="<?php echo $NOURRITURE_TOTAL; 
                                                                                                                                    ?>">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    NOURRITURE
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOURRITURE 3</label>
                                                        <input name="txt_NOURRITURE_MATERIEL_3" type="text" class="form-control" value="<?php echo $NOURRITURE_MATERIEL_3; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 3</label>
                                                        <input name="txt_NOURRITURE_SOMMES_3" type="text" class="form-control" value="<?php echo $NOURRITURE_SOMMES_3; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOURRITURE 4</label>
                                                        <input name="txt_NOURRITURE_MATERIEL_4" type="text" class="form-control" value="<?php echo $NOURRITURE_MATERIEL_4; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 4</label>
                                                        <input name="txt_NOURRITURE_SOMMES_4" type="text" class="form-control" value="<?php echo $NOURRITURE_SOMMES_4; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>




                                            </div>
                                            <hr>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    CARBURANT
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME </label>
                                                        <input name="txt_CARBURANT_SOMMES_1" type="text" class="form-control" value="<?php echo $CARBURANT_SOMMES_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL </label>
                                                        <input name="txt_CARBURANT_TOTAL" type="text" class="form-control" value="<?php echo $CARBURANT_TOTAL; 
                                                                                                                                    ?>">
                                                    </div>
                                                </div>





                                            </div>


                                            <div class="d-none d-md-block">
                                                <hr>
                                                <div class="d-flex mb-3"><button type="button" class="btn btn-success ml-auto" data-form-step="#personal">Transports/Electricités &nbsp; <i class="icon-arrow-right font-sm"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--info cursus-->
                                    <div id="personal" class="tab-pane">

                                        <div class="mb-3"><a href="#personal-collapse" data-toggle="collapse">

                                                <span class="font-lg">2.</span> Transports/Electricités <small class="d-block text-secondary">Toutes les informations sur les transports et électricités</small></a>
                                        </div>

                                        <div id="personal-collapse" class="collapse" data-parent="#formOrder">

                                            <div class="text-secondary mb-3"><small>Étape 3 sur 4</small>
                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 1</label>
                                                        <input name="txt_TRANSPORT_SOMMES_1" type="text" class="form-control" value="<?php echo $TRANSPORT_SOMMES_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOM DU BENEFICIAIRE 1</label>
                                                        <input name="txt_TRANSPORT_NOM_BENEFICIAIRE_1" type="text" class="form-control" value="<?php echo $TRANSPORT_NOM_BENEFICIAIRE_1; 
                                                                                                                                                ?>">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    TRANSPORT
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME 2</label>
                                                        <input name="txt_TRANSPORT_SOMMES_2" type="text" class="form-control" value="<?php echo $TRANSPORT_SOMMES_2; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOM DU BENEFICIAIRE 2</label>
                                                        <input name="txt_TRANSPORT_NOM_BENEFICIARE_2" type="text" class="form-control" value="<?php echo $TRANSPORT_NOM_BENEFICIARE_2; 
                                                                                                                                                ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL </label>
                                                        <input name="txt_TRANSPORT_TOTAL" type="text" class="form-control" value="<?php echo $TRANSPORT_TOTAL; 
                                                                                                                                    ?>">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>






                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">

                                                </div>





                                            </div>
                                            <hr>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    ELECTRICITE
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>SOMME </label>
                                                        <input name="txt_ELECTRICITE_SOMMES_1" type="text" class="form-control" value="<?php echo $ELECTRICITE_SOMMES_1; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOM DU BENEFICIAIRE </label>
                                                        <input name="txt_ELECTRICITE_NOM_BENEFICIAIRE_1" type="text" class="form-control" value="<?php echo $ELECTRICITE_NOM_BENEFICIAIRE_1; 
                                                                                                                                                    ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL </label>
                                                        <input name="txt_ELECTRICITE_TOTAL" type="text" class="form-control" value="<?php echo $ELECTRICITE_TOTAL; 
                                                                                                                                    ?>">
                                                    </div>
                                                </div>





                                            </div>

                                            <div class="d-none d-md-block">
                                                <hr>
                                                <div class="d-flex mb-3"><button type="button" class="btn btn-outline-success" data-form-step="#dont"><i class="icon-arrow-left font-sm"></i> &nbsp; Nourriture/Carburant</button> <button type="button" class="btn btn-success ml-auto" data-form-step="#payment">Information sur la santé &nbsp; <i class="icon-arrow-right font-sm"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!--info parent-->
                                    <div id="payment" class="tab-pane">

                                        <div class="mb-3"><a href="#payment-collapse" data-toggle="collapse">

                                                <span class="font-lg">3.
                                                </span> Information sur la santé <small class="d-block text-secondary">Les informations sur la santé</small></a>
                                        </div>

                                        <div id="payment-collapse" class="collapse" data-parent="#formOrder">

                                            <div class="text-secondary mb-3"><small>Étape 4 sur 4</small>
                                            </div>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    SANTE
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>PRIX ET NOM DU MEDICALS 1</label>
                                                        <input name="txt_SANTE_PRIX_ET_NOM_DU_MEDICAL_1" type="text" class="form-control" value="<?php echo $SANTE_PRIX_ET_NOM_DU_MEDICAL_1; 
                                                                                                                                                    ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>NOM DU BENEFICIAIRE 1</label>
                                                        <input name="txt_SANTE_NOM_DU_BENEFICIAIRE_1" type="text" class="form-control" value="<?php echo $SANTE_NOM_DU_BENEFICIAIRE_1 
                                                                                                                                                ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL</label>
                                                        <input name="txt_SANTE_TOTAL" type="text" class="form-control" value="<?php echo $SANTE_TOTAL; 
                                                                                                                                ?>">
                                                    </div>
                                                </div>



                                            </div>
                                            <hr>
                                            <div class="row">


                                                <div class="col-md-3  col-md-offset-3">
                                                    TOTAL DU JOUR
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label style="display:none">PRIX ET NOM DU MEDICALS 1</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label style="display:none">NOM DU BENEFICIAIRE 1</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-md-offset-3">
                                                    <div class="form-group">
                                                        <label>TOTAL JOUR</label>
                                                        <input name="txt_DEPENSE_TOTAL_DU_JOUR" type="text" class="form-control" value="<?php echo $DEPENSE_TOTAL_DU_JOUR; 
                                                                                                                                        ?>">
                                                    </div>
                                                </div>



                                            </div>




                                            <hr>

                                            <div class="d-block d-md-flex"><button type="button" class="btn btn-outline-success d-none d-md-inline mb-3" data-form-step="#personal"><i class="icon-arrow-left font-sm"></i> &nbsp; Transports/Electricité</button>

                                                <?php if(isset($sol)){ ?>
                                                <div class="d-block d-md-inline ml-auto mb-3">
                                                    <button type="submit" class="btn btn-success btn-block" name="btn_modifier">Modifier la dépense</button>
                                                </div>
                                                <?php } ?>
                                                <div class="d-block d-md-inline ml-auto mb-3">
                                                    <button type="submit" class="btn btn-info btn-block" name="btn_ajouter">Enregistrer la dépense</button>
                                                </div>
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
} else {
?>
    <script language="javascript">
        document.location.href = "http://localhost:81/Gest_etaf/";
    </script>
<?php
}
?>