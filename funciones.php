<?php 


/// FUNCIONES DE COLET DULCE DE LECHE

function convertir1($numero) {
    if($numero < 0){
        echo "Ingrese un número Positivo";
    }else{
            $octal = base_convert($numero, 10, 8);
            return "$octal";
        }
        }
   
    


    function convertir2($numero) {
        if($numero < 0){
            echo "Ingrese un número Positivo";
        }else{
                $hexa = base_convert($numero, 10, 16);
                return "$hexa";
            }
            }
   
            
            


    function convertir3($numero) {
        if($numero < 0){
            echo "Ingrese un número Positivo";
        }else{
            $binario = base_convert($numero, 10, 2);
            return "$binario";
            }
            }

/// FUNCIONES DE COLET DULCE DE LECHE


/// FUNCIONES DE COLET DE BOMBON

function VerificarPositivos($numero){
    if($numero < 0){
        echo '<script>alert("No escribas variables negativas"); window.location.href = "index2.php";</script>';
    } else{

    }
}




function DecimalConvertir($numero,$numero2) {
    if($numero2 == 1) {
            if(preg_match('/^[0-9]+$/', $numero)){
              $resultado = base_convert($numero,10,10);
              return $resultado;
            } else {
              return "No es decimal";
            }
    } else if($numero2 == 2) {
             if(preg_match('/^[0-7]+$/', $numero)){
            $resultado = base_convert($numero,8,10);
            return $resultado;
            } else {
            return "No es octal";
            }

    } else if($numero2 == 3) {
             if(preg_match('/^[01]+$/', $numero)){
            $resultado = base_convert($numero,2,10);
            return $resultado;
            } else {
            return "No es Binario";
            }

    } elseif ($numero2 == 4) {
        if (preg_match('/^[0-9A-Fa-f]+$/', $numero)) {
            $resultado = base_convert($numero,16,10);
            return $resultado;
        } else {
            return "No es hexadecimal";
        }
    }
    
    }





/// FUNCIONES DE COLET DE BOMBON
           
?>