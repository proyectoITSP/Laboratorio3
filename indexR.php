<?php 
include('funciones.php');
include('Arriba.php');
$numero=$_POST['numero'];
$numero2=convertir3($numero);
$numero3=convertir1($numero);
$numero4=convertir2($numero);
?>  




<form class="CentrarLaCaja2">
<!-- Es para centrar la caja -->


<!-- Titulo -->
<div class="Titulo">
 Resultados
</div>
<!-- Titulo -->


<!-- Tabla de Resultados -->


<section class="Resultados">


<article class="Valores1">
    <div class="Numeros1">Decimal:<?php echo $numero ?> </div>
</article>

<article class="Valores2">
    <div class="Numeros">Binario:<?php echo $numero2 ?> </div>
</article>

<article class="Valores3">
    <div class="Numeros1">Octal:<?php echo $numero3 ?> </div>
</article>

<article class="Valores4">
    <div class="Numeros">Hexadecimal:<?php echo $numero4 ?> </div>
</article>


</section>


<!-- Tabla de Resultados -->


<!-- Es para centrar la caja -->
</form>



</body>
</html>