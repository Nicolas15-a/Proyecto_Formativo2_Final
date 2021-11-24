<?php

    class Candidato
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

        private $db;
        private $registro;

        public function __construct()
        {
            $this->registro = array();
            $this->db = Conexion::conectar();
        }

        public function insert($numeroIdentificacion, $nombre, $direccion, $telefono, $cantidadHijos, $genero, $estadoCivil, $cantidadMascotas, $nivelEscolaridad, $contrasenia)
        {
            $sql="INSERT INTO candidato(numeroIdentificacion, nombre, direccion, telefono, cantidadHijos, genero, estadoCivil, cantidadMascotas, nivelEscolaridad, contrasenia)
            VALUES($numeroIdentificacion, '$nombre', '$direccion', '$telefono', $cantidadHijos, '$genero', '$estadoCivil', $cantidadMascotas, '$nivelEscolaridad', $contrasenia)";
      
            try{    
                $this->db->query($sql);
            }
            catch(Exception $e)
            {
                echo "El error es: ".$e->getMessage();
            }
        }

        public function listar($numeroIdentificacion)
        {
            $sql = "SELECT * FROM candidato WHERE numeroIdentificacion = $numeroIdentificacion";
            try{
                
                $resultado = $this->db->query($sql);
    
                
                if(!$resultado)
                {
                    echo "la pagina esta experimentando problemas. Intente mas tarde";
                    exit;
                }
    
                while ($row = $resultado->fetch_assoc()) {
                    $this->registro[] = $row;
                }
                return $this->registro;
            }
            catch(Exception $e)
            {
                echo "El error es: ".$e->getMessage();
            }

        }

        public function update( $numeroIdentificacion, $nombre, $direccion, $telefono, $cantidadHijos, $genero, $estadoCivil, $cantidadMascotas, $nivelEscolaridad)
        {
            $sql = "UPDATE candidato SET numeroIdentificacion = $numeroIdentificacion, nombre = '$nombre', direccion = '$direccion', telefono = '$telefono', cantidadHijos = $cantidadHijos, genero = '$genero', estadoCivil = '$estadoCivil', cantidadMascotas = $cantidadMascotas, nivelEscolaridad = '$nivelEscolaridad' WHERE numeroIdentificacion = $numeroIdentificacion";
            try{
                $resultado = $this->db->query($sql); 
            }
            catch(Exception $e)
            {
                echo "El error es: ".$e->getMessage();
            }
           
        }

        public function delete($numeroIdentificacion)
        {
            $sql =  "DELETE FROM candidato  WHERE numeroIdentificacion = $numeroIdentificacion";
            
            try{
              
                $resultado = $this->db->query($sql);
            }
            catch(Exception $e)
            {
                echo "El error es: ".$e->getMessage();
            }
        }

        
        public function getCandidato($numeroIdentificacion)
        {
            $sql = "SELECT * FROM candidato  WHERE numeroIdentificacion = $numeroIdentificacion";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }

        public function cambiarContrasenia($numeroIdentificacion, $contrasenia)
        {
            $sql = "UPDATE candidato SET contrasenia = $contrasenia WHERE numeroIdentificacion = $numeroIdentificacion";
            $resultado = $this->db->query($sql);
            
        }
    }

?>