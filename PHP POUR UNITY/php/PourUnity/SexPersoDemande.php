<?php

    //fonction qui permet de recupe les info en base de donné 
    require("function.php");

    $persoDemande = GetInfoPersoDemande();
    echo $persoDemande[0]->sex;

?>