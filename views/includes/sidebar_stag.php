<div class="app-sidebar">
    <div class="text-right">
        <button type="button" class="btn btn-sidebar" data-dismiss="sidebar">
            <span class="x">
            </span>
        </button>
    </div>
    <div class="sidebar-header">
        <?php
        if (!empty($_SESSION['photo'])) {
            ?>
            <img src="http://localhost:81/Gest_etaf/Fichiers/Gest_etaf/<?php echo $_SESSION['photo'];?>" class="user-photo">
            <?php
        } else {
            ?>
            <img src="http://localhost:81/Gest_etaf/images/default.jpg" class="user-photo">

            <?php
        }
        ?>
        
        <p class="username"><?php echo $_SESSION['user']; ?>
            <br><small><?php echo $_SESSION['email']; ?></small></p>
    </div>
    <ul id="sidebar-nav" class="sidebar-nav">
        <li class="sidebar-nav-btn"><a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/index" class="btn btn-block btn-outline-light">Accueil</a></li>
        <li class="sidebar-nav-link" style="margin-left: -10%;padding-bottom:0%; padding-top: 0%">
            <a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/profil" class="sidebar-nav-link"><i class="icon-settings"></i>Mon Profil</a>
        </li>
        <li class="sidebar-nav-link" style="margin-left: -10%;padding-bottom:0%; padding-top: 0%">
            <a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/theme" class="sidebar-nav-link"><i class="icon-check"></i>Choix du Thème</a>
        </li>
        <li class="sidebar-nav-link" style="margin-left: -10%;padding-bottom:0%; padding-top: 0%">
            <a href="http://localhost:81/Gest_etaf/compte/dossiers/Gest_etaf/dossier" class="sidebar-nav-link"><i class="icon-folder"></i>Mes Dossiers</a>
        </li>
        <li class="sidebar-nav-link" style="margin-left: -10%;padding-bottom:0%; padding-top: 0%">
            <a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/liste" class="sidebar-nav-link"><i class="icon-list"></i>Liste des Gest_etaf</a>
        </li>
        
    </ul>

    <div class="sidebar-footer">
        <a href="" data-toggle="tooltip" title="Support"><i class="icon-bubbles"></i> </a>
        <a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/profil" data-toggle="tooltip" title="My Profile"><i class="icon-settings"></i> </a>
        <a href="http://localhost:81/Gest_etaf/compte/stagiaire/local/deconnexion" data-toggle="tooltip" title="Déconnexion"><i class="icon-logout"></i></a>
    </div>
</div>