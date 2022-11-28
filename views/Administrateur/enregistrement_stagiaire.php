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
                                    <div class="col-lg-6"><h2 align="center">Enregistrement d'un stagiaire</h2></div>
                                    <div class="col-lg-3"><hr style="background-color: #0000ff"></div>                                
                                </div>
                                <div class="nav-tabs-responsive">
                                    <ul class="nav nav-tabs-progress nav-tabs-4 mb-4">
                                        <li class="nav-item">
                                            <a href="#account" class="nav-link active" data-toggle="tab">
                                                <span class="font-lg">1.
                                                </span> Informations Personnelles <small class="d-block text-secondary">Toutes les informations concernant le stagiaire</small></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#personal" class="nav-link" data-toggle="tab">
                                                <span class="font-lg">2.</span> Informations Cursus <small class="d-block text-secondary">Toutes les informations sur la filière et les conditions de stage</small></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#payment" class="nav-link" data-toggle="tab">
                                                <span class="font-lg">3.
                                                </span> Information sur les Parents <small class="d-block text-secondary">Les informations sur les parents notamment Père et/ou mère</small></a></li>
                                        <li class="nav-item">
                                            <a href="#confirmation" class="nav-link" data-toggle="tab">
                                                <span class="font-lg">4.
                                                </span> Personne à Contacter en cas d'urgence <small class="d-block text-secondary">Les informations concernant la personne à contacter en cas d'urgence à l'instar du père/mère/tuteur légal</small></a></li>
                                    </ul>


                                    <form class="tab-content" action="http://localhost:81/Gest_etaf/compte/Gest_etaf/info/enregistrement" method="POST" enctype="multipart/form-data">
                                        <div id="account" class="tab-pane show active">
                                            <div class="mb-3">
                                                <a href="#account-collapse" data-toggle="collapse">
                                                    <span class="font-lg">1.
                                                    </span> Informations Personnelles <small class="d-block text-secondary">Toutes les informations concernant le stagiaire</small>
                                                </a>
                                            </div><div id="account-collapse" class="collapse show" data-parent="#formOrder">
                                                <div class="text-secondary mb-3"><small>Étape 1 sur 4</small>
                                                </div>


                                                <!--info perso-->

                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3">                                                                                                        
                                                        <div class="form-group">
                                                            <label>Matricule</label> 
                                                            <input name="sai_matricule" type="text" class="form-control"  value="<?php echo $matricule; ?>"> 
                                                        </div>                                                    
                                                        <div class="form-group">
                                                            <label>Date de naissance</label> 
                                                            <input name="sai_date_naissance" type="date" class="form-control"  value="<?php echo $date_naissance; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lieu de naissance</label> 
                                                            <input name="sai_lieu_naissance" type="text" class="form-control"  value="<?php echo $lieu_naissance; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nationalite</label> 
                                                            <input name="sai_nationalite" type="text" class="form-control"  value="<?php echo $nationalite; ?>"> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Situation Matrimoniale</label> 
                                                                    <select name="sai_situation_matrimoniale" class="selectpicker" data-live-search="true">
                                                                        <?php
                                                                        if (!empty($situation_matrimoniale)) {
                                                                            ?>
                                                                            <option value="<?php echo $situation_matrimoniale; ?>"><?php echo $situation_matrimoniale; ?></option>
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
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Nombre d'enfants</label> 
                                                                    <input name="sai_nombre_enfant" type="number" class="form-control"  value="<?php echo $nombre_enfant; ?>"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <div class="form-group">
                                                            <label>Nom et prenoms</label> 
                                                            <input name="sai_nom_prenom" type="text" class="form-control"  value="<?php echo $nom_prenom; ?>"> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ville</label> 
                                                                    <input name="sai_ville" type="text" class="form-control"  value="<?php echo $ville; ?>"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Quartier</label> 
                                                                    <input name="sai_quartier" type="text" class="form-control"  value="<?php echo $quartier; ?>"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Telephone</label> 
                                                            <input name="sai_telephone" type="text" class="form-control" value="<?php echo $telephone; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label> 
                                                            <input name="sai_email" type="email" class="form-control" value="<?php echo $email; ?>"> 
                                                        </div>                                                                                               
                                                        <div class="form-group">
                                                            <label>Photo</label> 
                                                            <input name="sai_photo" type="file" class="form-control"> 
                                                        </div>
                                                    </div>                                                 
                                                </div>


                                                <div class="d-none d-md-block">
                                                    <hr>
                                                    <div class="d-flex mb-3"><button type="button" class="btn btn-success ml-auto" data-form-step="#personal">Informations Cursus &nbsp; <i class="icon-arrow-right font-sm"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--info cursus-->
                                        <div id="personal" class="tab-pane">

                                            <div class="mb-3"><a href="#personal-collapse" data-toggle="collapse">

                                                    <span class="font-lg">2.</span> Informations Cursus <small class="d-block text-secondary">Toutes les informations sur la filière et les conditions de stage</small></a>
                                            </div>

                                            <div id="personal-collapse" class="collapse" data-parent="#formOrder">

                                                <div class="text-secondary mb-3"><small>Étape 2 sur 4</small>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Cycle</label> <br />
                                                            <select name="sai_cycle" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                if (!empty($cycle)) {
                                                                    ?>
                                                                    <option value="<?php echo $cycle; ?>"><?php echo $cycle; ?></option>
                                                                    <?php }
                                                                ?>
                                                                <option value="BTS">BTS</option>
                                                                <option value="INGÉNIEUR">INGÉNIEUR</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Filière</label> <br />
                                                            <select name="sai_filiere" class="selectpicker form-control" data-live-search="true">
                                                                <?php
                                                                if (!empty($filiere)) {
                                                                    ?>
                                                                    <option value="<?php echo $filiere; ?>"><?php echo $filiere; ?></option>
                                                                    <?php }
                                                                ?>
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
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Date de debut du stage</label> 
                                                            <input name="sai_date_debut_stage" type="date" class="form-control" value="<?php echo $date_debut_stage; ?>"> 
                                                            <input name="sai_date_enreg" type="hidden" class="form-control" value="<?php echo date('d-m-Y'); ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date de fin du stage</label> 
                                                            <input name="sai_date_fin_stage"  type="date" class="form-control" value="<?php echo $date_fin_stage; ?>"> 
                                                        </div>
                                                    </div>                                            

                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Type de Stage</label> <br />
                                                            <select name="type" class="selectpicker form-control" data-live-search="true">
                                                                <option value="Stage École">Stage École</option>
                                                                <option value="Stage École">Stage Professionnel</option>                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6"><div class="form-group">
                                                            <label>Durée de stage</label> 
                                                            <input name="sai_duree_stage" type="text" class="form-control" value="<?php echo $duree_stage; ?>"> 
                                                        </div></div>

                                                </div>
                                                <div class="d-none d-md-block">
                                                    <hr>
                                                    <div class="d-flex mb-3"><button type="button" class="btn btn-outline-success" data-form-step="#account"><i class="icon-arrow-left font-sm"></i> &nbsp; Informations personnelles</button> <button type="button" class="btn btn-success ml-auto" data-form-step="#payment">Information sur les Parents &nbsp; <i class="icon-arrow-right font-sm"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!--info parent-->
                                        <div id="payment" class="tab-pane">

                                            <div class="mb-3"><a href="#payment-collapse" data-toggle="collapse">

                                                    <span class="font-lg">3.
                                                    </span> Information sur les Parents <small class="d-block text-secondary">Les informations sur les parents notamment Père et/ou mère</small></a>
                                            </div>

                                            <div id="payment-collapse" class="collapse" data-parent="#formOrder">

                                                <div class="text-secondary mb-3"><small>Étape 3 sur 4</small>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <div class="form-group">
                                                            <label>Nom et prenoms du pere</label> 
                                                            <input name="sai_nom_prenom_pere" type="text" class="form-control" value="<?php echo $nom_prenom_pere; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lieu d'habitation du pere</label> 
                                                            <input name="sai_lieu_habitation_pere"  type="text" class="form-control" value="<?php echo $lieu_habitation_pere; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nationalite du pere</label> 
                                                            <input name="sai_nationalite_pere" type="text" class="form-control" value="<?php echo $nationalite_pere; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Profession</label> 
                                                            <input name="sai_profession_pere" type="text" class="form-control"  value="<?php echo $profession_pere; ?>"> 
                                                        </div>
                                                        <div  class="form-group">
                                                            <label>Nombre d'enfants du pere</label> 
                                                            <input name="sai_nombre_enfant_pere" type="number" class="form-control"  value="<?php echo $nombre_enfant_pere; ?>"> 
                                                        </div>
                                                        <div  class="form-group">
                                                            <label>Telephone du pere</label> 
                                                            <input name="sai_telephone_pere" type="tel" class="form-control"  value="<?php echo $telephone_pere; ?>"> 
                                                        </div>     
                                                    </div>

                                                    <div class="col-md-6 col-md-offset-3">
                                                        <div class="form-group">
                                                            <label>Nom et prenoms de la mere</label> 
                                                            <input name="sai_nom_prenom_mere" type="text" class="form-control" value="<?php echo $nom_prenom_mere; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lieu d'habitation de la mere</label> 
                                                            <input name="sai_lieu_habitation_mere" type="text" class="form-control" value="<?php echo $lieu_habitation_mere; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nationalite de la mere</label> 
                                                            <input name="sai_nationalite_mere" type="text" class="form-control" value="<?php echo $nationalite_mere; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Profession de la mere</label> 
                                                            <input name="sai_profession_mere" type="text" class="form-control"  value="<?php echo $profession_mere; ?>"> 
                                                        </div>
                                                        <div  class="form-group">
                                                            <label>Nombre d'enfants de la mere</label> 
                                                            <input name="sai_nombre_enfant_mere" type="number" class="form-control"  value="<?php echo $nombre_enfant_mere; ?>"> 
                                                        </div>
                                                        <div  class="form-group">
                                                            <label>Telephone de la mere</label> 
                                                            <input name="sai_telephone_mere"  type="tel" class="form-control"  value="<?php echo $telephone_mere; ?>"> 
                                                        </div>

                                                    </div>
                                                </div>




                                                <div class="d-none d-md-block">
                                                    <hr>

                                                    <div class="d-flex mb-3"><button type="button" class="btn btn-outline-success" data-form-step="#personal"><i class="icon-arrow-left font-sm"></i> &nbsp; Information Cursus</button> <button type="button" class="btn btn-success ml-auto" data-form-step="#confirmation">En cas d'urgence &nbsp; <i class="icon-arrow-right font-sm"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!--info urgence-->
                                        <div id="confirmation" class="tab-pane">

                                            <div class="mb-3"><a href="#confirmation-collapse" data-toggle="collapse">

                                                    <span class="font-lg">4.
                                                    </span> Personne à Contacter en cas d'urgence <small class="d-block text-secondary">Les informations concernant la personne à contacter en cas d'urgence à l'instar du père/mère/tuteur légal</small></a>
                                            </div>

                                            <div id="confirmation-collapse" class="collapse" data-parent="#formOrder">

                                                <div class="text-secondary mb-3"><small>Étape 4 sur 4</small>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3">                                                  
                                                        <div class="form-group">
                                                            <label>Nom et prenoms</label> 
                                                            <input name="sai_nom_prenom_urgence" type="text" class="form-control" value="<?php echo $nom_prenom_urgence; ?>"> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-md-offset-3">
                                                                <div class="form-group">
                                                                    <label>Date de naissance</label> 
                                                                    <input name="sai_date_naissance_urgence" type="date" class="form-control"  value="<?php echo $date_naissance_urgence; ?>"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-md-offset-3">
                                                                <div class="form-group">
                                                                    <label>Lieu de naissance</label> 
                                                                    <input name="sai_lieu_naissance_urgence" type="text" class="form-control"  value="<?php echo $lieu_naissance_urgence; ?>"> 
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Lieu d'habitation</label> 
                                                            <input name="sai_lieu_habitation_urgence"type="text" class="form-control" value="<?php echo $lieu_habitation_urgence; ?>"> 
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 col-md-offset-3">                                                  

                                                        <div class="form-group">
                                                            <label>Nationalite</label> 
                                                            <input name="sai_nationalite_urgence"type="text" class="form-control" value="<?php echo $nationalite_urgence; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Profession</label> 
                                                            <input name="sai_profession_urgence" type="text" class="form-control"  value="<?php echo $profession_urgence; ?>"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Telephone</label> 
                                                            <input name="sai_telephone_urgence" type="text" class="form-control"  value="<?php echo $telephone_urgence; ?>"> 
                                                        </div>
                                                    </div>
                                                </div>


                                                <hr>

                                                <div class="d-block d-md-flex"><button type="button" class="btn btn-outline-success d-none d-md-inline mb-3" data-form-step="#payment"><i class="icon-arrow-left font-sm"></i> &nbsp; Informations sur les parents</button>

                                                    <div class="d-block d-md-inline ml-auto mb-3"><button type="submit" class="btn btn-info btn-block" name="btn_ajouter">Enregistrer le stagiaire</button>
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