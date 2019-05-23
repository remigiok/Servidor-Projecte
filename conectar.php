<?php
    
     
     $db_table_info="informacio";//Informació dades usuaaris
     $db_table_rutes="Rutes";

    
    function conex()
    {
        $db_host="remotemysql.com"; //Nom del host que utilitzem
        $db_user="Co25Xy3PMx"; //Nom usauri
        $db_password="qN05kWp0Gc"; //Contrasenya usuari
        $db_name="Co25Xy3PMx"; //Nom de la BBDD
     
        $conex = new mysqli($db_host,$db_user,$db_password,$db_name);
        return $conex;
    }

    function veurerutes($con)
    {
        
        $sql= "SELECT * FROM Rutes";
        $res = mysqli_query($con,$sql);
        return $res;
    }
    function insertaruta($con,$data)
    {
        $sql = "INSERT INTO Rutes (`nom`, `graduacio`) values ('".$data[0]."', '".$data[1]."')";
        $res = mysqli_query($con,$sql);
        if ($res) {
            return true;
        }
        return false;
    }
    function insertaregistre($con,$data)
    { //md5(password);
        $sql = "INSERT INTO informacio (`usuari`, `password`, `correu`) values ('".$data[0]."', '".md5($data[1])."', '".$data[2]."')";
        $res = mysqli_query($con,$sql);
        if ($res) {
            return true;
        }
        return false;
    }
?>