<?php
/*
Salcedo Tomas
Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
$miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
los métodos.
*/

class Garage{

    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = array();

    public function __construct($razonSocial, $precioPorHora = 0)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
    }


    public function MostrarGarage(){
        echo "Razon social: " . $this->_razonSocial . "<br>";
        echo "Precio por hora: " . $this->_precioPorHora . "<br>";

        echo "Hay: " . count($this->_autos) . " autos en el garage. <br>";
        foreach ($this->_autos as $auto) {
            Auto::MostrarAuto($auto);
        }
    }

    public function Equals(Auto $auto){
        return in_array($auto,$this->_autos);  //Devuelve true si el auto esta en el garage
    }

    public function Add($auto){
        if (!$this->Equals($auto)) { //Si el auto no esta en el garage
            array_push($this->_autos, $auto); //agrego el auto al garage
            echo "El auto se agrego correctamente al garage <br>";
        }
        else{
            echo "El auto ya esta en el garage <br>";
        }
    }

    public function Remove(Auto $auto){
        $indice = array_search($auto, $this->_autos);  //obtengo el indice del auto a borrar

        if ($indice !== false ) {
            unset($this->_autos[$indice]); //Borro el auto del garage
            echo "Se quito el auto del garage <br>";
        }
        else{
            echo "El auto no se encuentra en el garage <br>";
        }
    }

}
