<?php

    class LoginController
    {
        public function __construct()
        {
            require_once "models/Usuario.php";
            require_once "models/Candidato.php";
        }

        public function registro()
        {
            require_once "views/login/registro.php"; 
        }

        public function ingreso()
        {
            require_once "views/login/login.php";
        }

        public function registarCandidato()
        {
            $numeroIdentificacion = $_POST['identificacion'];
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $cantidadHijos = $_POST['hijos'];
            $genero = $_POST['genero'];
            $estadoCivil = $_POST['estadoCivil'];
            $cantidadMascotas = $_POST['mascotas'];
            $nivelEscolaridad = $_POST['escolaridad'];
            $contrasenia = $_POST['contrasenia'];

            $usuarios = new Candidato();
            $usuarios->insert( $numeroIdentificacion, $nombre, $direccion, $telefono, $cantidadHijos, $genero, $estadoCivil, $cantidadMascotas, $nivelEscolaridad, $contrasenia);
            $this->ingreso();
        }

        public function delete($numeroIdentificacion)
        {
            $candidato = new Usuario();
            $candidato->delete($numeroIdentificacion);
            $this->ingreso(); 
        }

    }

?>