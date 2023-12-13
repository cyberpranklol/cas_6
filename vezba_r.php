<?php

    $pin = isset($_POST["pin"]);

    if($pin == false){
        die("niste uneli ime");
    }

    $duzina_pina = strlen($_POST["pin"]);
    
    if($duzina_pina < 4){
        die("Pin mora da ima 4 karatkera");
    }

    echo "Uspesno ste uneli pin";