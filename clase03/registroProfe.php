<?php

class Registro {
    private $_nombre;
    private $_clave;
    private $_mail;
    private $_id;
    private $_fecha;


    public function __construct($nombre, $clave, $mail, $id=0, $fecha=null)
    {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_mail = $mail;

        if ($id == 0) {
            $id = rand(1,1000);
        }

        if ($fecha == null) {
            $f = new DateTime();
            $fecha = $f->format("d-m-y");
        }

        $this->_id = $id;
        $this->_fecha = $fecha;
    }


    public static function agregarAJSON(Registro $usuarioNuevo){

        $archivo = fopen("usuario.json","a");
        fputs($archivo, json_encode(Registro::casteoGenerico($usuarioNuevo)));
        fclose($archivo);
    }

    public static function leerJSON(){

        $archivo = fopen("usuario.json","r");
        $lectura = fread($archivo, filesize("usuario.json"));
        $decodificado = json_decode($lectura);
        Registro::casteo($decodificado);
        fclose($archivo);
    }

    public static function casteo($obj){
       
        $usuario = new Registro($obj["_nombre"], $obj["_clave"], $obj["_mail"]);
        return $usuario;
    }

    public static function casteoGenerico(Registro $usuario){
        $objetoGenerico = new stdClass(); //creo un objeto generico donde guardo lo que quiero.
        $objetoGenerico->nombre = $usuario->_nombre;
        $objetoGenerico->clave =  $usuario->_clave;
        $objetoGenerico->mail =  $usuario->_mail;
        $objetoGenerico->id =  $usuario->_id;
        $objetoGenerico->fecha =  $usuario->_fecha;
        return $objetoGenerico;
        
    }


}