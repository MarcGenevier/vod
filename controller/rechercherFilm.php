<html>
  <body>
  <?php
  
    $path = "../data/vod.csv" ;
    $films = file($path);
    $trouve = false;
	
    foreach($films as $n => $film){
      list($titre, $annee, $realisateur) = explode(":", $film);

      if(trim($titre) == trim($_POST["titre"])){
        echo "Voici les informations pour le film ".$titre."\n Année : ".$annee." Réalisateur : ".$realisateur;
        trouve = true;
        break;
      }
      trouve = false;
    }

    if(!$trouve){
        echo "La recherche pour le film ".$_POST["titre"]." n'a pas aboutie";
    }

  ?>
  </body>
</html>