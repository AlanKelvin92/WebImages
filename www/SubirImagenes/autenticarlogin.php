<?php

// me conecto al servidor y a la base de datos
$link = mysqli_connect('localhost', 'root', '', 'webimage');

if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Exito... ' . mysqli_get_host_info($link) . "\n";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND
	password = '".$password."'";

//$q = mysql_query($query);



if (mysqli_query($link, $sql)) { 
		   header("Location: cargar.html");		
} else {
    echo "Error verifique los datos del login: " . $sql . "<br>" . mysqli_error($link);
}

/**try {
	if (mysql_result($q, 0)) {
		$result = mysql_result($q, 0);
		header("Location: cargar.html"); 
} else
		echo "Verifique los datos de login";
} catch (Exception $error){}
**/

?> 