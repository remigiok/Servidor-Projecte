<?php
    $usuari= ($_POST['usuari']);
    //$subs_last = ($_POST['apellido']);
    $correu = ($_POST['correu']);
    $password = ($_POST['password']);
    $password2 = ($_POST['password2']);

    include("conectar.php");

    $db = conex();
    //$data = new Array($usuari, $password, $correu);
    $data = new array($usuari, $password, $correu);

    if (insertaregistre($db, $data)) {
       echo "Guardat";
    }
    else {
        echo "Error";
    }
?>