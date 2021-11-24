<?php

function cargarControlador($controlador)
{
   $nombreControlador = ucwords($controlador) . "Controller";
   $archivoControlador ="controllers/$nombreControlador.php";

   if(!is_file($archivoControlador))
   {
      $archivoControlador = "controllers/". CONTROLADOR_PRINCIPAL . ".php";//Controlador Principal
   }
   require_once $archivoControlador;

   $controlador = new $nombreControlador();

   return $controlador;
}

function cargarAccion($controlador,$accion, $numeroIdentificacion = null)
{
   if (isset($accion) && method_exists($controlador,$accion))
   {
      if($numeroIdentificacion == null)
      {
         $controlador->$accion();
      }
      else {
         $controlador->$accion($numeroIdentificacion);
      }
   }
   else{
      $controlador->ACCION_PRINCIPAL();
   }

}


?>