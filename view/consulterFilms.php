<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../style/vod.css" />
  </head>
  <body>
      <table>
          <thead>
              <tr>
                  <td>Titre</td>
                  <td>Année</td>
                  <td>Réalisateur</td>
              </tr>
          </thead>
          <tbody>
            <?php
            $path = "../data/vod.csv" ;
            $films = file($path);
            
            foreach($films as $n => $film){
                list($titre, $annee, $realisateur) = explode(":", $film);
            ?>
                <tr>
                    <td><?php echo $titre ?></td>
                    <td><?php echo $annee ?></td>
                    <td><?php echo $realisateur ?></td>
                </tr>
            <?php
            }
            ?>
          </tbody>
      </table>
  </body>
</html>
