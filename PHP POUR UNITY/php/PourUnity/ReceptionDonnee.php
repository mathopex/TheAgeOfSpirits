<?php

  $pdo = new PDO('mysql:host=localhost;dbname=theageofspirits;charset=utf8', 'root', '',);
  
  $pseudo ='';
  if(isset($_POST['pseudo']))
  {
    $pseudo = $_POST['pseudo'];

    var_dump($pseudo);
  }
  var_dump($pseudo);

?>