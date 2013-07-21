<?php

/*
 *  web.com/?c=usuarios&a=listar
 *
 * c: nombre del controlador
 * a: la accion  del controlador que se va a lanzar
 *  
 * 
 */

$c=$_GET['c']; //es una clase
$a=$_GET['a']; // es un metodo 

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








        