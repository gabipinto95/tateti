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

    $coleccionJuegos[0] = ["jugadorCruz" => "MAJO", "jugadorCirculo" => "PEPE", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz" => "JUAN", "jugadorCirculo" => "MAJO", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[2] = ["jugadorCruz" => "ANA", "jugadorCirculo" => "LISA", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[3] = ["jugadorCruz" => "ROBERTO", "jugadorCirculo" => "PEPE", "puntosCruz" => 0, "puntosCirculo" => 5];
    $coleccionJuegos[4] = ["jugadorCruz" => "MAURO", "jugadorCirculo" => "ROBERTO", "puntosCruz" =>0, "puntosCirculo" => 5];
    $coleccionJuegos[5] = ["jugadorCruz" => "MAJO", "jugadorCirculo" => "LUIS", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[6] = ["jugadorCruz" => "FELIPE", "jugadorCirculo" => "JUAN", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[7] = ["jugadorCruz" => "ANA", "jugadorCirculo" => "MAJO", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[8] = ["jugadorCruz" => "LUIS", "jugadorCirculo" => "AGUSTIN", "puntosCruz" => 0, "puntosCirculo" => 5];
    $coleccionJuegos[9] = ["jugadorCruz" => "JUAN", "jugadorCirculo" => "MESSI", "puntosCruz" => 3, "puntosCirculo" => 0];
 
    return $coleccionJuegos;
}



                        /** MENU DE OPCIONES
                         
  * Muestra las opciones del menú de TATETI
     * @return int
     */

function seleccionarOpcion(){    
//int $opcionvalida
   


echo " \n ++++++++++++++++ MENU DE TATETI ++++++++++++++++ \n";

echo "Opcion 1: JUGAR PARTIDA \n";

echo "Opcion 2: MOSTRAR UN JUEGO \n";

echo "Opcion 3: MOSTRAR EL PRIMER JUEGO GANADOR \n";

echo "Opcion 4: MOSTRAR PORCENTAJE DE JUEGOS GANADOS \n";

echo "Opcion 5: MOSTRAR RESUMEN DE JUGADOR \n";

echo "Opcion 6: MOSTRAR JUEGOS ORDENADOS SEGUN JUGADOR CIRCULO \n";

echo "Opcion 7: SALIR \n";


    echo "Ingrese la opcion deseada: ";


$opcionvalida= SolicitarNumeroEntre(1,7);

return $opcionvalida;

}


//OPCIÓN 1

/**  Añade un nuevo juego a la coleccion ya precargada
 * @param array $coleccion1
 * @param array $jugadas  (generada por inijuego)
 * @return array
 */

 function agregarJuegos($coleccion1,$jugadas){
    
    array_push($coleccion1,$jugadas);
    
    return $coleccion1;
    
}

//OPCIÓN 2

/**
  * Muestra un juego específico
  * @param array $coleccion2
  * @param int $nro
  */      
function mostrarJuego($coleccion2, $nro) {           //Opcion 2
    //string $resultado
    //array $juego
    
       
    $juego= $coleccion2[$nro - 1];
    if($juego["puntosCruz"] > $juego["puntosCirculo"]) {
        $resultado = "Ganó " . $juego["jugadorCruz"];
    } elseif ($juego["puntosCruz"] < $juego["puntosCirculo"]) {
        $resultado = "Ganó " . $juego["jugadorCirculo"];
    } else {
        $resultado = "Empate";
    }
    echo " \n ++++++++++++++++++++++++++++ \n";
    echo " Juego Tatetí " . $nro . " (".$resultado.") \n";
    echo "Jugador X: " . $juego["jugadorCruz"] . " obtuvo " . $juego["puntosCruz"] . " puntos." . "\n";
    echo "Jugador O: " . $juego["jugadorCirculo"] . " obtuvo " . $juego["puntosCirculo"] . " puntos." . "\n";
    echo " \n ++++++++++++++++++++++++++++ \n";

   }


                    //OPCIÓN 3
   /**
    *Retorna el índice del primer juego ganado por dicho jugador y en caso de no haber uno, retorna -1
    *@param array $coleccion3
    *@param string $nombre
    *@return int
    */
    function obtienePrimerGanador($coleccion3, $nombre) {
        //int $indiceGanador, $i
        //boolean $bandera
        //array $juego3

        $i = 0;
        $bandera = true;
        $indiceGanador = -1;

        while($i < count($coleccion3) && $bandera) {
            $juego3 = $coleccion3[$i];

            if($juego3["jugadorCruz"] == $nombre) {
                if($juego3["puntosCruz"] > $juego3["puntosCirculo"]) {
                    $indiceGanador = $i;
                    $bandera = false;
                }

            } elseif($juego3["jugadorCirculo"] == $nombre) {
                if($juego3["puntosCirculo"] > $juego3["puntosCruz"]) {
                    $indiceGanador = $i;
                    $bandera = false;
                }
            }
            $i++;   
        }
        return $indiceGanador;
    }


    //OPCIÓN 4

    /**  Solicita y verifica el simbolo ingresado
 *  @return string
 */

function solicitarSimbolo() {             

     do {
	
        echo ("Ingrese un signo (X o O): ");


        $signo = trim(fgets(STDIN));


        $signo = strtoupper($signo); 

      
        if ($signo !== "X" && $signo !== "O") {


            echo "Signo no válido, escríbalo de nuevo. \n";
        }


    } while ($signo !== "X" && $signo !== "O");

    return $signo;
}


  /** Cuenta las partidas ganadas totales y segun  su simbolo
 * @param array $coleccion4
 * @return array
 */

function totalGanadas($coleccion4) {               
//array $juegosTotales


    $juegosTotales=[
     
         "juegosGanados" => 0,     
         "GanadasPorX"=> 0,     
         "GanadasPorO" => 0       
     ];
     
    
     $n= count($coleccion4);
     
     for($i=0; $i<($n); $i++)      {
     
         $juego4 = $coleccion4[$i];

 

         if($juego4["puntosCruz"] > $juego4["puntosCirculo"] || $juego4["puntosCirculo"] > $juego4["puntosCruz"]){

             $juegosTotales["juegosGanados"]= $juegosTotales["juegosGanados"] + 1;
         }
 
            if ($juego4["puntosCruz"] > $juego4["puntosCirculo"]){
            
            
             $juegosTotales["GanadasPorX"]= $juegosTotales["GanadasPorX"] + 1;
 
            }

            if ($juego4["puntosCirculo"] > $juego4["puntosCruz"]){

             $juegosTotales["GanadasPorO"]= $juegosTotales["GanadasPorO"] + 1;
            }
         }
        

         return $juegosTotales;
     
}


/**    Muestra las partidas ganadas SEGUN determinado simbolo
 * @param string $signo4
 * @param array $ganadas
 */

function ganadasSimbolo ($signo4, $ganadas){
//float $porcentaje

if ($ganadas["juegosGanados"] > 0){
    if ($signo4== "X") {

        $porcentaje= round(($ganadas["GanadasPorX"] / $ganadas["juegosGanados"]) * 100,0);    


    echo " Las Partidas ganadas por " . $signo4. " son: ". $ganadas["GanadasPorX"]. " del total de juegos ganados, un ". $porcentaje. " % fueron ganadas por este simbolo \n";
    }


    if($signo4== "O") {


    $porcentaje= round(($ganadas["GanadasPorO"] / $ganadas["juegosGanados"]) * 100,0);


    echo " \n Las partidas ganadas por ". $signo4. " son: ". $ganadas["GanadasPorO"]. " del total de juegos ganados, un ". $porcentaje. " %  fueron ganadas por este simbolo \n";

    }
}
    else{
        echo "Aun no se ha ganado ninguna partida";
    }
}           
            //OPCIÓN 5

/** Muestra un resumen de un jugador específico
 * @param array $coleccion5
 * @param string $nombrejugador
 * @return array
 */
                
function resumeJugadas($coleccion5, $nombreJugador) {
//array $resumenJugador

    $resumenJugador= [

    "nombre" => "",
    "juegosGanados" => 0,
    "juegosPerdidos" => 0,
    "juegosEmpatados" => 0,
    "puntosAcumulados" => 0
    ];


    $n= count($coleccion5);

    for($i=0; $i<$n; $i++){

        $juego5 = $coleccion5[$i];


                         //Si el jugador fue CRUZ :

        if ($juego5["jugadorCruz"]== $nombreJugador) {               

            if ($juego5["puntosCruz"] > $juego5["puntosCirculo"]){
        
            $resumenJugador["juegosGanados"] = $resumenJugador["juegosGanados"] + 1;

            $resumenJugador["puntosAcumulados"]= $resumenJugador["puntosAcumulados"] + $juego5["puntosCruz"];  
            
        

            }elseif ($juego5["puntosCruz"] < $juego5["puntosCirculo"]){

            $resumenJugador["juegosPerdidos"] = $resumenJugador["juegosPerdidos"] + 1;

            }else {

            $resumenJugador["juegosEmpatados"]= $resumenJugador["juegosEmpatados"] + 1;

            $resumenJugador["puntosAcumulados"]= $resumenJugador["puntosAcumulados"] + $juego5["puntosCruz"];
            }
        
        }
                     //Si el jugador fue CIRCULO:


        if ($juego5["jugadorCirculo"]== $nombreJugador) {

            if ($juego5["puntosCruz"] < $juego5["puntosCirculo"]){
            
                $resumenJugador["juegosGanados"] = $resumenJugador["juegosGanados"] + 1;
    
                $resumenJugador["puntosAcumulados"]= $resumenJugador["puntosAcumulados"] + $juego5["puntosCirculo"]; 

            }elseif ($juego5["puntosCruz"] > $juego5["puntosCirculo"]){
    
                $resumenJugador["juegosPerdidos"] = $resumenJugador["juegosPerdidos"] + 1;
    
            }else {
    
                $resumenJugador["juegosEmpatados"]= $resumenJugador["juegosEmpatados"] + 1;
    
                $resumenJugador["puntosAcumulados"]= $resumenJugador["puntosAcumulados"] + $juego5["puntosCirculo"];
            }

        } 

    }
        echo "\n+++++++++++++++++++++++++++++++++++++++++++++ \n";

        echo "JUGADOR ". $nombreJugador. "\n";

        echo "Ganó: ". $resumenJugador["juegosGanados"]. "\n";

        echo "Perdió: ". $resumenJugador["juegosPerdidos"]. "\n";

        echo "Empató: ". $resumenJugador["juegosEmpatados"]. "\n";

        echo "Puntos acumulados: ". $resumenJugador["puntosAcumulados"]. " Puntos \n";
        
        echo "+++++++++++++++++++++++++++++++++++++++++++++ \n";

}

//OPCIÓN 6
/**
 * Compara y ordena los elementos de dos arreglos asociativos
 * @param array $juegoA
 * @param array $juegoB
 * @return int
 */ 
function compara($juegoA, $juegoB) {
    //int $comparacion
    if($juegoA["jugadorCirculo"] > $juegoB["jugadorCirculo"]) {
        $comparacion = 1;
    } elseif($juegoB["jugadorCirculo"] > $juegoA["jugadorCirculo"]) {
        $comparacion = -1;
    } else {
        $comparacion = 0;
    }
    return $comparacion;
}


/**
 * Ordena y muestra alfabéticamente los nombres de los jugadores cuyo símbolo es O
 * @param array $coleccion6
 */
function ordenaJugadasPorO($coleccion6) {
    uasort($coleccion6, "compara");
    print_r($coleccion6);
}




                            /**************************************/
                            /*********** PROGRAMA PRINCIPAL *******/
                            /**************************************/


      //Declaración de variables:

       //Opcion 1

     // array $iniJuego
    // array $coleccion
    
     //Opcion 2


 // int $n
 // int $nroJuego


     //Opcion 3

// string $nombrePrimer
// int $primerGanada


    //Opcion 4

// string $signoTateti
// array $totalGanadas



    //Opcion 5

// string $nom





//Inicialización de variables:

$coleccion= cargaJuegos();




//Proceso:



do {
    $opcion = seleccionarOpcion();

    
    switch ($opcion) {
        case 1:                        // Jugar al TATETI (se añade un nuevo juego a la coleccion)
            
            
            $iniJuego = jugar();
           
            $coleccion= agregarJuegos($coleccion,$iniJuego);

           
            imprimirResultado($iniJuego);

            
            break;

        case 2:                         //Muestra los resultados de un numero de juego especifico
            
            $n=count($coleccion);

            echo "ingrese el numero de juego a mostrar: ";
            $nroJuego= trim(fgets(STDIN));
    
        while ($nroJuego > $n || $nroJuego <= 0) {

        echo "El número ingresado no cumple con los requisitos. Por favor, ingrese nuevamente: ";

        $nroJuego = trim(fgets(STDIN));
        }
           

        mostrarJuego($coleccion,$nroJuego);

        

            break;

        case 3:                         //Indicando el nombre de un jugador, muestra el PRIMER juego que ha ganado.
           


            echo "Ingrese el nombre del jugador: ";


            $nombrePrimer=  strtoupper(trim(fgets(STDIN)));
    
            $primerGanada= obtienePrimerGanador($coleccion, $nombrePrimer);
    
           
    
                if ($primerGanada !== -1){
    
                echo "\n La primer partida ganada por ". $nombrePrimer ." fue la numero ". ($primerGanada + 1). " y el resultado fue el siguiente: \n ";
    
                mostrarJuego($coleccion,$primerGanada + 1). "\n";

                }
                else {
    
                    echo "el jugador ". $nombrePrimer. " no ha ganado ninguna partida \n";
                }
    
                

            break;
        
        case 4:             //Se le solicita al usuario uno de los signos (X o O) y se muestra qué porcentaje de los juegos ganados se ganó con el mismo.
            

            $signoTateti= solicitarSimbolo();          

            $totalGanadas= totalGanadas($coleccion);    
                       
            ganadasSimbolo($signoTateti, $totalGanadas);
                       
                 

            break;

        case 5:      //Se SOLICITA el nombre de un jugador y se muestra un resumen de sus partidas.

            

            echo "Ingrese el nombre del jugador deseado: ";

            $nom= strtoupper(trim(fgets(STDIN)));

            resumeJugadas($coleccion,$nom);

            

            break;

        case 6:     //Se mostrará en pantalla la estructura ordenada alfabéticamente por jugador  O.
                

            ordenaJugadasPorO($coleccion);

            break;
    }
} while ($opcion != 7);
