<?php

class Libro
{

    private $titulo;
    private $precio;

    public function __construct($titulo, $precio)
    {
        $this->titulo = $titulo;
        $this->precio = $precio;
    }


    /**
     * Guarda en el archivo libros.txt el libro en formato
     * $titulo - $precio
     * Hace un echo dependiendo de si pudo escribir o no
     * Deja un salto de linea al final para que la proxima vez
     * que se escriba se comience desde la proxima linea
     * 
     * @param Libro $libro es el libro a guardar
     * 
     */

    public static function guardarLibro($libro)
    {
        $archivo = fopen("./libros.txt", "a"); //Para agregar informacion lo abro en modo a , de append


        if ($libro->titulo === "" || $libro->precio === "") {
            echo "Error en los datos, vacios";
            return;
        }


        $cadena = $libro->titulo . " - " . $libro->precio . PHP_EOL;
        
        $resultado = fwrite($archivo, $cadena);

        if ($resultado) {
          echo "Escribio correctamente"; 
        } else{
            echo "No pudo escribir";
        }

        fclose($archivo);
    }



    /**
     * Lee todos los libros del archivo libros.txt y los muestra
     */
    public static function leerLibros($archivo)
    {
        $archivo = fopen("./libros.txt", "r");

        $contenido = fread($archivo, filesize("./libros.txt"));

        echo $contenido;

        fclose($archivo);
    }


    /**
     * Busca en el archivo libros.txt la primer coincidencia del libro
     * que coincida con el titulo pasado por parametro y muestra su precio
     * 
     * @param string $titulo es el titulo del libro a buscar
     */

    public static function encontrarPrecio($titulo)
    {
        $archivo = fopen("./libros.txt", "r");

        while (!feof($archivo)) { //mientras no haya llegado al final del archivo
            $linea = fgets($archivo); //El señor de los novillos - 500
            
            //------strpos------
            // $pos = strpos($linea, " - ");
            // $tituloObtenido = substr($linea,0,$pos); //obtengo un string a travez de otro
            


            // $precio = substr($linea,$pos + 3);

            // if ($tituloObtenido === $titulo) {
            //     echo $precio;
            // }
            
            //-------explode--------
            $array = explode(" - ",$linea); //separa el string a partir del indicador  (primer parametro)
            // echo $array[0] . "<br>$" . $array[1] . "<br>";

            if ($titulo === $array[0]) {
                echo "<br>Titulo: " . $array[0] . "<br>Precio: $" . $array[1]; 
                break;
            }     
        }

        fclose($archivo);
    }
    



    public static function copiarArchivo(){

        copy("./libros.txt", "backup/librosBackUp.txt");
        echo "Copiado";

    }

    public static function eliminarArchivo(){
        unlink("backup/librosBackUp.txt");

    }





}
