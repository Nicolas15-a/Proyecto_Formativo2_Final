<?php

//Incluir los archivos
require_once "config/config.php";
require_once "core/rutas.php";
require_once "config/database.php";
require_once "controllers/CandidatoController.php";
require_once "controllers/LoginController.php";


// $controlador = new ProyectoController();
// $controlador->index();

if(isset($_GET['control']))
{
    $controlador = cargarControlador($_GET['control']);
    if(isset($_GET['accion']))
    {
        if(isset($_GET['numeroIdentificacion']))
        {
            cargarAccion($controlador, $_GET['accion'], $_GET['numeroIdentificacion']);
        }
        else
        {
            cargarAccion($controlador, $_GET['accion']);
        }
    }
    else
    {
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
}

else {
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    cargarAccion($controlador, ACCION_PRINCIPAL);
}
?>








