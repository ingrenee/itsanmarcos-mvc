<?php


class UsuariosController
{
    
    function index()
    {
        /*  listar los usuarios */
        
        /*  contectar a la base de datos = modelo */
        $modelo= new UsuariosModel();
        $filas=$modelo->listar();
        
        
             
        /* enviar la informacion la vista = vista*/
        
        include('views/usuarios/listar.php');
        
    }
    
    function listar()
    {
        $this->index();
    }
    
    
}