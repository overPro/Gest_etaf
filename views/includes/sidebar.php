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
            <img src="http://localhost:81/Gest_etaf/images/<?php echo $_SESSION['photo']; ?>" class="user-photo">
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
        <li class="sidebar-nav-btn"><a href="http://localhost:81/Gest_etaf/compte/administrateur/local/index" class="btn btn-block btn-outline-light">Accueil</a></li>
        <li class="sidebar-nav-link" style="margin-left: -10%;padding-bottom:0%; padding-top: 0%">
            <a href="http://localhost:81/Gest_etaf/compte/Administrateur/local/profil" class="sidebar-nav-link"><i class="icon-settings"></i> Profil Administrateur</a>
        </li>
        <li class="sidebar-nav-link" style="margin-left: -10%;padding-bottom:0%; padding-top: 0%">
            <a href="http://localhost:81/Gest_etaf/compte/compte/personnel/enregistrement" class="sidebar-nav-link"><i class="icon-user"></i>Creation de compte</a>
        </li>
        <li class="sidebar-nav-group">
            <a href="#device-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-note"></i> Gestion Contractuels</a>
            <ul id="device-controls" class="collapse" data-parent="#sidebar-nav">
                <li><a href="http://localhost:81/Gest_etaf/compte/contractuel/employe/enregistrement" class="sidebar-nav-link">Enregistrement</a></li>
                 <li><a href="http://localhost:81/Gest_etaf/compte/contractuel/employe/liste" class="sidebar-nav-link">Liste</a></li>
            </ul>
        </li>
        <li class="sidebar-nav-group">
            <a href="#forms" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-pencil"></i> Gestion Production</a>
            <ul id="forms" class="collapse" data-parent="#sidebar-nav">
                <li><a href="http://localhost:81/Gest_etaf/compte/production/activite/enregistrement" class="sidebar-nav-link">Enregistrement</a></li>
                <li><a href="http://localhost:81/Gest_etaf/compte/production/activite/liste" class="sidebar-nav-link">Liste</a></li>
            </ul>
        </li>
        <li class="sidebar-nav-group">
            <a href="#input-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-doc"></i> Gestion Depenses</a>
            <ul id="input-controls" class="collapse" data-parent="#sidebar-nav">
                <li><a href="http://localhost:81/Gest_etaf/compte/depense/debit/enregistrement" class="sidebar-nav-link">Enregistrement</a></li>
                <li><a href="http://localhost:81/Gest_etaf/compte/depense/debit/liste" class="sidebar-nav-link">Liste</a></li>
            </ul>
        </li>
        <li class="sidebar-nav-group">
            <a href="#layout" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-layers"></i> Rapports</a>
            <ul id="layout" class="collapse" data-parent="#sidebar-nav">
                <li><a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/enregistrement" class="sidebar-nav-link">Enregistrement</a></li>
                <li><a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/choix" class="sidebar-nav-link">Choix thème</a></li>
                <li><a href="http://localhost:81/Gest_etaf/compte/theme/stagiaire/liste" class="sidebar-nav-link">Thème - Stagiaire</a></li>
            </ul>
        </li>

    </ul>

    <div class="sidebar-footer">
        <a href="" data-toggle="tooltip" title="Support"><i class="icon-bubbles"></i> </a>
        <a href="http://localhost:81/Gest_etaf/compte/Administrateur/local/profil" data-toggle="tooltip" title="My Profile"><i class="icon-settings"></i> </a>
        <a href="http://localhost:81/Gest_etaf/compte/administrateur/local/deconnexion" data-toggle="tooltip" title="Déconnexion"><i class="icon-logout"></i></a>
    </div>
</div>