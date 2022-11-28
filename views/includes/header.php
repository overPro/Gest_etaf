<div class="navbar-brand">ETAF &middot; <a href="https://www.mandigo-sarl.com" class="text-dark decoration-none" data-toggle="tooltip" data-placement="right" title="L'essence de la vie"><i class="icon-briefcase"></i></a>
</div>
<ul class="navbar-nav ml-auto">
    <div class="btn btn-block btn-outline-info"><?php echo $_SESSION['role']; ?></div>
</ul>
</nav>
<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="width: 100%">
        <marquee behavior="alternate">Soyez la bienvenue <?php echo $_SESSION['user']; ?> !&nbsp;&nbsp;&nbsp;Vous êtes connecté(e) en tant que <?php echo $_SESSION['role']; ?></marquee>
        </li>
    </ul>
</nav>