<?php
  $firstname = 'kevin';  // Type string (chaine de caractères)
  $lastname = "lanel";    // Type string (chaine de caractères)
  $age = 27;    // Type entier
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>exo 2 part 1 php</title>
</head>
<body>
    //Double quote
  <div>
  <?php
   echo "Mon nom : $lastname.";
   ?>
  </div>
  <div>
  <?php
   echo "Mon prénom : $firstname.";
   ?>
  </div>
  <div>
  <?php
   echo "j'ai : $age ans";
   ?>
  </div>
  //simple quote
  <div>
  <?php
   echo 'Mon nom : '.$lastname;
   ?>
  </div>
  <div>
  <?php
   echo 'Mon prénom : '.$firstname;
   ?>
  </div>
  <div>
  <?php
   echo 'j\'ai : ' .$age. 'ans';
   ?>
  </div>
  
</body>
</html>
