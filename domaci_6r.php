<?php

    
    $ime = isset($_POST["ime"]);
        if($ime == false){
            die("Niste uneli ime.");
        }

    $ime = trim(strlen($_POST["ime"]));
        if($ime < 3){
            die("Morate uneti minimum 3 karaktera");
        }

    $ime1 = strtolower($_POST["ime"]);
    
    $korisnici = ["Putin", "Vucic", "Biden"];
        if ($ime1 == strtolower($korisnici[0]) || $ime1 == strtolower($korisnici[1]) || $ime1 == strtolower($korisnici[2])){
            echo "Idiot se nalazi na listi korisnika.";
        }
        else{
            echo "Ime se ne nalazi na listi korisnika";
        }
    
    

    
    