<?php 
include('Arriba2.php');
include('funciones.php');

$numero=$_POST['numero'];
$Select=$_POST['Select'];
$numero2=$_POST['numero2'];
$Select2=$_POST['Select2'];

VerificarPositivos($numero);
VerificarPositivos($numero2);
$numero1A=DecimalConvertir($numero,$Select);
$numero2A=DecimalConvertir($numero2,$Select2);

if(preg_match('/^[0-9]+$/', $numero1A) && preg_match('/^[0-9]+$/', $numero2A) ){
    $suma=$numero1A+$numero2A;
    $suma1=convertir1($suma);
    $suma2=convertir2($suma);
    $suma3=convertir3($suma);
  } else {
    $suma="No Respetaste el/los select";
    $suma1="No Respetaste el/los select";
    $suma2="No Respetaste el/los select";
    $suma3="No Respetaste el/los select";
  }

  if(preg_match('/^[0-9]+$/', $numero1A) && preg_match('/^[0-9]+$/', $numero2A) ){
    if($numero1A >= $numero2A){
    $resta=$numero1A-$numero2A;
    $resta1=convertir1($resta);
    $resta2=convertir2($resta);
    $resta3=convertir3($resta);
    }else{
    $resta=$numero1A-$numero2A;
    $resta1="Es Negativo";
    $resta2="Es Negativo";
    $resta3="Es Negativo";
    }
  } else {
    $resta="No Respetaste el/los select";
    $resta1="No Respetaste el/los select";
    $resta2="No Respetaste el/los select";
    $resta3="No Respetaste el/los select";
  }

  if(preg_match('/^[0-9]+$/', $numero1A) && preg_match('/^[0-9]+$/', $numero2A) ){
    $multi=$numero1A*$numero2A;
    $multi1=convertir1($multi);
    $multi2=convertir2($multi);
    $multi3=convertir3($multi);
  } else {
    $multi="No Respetaste el/los select";
    $multi1="No Respetaste el/los select";
    $multi2="No Respetaste el/los select";
    $multi3="No Respetaste el/los select";
  }

  if(preg_match('/^[0-9]+$/', $numero1A) && preg_match('/^[0-9]+$/', $numero2A) ){
    if($numero2A != 0){
    $divi=round($numero1A/$numero2A);
    $divi1=convertir1($divi);
    $divi2=convertir2($divi);
    $divi3=convertir3($divi);
}else{
    $divi="No existe";
    $divi1="No existe";
    $divi2="No existe";
    $divi3="No existe";
}

  } else {
    $divi="No Respetaste el/los select";
    $divi1="No Respetaste el/los select";
    $divi2="No Respetaste el/los select";
    $divi3="No Respetaste el/los select";
  }

?>





<section class="Cajas">
<!-- Para Ordenar las 4 cajas de los resultados -->


<!--
CAJA SUMA
-->

<form action="" class="caja">
<!-- Titulo -->
<div class="Titulo">
 Suma
</div>
<!-- Titulo -->


<!-- Tabla de Resultados -->


<section class="Resultados">


<article class="Valores1">
    <div class="Numeros1">Decimal: <?php echo $suma?></div>
</article>

<article class="Valores2">
    <div class="Numeros">Binario: <?php echo $suma3?> </div>
</article>

<article class="Valores3">
    <div class="Numeros1">Octal: <?php echo $suma1?></div>
</article>

<article class="Valores4">
    <div class="Numeros">Hexadecimal: <?php echo $suma2?> </div>
</article>


</section>
</form>


<!--
CAJA SUMA
-->



<!--
CAJA RESTA
-->


<form action="" class="caja">
<!-- Titulo -->
<div class="Titulo">
 Resta
</div>
<!-- Titulo -->


<!-- Tabla de Resultados -->


<section class="Resultados">


<article class="Valores1">
    <div class="Numeros1">Decimal:<?php echo $resta?></div>
</article>

<article class="Valores2">
    <div class="Numeros">Binario:<?php echo $resta3?> </div>
</article>

<article class="Valores3">
    <div class="Numeros1">Octal:<?php echo $resta1?> </div>
</article>

<article class="Valores4">
    <div class="Numeros">Hexadecimal:<?php echo $resta2?> </div>
</article>


</section>
</form>


<!--
CAJA RESTA
-->


<!--
CAJA MULTIPLICACION
-->

<form action="" class="caja">
    <!-- Titulo -->
<div class="Titulo">
 Multiplicacion
</div>
<!-- Titulo -->


<!-- Tabla de Resultados -->


<section class="Resultados">


<article class="Valores1">
    <div class="Numeros1">Decimal:<?php echo $multi?> </div>
</article>

<article class="Valores2">
    <div class="Numeros">Binario:<?php echo $multi3?> </div>
</article>

<article class="Valores3">
    <div class="Numeros1">Octal:<?php echo $multi1?> </div>
</article>

<article class="Valores4">
    <div class="Numeros">Hexadecimal:<?php echo $multi2?> </div>
</article>


</section>
</form>


<!--
CAJA MULTIPLICACION
-->


<!--
CAJA DIVISION
-->

<form action="" class="caja">
    <!-- Titulo -->
<div class="Titulo">
Division
</div>
<!-- Titulo -->


<!-- Tabla de Resultados -->


<section class="Resultados">


<article class="Valores1">
    <div class="Numeros1">Decimal:<?php echo $divi?>  </div>
</article>

<article class="Valores2">
    <div class="Numeros">Binario:<?php echo $divi3?>   </div>
</article>

<article class="Valores3">
    <div class="Numeros1">Octal: <?php echo $divi1?>  </div>
</article>

<article class="Valores4">
    <div class="Numeros">Hexadecimal: <?php echo $divi2?>  </div>
</article>


</section>
</form>


<!--
CAJA DIVISION
-->


<!-- Para Ordenar las 4 cajas de los resultados -->
</section>







</body>
</html>