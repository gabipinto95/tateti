<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */
//Rodríguez Valentín FAI 3214 TUDW valentindanielrodriguez@gmail.com Valentin227
//Sosa Nicolás FAI 4262 TUDW nicomsosaa@gmail.com Niconqn
//Pinto Gabriel FAI 4325 TUDW gepintoopazo@gmail.com gabipinto95



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
/**
 * Inicializa una estructura de datos
 * @return array
 */

function cargaJuegos() {
    $coleccionJuegos=[];

    $coleccionJuegos[0] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz" => "juan", "jugadorCirculo" => "majo", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[2] = ["jugadorCruz" => "ana", "jugadorCirculo" => "lisa", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[3] = ["jugadorCruz" => "roberto", "jugadorCirculo" => "pepe", "puntosCruz" => 0, "puntosCirculo" => 5];
    $coleccionJuegos[4] = ["jugadorCruz" => "mauro", "jugadorCirculo" => "roberto", "puntosCruz" =>0, "puntosCirculo" => 5];
    $coleccionJuegos[5] = ["jugadorCruz" => "majo", "jugadorCirculo" => "luis", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[6] = ["jugadorCruz" => "felipe", "jugadorCirculo" => "juan", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[7] = ["jugadorCruz" => "ana", "jugadorCirculo" => "majo", "puntosCruz" => 4, "puntosCirculo" => 0];
    $coleccionJuegos[8] = ["jugadorCruz" => "luis", "jugadorCirculo" => "agustin", "puntosCruz" => 0, "puntosCirculo" => 5];
    $coleccionJuegos[9] = ["jugadorCruz" => "juan", "jugadorCirculo" => "messi", "puntosCruz" => 3, "puntosCirculo" => 0];
 
    return $coleccionJuegos;
}



 /** MENU DE OPCIONES
  * Muestra las opciones del menú de TATETI
     * @return int
     */

function seleccionarOpcion(){    
//int $opcionvalida
   


echo " \n ++++++++++++++++ MENU DE OPCIONES ++++++++++++++++ \n";

echo "Opcion 1: JUGAR AL TATETI \n";

echo "Opcion 2: MOSTRAR UN JUEGO \n";

echo "Opcion 3: MOSTRAR EL PRIMER JUEGO GANADOR \n";

echo "Opcion 4: MOSTRAR PORCENTAJE DE JUEGOS GANADOS \n";

echo "Opcion 5: MOSTRAR RESUMEN DE JUGADOR \n";

echo "Opcion 6: MOSTRAR LISTADO DE JUEGOS SIENDO CIRCULO \n";

echo "Opcion 7: SALIR \n";



    echo "Ingrese la opcion deseada: ";


$opcionvalida= SolicitarNumeroEntre(1,7);


return $opcionvalida;
}


            /**
             * Funcion para la opcion numero 2 del MENU
             * Muestra un juego
             * @param array $totalJuegos
             * @param int $nro
             */

            
function mostrarJuego($totalJuegos, $nro) {
//string $resultado
//array $juego

    $juego = cargaJuegos()[$nro - 1];
    if($juego["puntosCruz"] > $juego["puntosCirculo"]) {
        $resultado = "Ganó " . $juego["jugadorCruz"];
    } elseif ($juego["puntosCruz"] < $juego["puntosCirculo"]) {
        $resultado = "Ganó " . $juego["jugadorCirculo"];
    } else {
        $resultado = "Empate.";
    }
    echo " \n ++++++++++++++++++++++++++++ \n";
    echo " Juego Tatetí " . $nro . " (".$resultado.") \n";
    echo "Jugador X: " . $juego["jugadorCruz"] . " obtuvo " . $juego["puntosCruz"] . " puntos." . "\n";
    echo "Jugador O: " . $juego["jugadorCirculo"] . " obtuvo " . $juego["puntosCirculo"] . " puntos." . "\n";
    echo " \n ++++++++++++++++++++++++++++ \n";

   }

   /**
    *Retorna el índice del primer juego ganado por dicho jugador y en caso de no haber uno, retorna -1
    *@param array $coleccionJuegos
    *@param string $nombre
    *@return int
    */
    function obtienePrimerGanador($coleccionJuegos, $nombre) {
        //int $indiceGanador, $i
        //bool $bandera
        //array $juego

        $i = 0;
        $bandera = true;
        $indiceGanador = -1;

        while($i < count($coleccionJuegos) && $bandera) {
            $juego = $coleccionJuegos[$i];

            if($juego["jugadorCruz"] == $nombre) {
                if($juego["puntosCruz"] > $juego["puntosCirculo"]) {
                    $indiceGanador = $i;
                    $bandera = false;
                }

            } elseif($juego["jugadorCirculo"] == $nombre) {
                if($juego["puntosCirculo"] > $juego["puntosCruz"]) {
                    $indiceGanador = $i;
                    $bandera = false;
                }
            }
            $i++;   
        }
        return $indiceGanador;
    }




                            /**************************************/
                            /*********** PROGRAMA PRINCIPAL *******/
                            /**************************************/


      //Declaración de variables:
     // array $iniJuego
    //array $coleccion


//Inicialización de variables:

$coleccion= cargaJuegos();

//Proceso:



do {
    $opcion = seleccionarOpcion();

    
    switch ($opcion) {
        case 1:                        // Jugar al TATETI (se añade un nuevo juego a la coleccion)
            
            
            $iniJuego = jugar();
            
            $coleccionJuegos= agregarjuego($coleccion,$iniJuego);             //Falta funcion para añadir nuevo juego

            $resultados= imprimirResultado($iniJuego);                      

            echo $resultados;

            break;

        case 2: 
            //Muestra los resultados de un numero de juego indicado


            echo "Ingrese el numero de la partida: ";

             $nrojuego= trim(fgets(STDIN));

             $resumenjuego= mostrarJuego($coleccion,$nrojuego);

             echo $resumenjuego;



            break;

        case 3: 
            //         Indicando el nombre de un jugador, muestra el PRIMER juego que ha ganado.

            break;
        
        case 4:
            // Se le solicita al usuario uno de los signos (X o O) y se muestra qué porcentaje de todos los juegos ganados se ganó con el mismo.

            break;

        case 5:
            //  Se SOLICITA el nombre de un jugador y se muestra un resumen de sus partidas.

            break;

        case 6:
                //  Se mostrará en pantalla la estructura ordenada alfabéticamente por jugador  O.



            break;
    }
} while ($opcion != 7);
