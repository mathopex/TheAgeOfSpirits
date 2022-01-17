<?php
    //fonction qui permet de recupe les info en base de donné 
      //etape 1: on recupère toujour la dernière url envoyé en db
      require("function.php");

      $persoDemande = GetInfoPersoDemande();
      echo $persoDemande[0]->pseudo;
?>