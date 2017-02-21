<?php
/**
 * Created by PhpStorm.
 * User: gmanriqe
 * Date: 21/02/2017
 * Time: 0:00
 */
    if( isset($_COOKIE['micookie'])){
        echo 'La cookie existe'. $_COOKIE['micookie'];
    }else {
        echo 'La cookie ya no existe';
    }