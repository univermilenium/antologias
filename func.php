<?
//Configuracion
$ht="localhost";
$dbus="root";
$dbps="pablito";
$db = "antologias";
mysql_connect($ht,$dbus,$dbps) or die('¡No se puede realizar la conexión con la base de datos!');
mysql_select_db($db) or die('¡No se puede seleccionar la base de datos!');

session_start();

//funciones
if($_POST['act']=="get_car"){
	$cars=mysql_query("select * from carreras where PLANTEL = '".$_POST['carrera']."'");
	while($c=mysql_fetch_array($cars)){
		echo '<option value="'.$c['LIC'].'">'.$c['DESCRIPCION'].'</option>';
	}
}elseif($_POST['act']=="ini_ses"){
	
}elseif($_SESSION['antologias']=="activa"){
	if($_POST['act']=="ter_ses") session_destroy();
	
}else{
	echo 'Acceso no autorixado.';
}
?>