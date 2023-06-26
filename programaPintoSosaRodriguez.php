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
/**
 * Función 2
 * Muestra un juego
 * @param array $totalJuegos
 * @param int $nro
 */
function mostrarOpcion($totalJuegos, $nro) {
    //string $resultado
    $juego = cargaJuegos()[$nro - 1];
    if($juego["puntosCruz"] > $juego["puntosCirculo"]) {
        $resultado = "Ganó " . $juego["jugadorCruz"];
    } elseif ($juego["puntosCruz"] < $juego["puntosCirculo"]) {
        $resultado = "Ganó " . $juego["puntosCirculo"];
    } else {
        $resultado = "Empate.";
    }
    echo "++++++++++++++++++++++++++++ \n";
    echo "Juego Tatetí " . $nro . " (".$resultado.") \n";
    echo "Jugador X: " . $juego["jugadorCruz"] . " obtuvo " . $juego["puntosCruz"] . " puntos." . "\n";
    echo "Jugador O: " . $juego["jugadorCirculo"] . " obtuvo " . $juego["puntosCirculo"] . " puntos." . "\n";
    echo "++++++++++++++++++++++++++++ \n";
}






/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
// array $iniJuego


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);


do {
    $opcion = trim(fgets(STDIN));;

    
    switch ($opcion) {
        case 1: 
            $iniJuego = jugar();

            break;

        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;

        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
        case 4:
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 4

            break;

        case 5:
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 5

            break;

        case 6:
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 6

            break;
    }
} while ($opcion != 7);
