<html>
  <body>
  <?php
  
    $path = "../data/vod.csv" ;
    $films = file($path);
	
    foreach($films as $n => $film){
      list($titre, $annee, $realisateur) = explode(":", $film);

      if(trim($titre) == trim($_POST["titre"])){
	$filmsContent = file_get_contents($path);
        $filmsContent = str_replace($film, "", $filmsContent);
        file_put_contents($path, $filmsContent);

	echo "Le film ".$titre." a été supprimé avec succès";
        break;
      }
    }

  ?>
  </body>
</html>
