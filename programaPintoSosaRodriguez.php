<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/








/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);

echo "****************";
echo "Menú de opciones";
echo "****************";

echo "Elija una de las siguientes opciones:\n";
echo "\n1) Jugar al tatetí \n";
echo "2) Mostrar un juego\n";
echo "3) Mostrar el primer juego ganador\n";
echo "4) Mostrar porcentaje de juegos ganados\n";
echo "5) Mostrar resumen de jugador\n";
echo "6) Mostrar listado de juegos Ordenado por jugador O\n";
echo "7) Salir";




do {
    $opcion = trim(fgets(STDIN));;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
