<?php

class Usuario{
    private $nombre;
    private $clave;
    private $mail;



    public function __construct($nombre, $clave, $mail)
    {
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->mail = $mail;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function getClave(){
        return $this->clave;
    }


    public function getMail(){
        return $this->mail;
    }

    public function toArray(){
        return [$this->nombre, $this->clave, $this->mail];
    }

    





}

