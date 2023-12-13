<?php

    $pin = strlen($_POST["pin"]);

    if($pin < 4 || $pin > 6){
        die("morate uneti minimum 4 a maximum 6 karaktera");
    }

    echo "uspesno ste uneli pin";