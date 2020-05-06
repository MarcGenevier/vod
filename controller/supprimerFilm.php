<html>
  <body>
  <?php
  
    $path = "../data/vod.csv" ;
    $films = file($path);

    foreach($films as $n => $film){
      list($titre, $annee, $realisateur) = explode(":", $film);
      
      if($titre == $_POST["titre"]){
        $films = str_replace($film."/n", "", $films);
        file_put_contents($path, $films);
        break;
      }
    }

  ?>
  Le film a été supprimer avec succés 
  </body>
</html>