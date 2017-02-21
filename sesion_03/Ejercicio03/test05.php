<?php
/**
 * Created by PhpStorm.
 * User: gmanriqe
 * Date: 21/02/2017
 * Time: 15:19
 */
    Class Persona {
        public $dni;
        public $nombre;
        public $sexo;
        public $fecha_nac;

        public function __construct($dni,$nombre,$sexo,$fecha_nac)
        {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->sexo = $sexo;
            $this->fecha_nac = $fecha_nac;
        }
    }// fin de la clase Persona

    $persona = new Persona('71998055','Jesus Gonzales Manriqe','M','1991-12-24');

    echo $persona->dni.'<br/>';
    echo $persona->nombre.'<br/>';
    echo $persona->sexo.'<br/>';
    echo $persona->fecha_nac.'<br/>';