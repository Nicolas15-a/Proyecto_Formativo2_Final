<?php

    class Empresa
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


        public function listar()
        {
            $sql = "SELECT * FROM empresa";
            $resultado = $this->db->query($sql);

            
            if(!$resultado)
            {
                echo "la pagina esta experimentando problemas. Intente mas tarde";
                echo "Error: No se pudo conectar a MySQL.". PHP_EOL;
                echo "consulta. $sql" . PHP_EQL;
                echo "erno de depuracion:" . mysqli_connect-erno(). PHP_EOL;
                echo "error de depuracion:" . mysqli_connect-error(). PHP_EOL;
                exit;
            }

            while ($row = $resultado->fetch_assoc()) {
                $this->proyectos[] = $row;
            }
            return $this->proyectos;

        }

        public function delete($numeroIdentificacion)
        {
            $sql =  "DELETE FROM candidato  WHERE numeroIdentificacion = $numeroIdentificacion";    
           $resultado = $this->db->query($sql);
 
        }
        
    }

?>