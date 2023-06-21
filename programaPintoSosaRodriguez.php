<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */
//Rodríguez Valentín FAI 3214 TUDW valentindanielrodriguez@gmail.com valentin227
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
    //array $precarga
    $precarga[0] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[1] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0]; 
    $precarga[2] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[3] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[4] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[5] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[6] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[7] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[8] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $precarga[9] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0];

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
