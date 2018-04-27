<?php

  //require_once("Conexion.php");



     function conexion(){

try {


$conectar = new PDO("mysql:local=localhost;dbname=excepciones","root","");

         return $conectar;
} catch (Exception $e) {

  print "¡Error!: " . $e->getMessage() . "<br/>";
            die();

}


  }

class Excepcion{

  function AgregarExcepcion($excepcion){

    

  }

  function verExcep(){

  	$conectar = conexion();
  	$sql = "select * from Tipo_excepciones";

  	     $sql=$conectar->prepare($sql);

           $sql->execute();
           $result = array();

             while($row = $sql->fetch(PDO::FETCH_ASSOC)) {


            $result['id_tipo_exc'] = $row['id_tipo_exc'];
            $result['descripcion_exc'] = $row['descripcion_exc'];
          

  }

  return Array('id_tipo_exc' => $result['id_tipo_exc'],
               'descripcion_exc' => $result['descripcion_exc']);

}

}




