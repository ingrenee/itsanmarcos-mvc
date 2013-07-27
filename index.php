<?php

function __autoload($nombre)
{
    if(strstr($nombre,'Model')):
    require_once 'models/'.$nombre.'.php';
    endif;
}
include('libs/Coneccion.php');

$c=isset($_GET['c'])?$_GET['c']:'Usuarios'; //es una clase
$a=isset($_GET['a'])?$_GET['a']:'index'; // es un metodo 

$pathControllers='controllers/'; // ruta donde se encontraran los controladores de mi aplicacion
$controlador=  ucfirst($c).'Controller';
$fileController=$pathControllers.$controlador.'.php';

if(file_exists($fileController)):
        include($fileController);
    /* si exite el archivo(controlador)*/
        $obj= new $controlador(); /* instanceando  la clase*/
        
        if(method_exists($obj, $a)):
            /* si existe el metodo en la clase del controlador*/
            $obj->$a();
            else:
            echo ' La accion no existe.';
        endif;

    
    else:
    /* no existe el controlador*/
    echo 'No existe el controlador';
endif;








        