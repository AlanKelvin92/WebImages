<?php 

// me conecto al servidor y a la base de datos
$link = mysqli_connect('localhost', 'root', '', 'webimage');

if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Exito... ' . mysqli_get_host_info($link) . "\n";

//mysqli_close($link);

//obtenemos los valores del formulario

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (nombre, apellido,usuario,password)
VALUES ('$nombre', '$apellido', '$usuario','$password')";

if (mysqli_query($link, $sql)) {
    echo '<br> New record created successfully
		<a href="login.html"> Logearse</a>';		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

//mysqli_real_query ($link , string INSERT INTO usuarios(nombre, apellido, usuario, password) VALUES($nombre, $apellido, $usuario, $password) or die (<h2>Error de envio de datos a la tabla</h2>);

//echo '
	//<h2>Registro completo</h2>
	//<a href="login.html"> Logearse</a>	
	//';


/**if(mysql_query($query))$q=1;
else $q=0;

if($q==1){
		$result = mysql_result($q, 0);
		echo "Usuario registrado";
		header("Location: login.html");
} else
		echo "El usuario no se pudo registrar";


?> **/

?>