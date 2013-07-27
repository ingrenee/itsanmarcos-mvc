<?php

class UsuariosModel extends Coneccion
{
    function listar($email=false)
    {
        if($email):
            $this->query='select * from user where email="'.$email.'"';
            else:
            $this->query='select * from user';    
        endif;
        
        
        $this->ejecutar_query_multiple();
        
        return $this->rows;
    }
    
    
}