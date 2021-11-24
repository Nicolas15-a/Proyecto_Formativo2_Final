<?php

    class CandidatoController
    {
        public function __construct()
        {
            require_once "models/Candidato.php";
           
        }
        

        public function index()
        {
            $numeroIdentificacion = $_POST['identificacion'];

            $registro = new Candidato();
            $data["registros"] = $registro->listar($numeroIdentificacion);
            require_once "views/candidato/index.php";
        }

      
        
        public function editar($numeroIdentificacion)
        {
            $registro = new Candidato();

            $data['numeroIdentificacion'] = $numeroIdentificacion;
            $data['registros'] = $registro->getCandidato($numeroIdentificacion);

            require_once "views/candidato/editar.php"; 
        }

    
        public function update()
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


            $candidato = new Candidato();
            $candidato->update( $numeroIdentificacion, $nombre, $direccion, $telefono, $cantidadHijos, $genero, $estadoCivil, $cantidadMascotas, $nivelEscolaridad);
            $this->index();
        }
      
        public function edit()
        {
            require_once "views/candidato/cambiarContra.php"; 
        }
      
        public function updateContrasenia()
        {
            $numeroIdentificacion = $_POST['identificacion'];
            $contrasenia = $_POST['contrasenia'];

            $candidato = new Candidato();
            $candidato->cambiarContrasenia( $numeroIdentificacion, $contrasenia);
            $this->index();
        }
      
        public function deleteUser($numeroIdentificacion)
        {
            $candidato = new Candidato();
            $candidato->delete( $numeroIdentificacion);
            require_once "views/login/login.php";
        }
        
    }

?>