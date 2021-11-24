<?php 

    require "config/database.php";

    $identificacion = $_POST['identificacion'];
    $rol = $_POST['cargo'];
    $contrasenia = $_POST['contrasenia'];

    $sql = "SELECT * FROM identificacion = '$identificacion' and contrasenia = $contrasenia ";
    $resultado = $this->db->query($sql);
    $fila = mysqli_fetch_array($resultado);

    if($fila['idCargo'] == 1)
    {
        header("location: views/candidato/index.php");
    }else
    if($fila['idCargo'] == 2)
    {
        header("location: views/login/registro.php");
    }
    else{
        ?>
        <?php
        include( "index.php");
        ?>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($resultado);