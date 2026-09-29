<html>
<head><meta charset="utf-8"> 
</head>
<body>

//<IMG SRC="miImagen.gif" WIDTH=178 HEIGHT=180 BORDER=2">


<?php

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Campo1: ".$resultados['Campo1']."<br/> ";
echo "- Campo1: ".$resultados['Campo2']."<br/>";
echo "- : ".$resultados['Campo3']."<br/>";
echo "- Teléfono: ".$resultados['Campo4']."<br/>";
echo "- Edad: ".$resultados['Campo5']."<br/>";}
else {echo "<br/>No hay más datos: <br/>".$resultados;}
}

$link = mysqli_connect("servidor", "usuario", "contraseña");

mysqli_select_db($link, "mibasededatos");
$tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "SELECT * FROM nombreDeLaTabla");
$extraido1= mysqli_fetch_array($result);
mostrarDatos($extraido1);
$extraido2= mysqli_fetch_array($result);
mostrarDatos($extraido2);
$extraido3= mysqli_fetch_array($result);
mostrarDatos($extraido3);
$extraido4= mysqli_fetch_array($result);
mostrarDatos($extraido4);
$extraido5= mysqli_fetch_array($result);
mostrarDatos($extraido5);
$extraido6= mysqli_fetch_array($result);
mostrarDatos($extraido6);
mysqli_free_result($result);
mysqli_close($link);
?>


</body>
</html>