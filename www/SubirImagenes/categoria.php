<?php 

// me conecto al servidor y a la base de datos
$link = mysqli_connect('localhost', 'root', '', 'webimage');
if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
//echo 'Exito... ' . mysqli_get_host_info($link) . "\n";


$categoria= $_POST['select'];
$cate= mysqli_query($link, "SELECT * FROM datos WHERE descripcion = '".$categoria."'");
while($filas= mysqli_fetch_array($cate)){
	$ruta=$filas['ruta'];
	$desc=$filas['descripcion'];

 ?>
 

 <ins><img src="<?php echo $ruta;?>" width="180" height="214" /></ins>
 <?php } ?>
 <br>
 