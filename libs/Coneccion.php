<?php

 class Coneccion
 {
      var $host='localhost';
      var $clave='';
      var $db='ingrenee_main';
      var $user='root';
      
      var $query;
      var $con;
      var $rows=array();
      
      
      function  conectar()
      {
          $this->con= mysqli_connect($this->host, $this->user, $this->ps, $this->db);
      }
      
      function desconectar()
      {          
          $this->con->close();
      
      }
      
      function ejecutar_query_simple()
      {
          
          $this->conectar();
          $temp=$this->con->query($this->query);
          $this->desconectar();
          return $temp;
      }
      
      function  ejecutar_query_multiple()
      {
          
          $this->conectar();
          $result=$this->con->query($this->query);
          
          while ($this->rows[] = $result->fetch_assoc());
          
          $result->close();
          $this->desconectar();
          
                   
      }
      
      
      
      
 }