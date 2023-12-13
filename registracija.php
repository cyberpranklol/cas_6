<?php

    $imeProsledjeno = isset ($_POST["ime"]);
    if($imeProsledjeno == false){
        die("Ime nije prosledjeno");
    }

    $lozinkaProsledjena = isset($_POST["lozinka"]);
    if($lozinkaProsledjena == false){
        die("Niste prosledili lozinku");
    }

    $ime = trim($_POST["ime"]);
    if($ime == ""){
        die("morate uneti ime");
    }

    $lozinka = trim($_POST["lozinka"]);
    if($lozinka == ""){
        die("morate uneti lozinku");
    }

    echo $_POST["ime"]." ".$_POST["lozinka"];
