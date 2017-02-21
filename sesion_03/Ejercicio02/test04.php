<?php
/**
 * Created by PhpStorm.
 * User: gmanriqe
 * Date: 21/02/2017
 * Time: 0:09
 */
    session_start();
    if( isset($_SESSION['usuario'])){
        echo 'El valor de la variable usuario es: '.$_SESSION['usuario'];
        //con unset eliminamos cualquier tipo de variable
        unset($_SESSION['usuario']);
    } else{
        echo 'La variable no existe';
    }