<?php
    include("conectar.php");

    $db = conex();
    $res = veurerutes($db);
    $taula = "";

    while ($linia = mysqli_fetch_assoc($res)) {
        $taula .= "<tr> ";
        $taula .= "<td>".$linia['id']."</td>";
        $taula .= "<td>".$linia['nom']."</td>";
        $taula .= "<td>".$linia['graduacio']."</td>";
        $taula .= "</tr>";
    }
    echo $taula;

    