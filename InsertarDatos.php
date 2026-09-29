 <html>
 <head>
 <title>InsertarDatos.php</title>
 <meta http-equiv='content-type' content='text/html; charset=UTF-8'/>
 </head>
 <body>
 <BODY BACKGROUND="imagenDeFondo.jpg">

 <form action='InsertarDatos.php' method='post'>
	<div>Etiqueta 1  : <input type='text' name='Campo1' value=" "/> </div>
	<div>Etiqueta 2 :   <input type='text' name='Campo2' value=" "/> </div>
        <div>Etiqueta 3 :   <input type='text' name='Campo3' value=" "/> </div>
        <div>Etiqueta 4:   <input type='text' name='Campo4' value=" "/> </div>
        <div>Etiqueta 5:   <input type='text' name='Campo5' value=" "/> </div>  
	<div><input type='submit' name='insert' value='Insertar registro'/></div>
 </form>

 <?php 
	$link = new mysqli("Servidor localhost", "Usuario root", "contraseña", "nombre_baseDeDatos");
	
	$sql = "INSERT INTO tabla (campo1, campo2, campo3, campo4, campo5) VALUES ('$_POST[campo1]', '$_POST[campo2]', '$_POST[campo3]', '$_POST[campo4]', '$_POST[campo5])'";


 if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $link->error;
 }


 ?>

 </body>
 </html>