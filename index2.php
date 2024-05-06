<?php 
include('Arriba2.php');
?>

<form class="CentrarLaCaja" method="POST" action="index2R.php">
<!-- Es para centrar la caja -->


<!-- Titulo -->
<div class="Titulo">
 Calculadora
</div>
<!-- Titulo -->


<!-- Inputs -->
<section class="Inputs">

<input type="text" name="numero" id="numero" class="Input" required>

<select name="Select" class="Select">
<option value="1">Decimal</option>
<option value="2">Octal</option>
<option value="3">Binario</option>
<option value="4">Hexadecimal</option>
</select>

<input type="text" name="numero2" id="numero2" class="Input" required>

<select name="Select2" class="Select">
<option value="1">Decimal</option>
<option value="2">Octal</option>
<option value="3">Binario</option>
<option value="4">Hexadecimal</option>
</select>

</section>
<!-- Inputs -->


<!-- Boton -->
<button type="submit" class="BotonConvertir">Calcular</button>
<!-- Boton -->



<!-- Es para centrar la caja -->
</form>

</body>
</html>