<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
      <?php
          function presentation($lastname, $firstname, $age) {
            echo 'Bonjour ' . $lastname . ' ' . $firstname . ' tu as ' . $age . ' ans.';
          }

          presentation('FADIKA', 'Mohamed', 30);
       ?>
    </p>
  </body>
</html>
