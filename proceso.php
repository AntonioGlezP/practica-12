<html>
<body background="fondo2.jpg">
<center>

<?php
$radio=0;
$area;
 extract($_REQUEST); //Extrayendo los inputs del formulario
 $area=$radio*$radio*3.1416;
 print "El área de su círculo es: $area".'<br><br>';
 echo '<a href="area.php">Calcular área del circulo</a>';

?>

</center>
</body>

</html>