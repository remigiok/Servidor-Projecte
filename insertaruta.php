<?php
    $nom = $_POST["nom"];
    $graduacio = $_POST["graduacio"];

    include("conectar.php");

    $db = conex();
    $data = new Array($nom, $graduacio);

    if (insertaruta($db, $data)) {
       echo "Guardat";
    }
    else {
        echo "Error";
    }