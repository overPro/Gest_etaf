<?php

require 'models/post.php';

class stagiaire {

    public function postuler() {

        $perso = new postModel();

        if (isset($_POST['btn_enregistrer'])) {
            $perso->nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
            $perso->prenom = filter_input(INPUT_POST, "prenoms", FILTER_SANITIZE_STRING);
            $perso->datenaiss = filter_input(INPUT_POST, "datenaiss", FILTER_SANITIZE_STRING);
            $perso->lieunaiss = filter_input(INPUT_POST, "lieunaiss", FILTER_SANITIZE_STRING);
            $perso->nationalite = filter_input(INPUT_POST, "nationalite", FILTER_SANITIZE_STRING);
            $perso->matrim = filter_input(INPUT_POST, "situation", FILTER_SANITIZE_STRING);
            $perso->nbre_enf = filter_input(INPUT_POST, "nbre", FILTER_SANITIZE_NUMBER_INT);
            $perso->ville = filter_input(INPUT_POST, "ville", FILTER_SANITIZE_STRING);
            $perso->quartier = filter_input(INPUT_POST, "quartier", FILTER_SANITIZE_STRING);
            $perso->telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_STRING);
            $perso->email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
            $perso->cycle = filter_input(INPUT_POST, "cycle", FILTER_SANITIZE_STRING);
            $perso->filiere = filter_input(INPUT_POST, "fil", FILTER_SANITIZE_STRING);
            $perso->sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

            $rech = $perso->rechercherpost();
            if (!empty($rech)) {
                ?>
                <script >alert("Cette personne a  déjà postulé !")</script>
                <?php

            } else {
                $perso->ajouterpost();
            }
            ?>
            <script >
            document.location.href="http://localhost:81/Gest_etaf/";
            </script>
            <?php

        }
    }

    public function liste() {
        $post = new postModel();
        $posts = $post->liste();
        include 'views/Administrateur/liste_post.php';
    }

}
