<?php



    require_once "models/User.php";




    require_once "models/Product.php";


    $noviProizvod = new Product("banane","prva klasa",233,22);

    echo $noviProizvod->ime;
    echo $noviProizvod->cena;



    $prozivodBnanae = new Product ("banane","prva klasa",44,11);

    $noviProizvod->save();

