<?php

class Garage
{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = array();


    public function __construct($razonSocial, $precioPorHora = 0)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
    }


    public function MostrarGarage()
    {
        echo "Razon social: " . $this->_razonSocial . "<br>";
        echo "Precio por hora: " . $this->_precioPorHora . "<br>";

        echo "Hay: " . count($this->_autos) . " autos en el garage. <br>";
        foreach ($this->_autos as $auto) {
            Auto::MostrarAuto($auto);
        }
    }


    public function Equals(Auto $auto)
    {
        return in_array($auto, $this->_autos);
    }

    public function Add(Auto $auto)
    {
        if (!$this->Equals($auto)) {
            array_push($this->_autos, $auto);
        } else {
            echo "El auto ya esta en el garage<br>";
        }
    }



    public function Remove(Auto $auto)
    {
        $indice = array_search($auto, $this->_autos);  //obtengo el indice del auto a borrar

        if ($indice !== false) {
            unset($this->_autos[$indice]); //Borro el auto del garage
            $this->_autos = array_values($this->_autos); //Esta función reindexa numéricamente el array comenzando desde 0 y manteniendo el orden de los valores restantes. 
            echo "Se quito el auto del garage <br>";
        } else {
            echo "El auto no se encuentra en el garage <br>";
        }
    }


    public static function GuardarGarage($garage, $archivo = "./garages.csv"){
        
        if (!$garage instanceof Garage) {
            echo "El objeto no es un garage";
            return;
        }

        $archivoCSV = fopen($archivo, "a");

        fputcsv($archivoCSV, array($garage->_razonSocial, $garage->_precioPorHora));

        fclose($archivoCSV);

    }


    public static function CargarGarages($archivo = "./garages.csv"){
        if (!file_exists($archivo)) {
            echo "El archivo no existe<br>";
            return [];
        }


        $archivoCSV = fopen($archivo, "r");

        $garages = [];

        while (($contenido = fgetcsv($archivoCSV)) !== false) {
            $razonSocial = $contenido[0];
            $precioPorHora = $contenido[1];
            $garage = new Garage($razonSocial, $precioPorHora);
            $garages[] = $garage;
        }

        fclose($archivoCSV);
        return $garages;



    }

}
