<?php
/**
 * Created by PhpStorm.
 * User: gmanriqe
 * Date: 21/02/2017
 * Time: 16:58
 */
    Class Persona {
        protected $dni;
        public $nombre;
        public $sexo;
        public $fecha_nac;
        public function __construct($dni,$nombre,$sexo,$fecha_nac)
        {
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->sexo=$sexo;
            $this->fecha_nac=$fecha_nac;
        }
    }//fin de la clase Persona

    Class Empleado extends Persona{
        public $cargo;
        public $sueldo;
        public $fecha_ing;

        public function __construct($dni,$nombre,$sexo,$fecha_nac,$cargo,$sueldo,$fecha_ing)
        {
            parent::__construct($dni,$nombre,$sexo,$fecha_nac);
            $this->cargo = $cargo;
            $this->sueldo = $sueldo;
            $this->fecha_ing = $fecha_ing;
        }
        //solucion a la propiedad protected
        public function getDni(){
            return $this->dni;
        }


    }//fin de la clase Empleado

    $empleado = new Empleado('72558965','Mathieu Gonzales','M','2012-02-22','Jefe de Area',1500,'2017-02-21');

      echo '<br/>';

    echo $empleado->getDni().'<br/>';
    echo $empleado->nombre.'<br/>';
    echo $empleado->sexo.'<br/>';
    echo $empleado->fecha_nac.'<br/>';
    echo $empleado->cargo.'<br/>';
    echo $empleado->sueldo.'<br/>';
    echo $empleado->fecha_ing.'<br/>';

