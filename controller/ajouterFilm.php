<html>
    <body>
    <?php

        $film = $_POST["titre"].":".$_POST["annee"].":".$_POST["realisateur"];
        $films = fopen("../data/vod.csv", "a");
        fwrite($films, "\n".$film);
        fclose($films);

        echo "Le film a été ajouté avec succés ".$_POST["titre"].":".$_POST["annee"].":".$_POST["realisateur"];

    ?> 
    </body>
</html>
