<?php

    class Usuario
    {
        private $numeroIdentificacion;
        private $nombre;
        private $direccion; 
        private $telefono;
        private $cantidadHijos;
        private $genero; 
        private $estadoCivil; 
        private $cantidadMascotas; 
        private $nivelEscolaridad;
        private $usuarios;
        public function __construct()
        {
            $this->db = Conexion::conectar();
            $this->usuarios = array();
        }


        public function insert($numeroIdentificacion, $nombre, $direccion, $telefono, $cantidadHijos, $genero, $estadoCivil, $cantidadMascotas, $nivelEscolaridad)
        {
            $sql="INSERT INTO candidato(numeroIdentificacion, nombre, direccion, telefono, cantidadHijos, genero, estadoCivil, cantidadMascotas, nivelEscolaridad)
              VALUES($numeroIdentificacion, '$nombre', '$direccion', '$telefono', $cantidadHijos, '$genero', '$estadoCivil', $cantidadMascotas, '$nivelEscolaridad')";
        
            $this->db->query($sql); 
        }

        public function delete($numeroIdentificacion)
        {
            $sql =  "DELETE FROM candidato  WHERE numeroIdentificacion = $numeroIdentificacion";    
           $resultado = $this->db->query($sql);
 
        }
        
    }

?>