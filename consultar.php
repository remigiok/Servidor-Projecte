<?php
    include("conectar.php");

    $consulta = mysqli_query($con, "SELECT * FROM informacio WHERE 'usuari'=$usuari");
    if (mysqli_num_rows($consulta) > 0)
    {
        alert "El nom d'usuari ja existeix."
    } 
    
?>