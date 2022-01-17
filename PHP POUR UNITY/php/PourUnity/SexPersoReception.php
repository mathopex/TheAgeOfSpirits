<?php
    require("function.php");

    
    $row = GetInfoPersoReception();
    echo $row[0]->sex;

?>