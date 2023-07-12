<?php

    $database= new mysqli("sql101.epizy.com","epiz_31816042","1mKzYGFyXb7qa","epiz_31816042_covid");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>