<? header('Content-Type: text/html; charset=UTF-8');
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
	echo '<option value=""></option>';
	while($c=mysql_fetch_array($cars)){
		echo '<option value="'.$c['LIC'].'">'.$c['DESCRIPCION'].'</option>';
	}
}elseif($_POST['act']=="ini_ses"){
	$is=mysql_query("select * from matriculas where MATRICULA = '".$_POST['MATRICULA']."'");
	if(mysql_num_rows($is)==0){
		echo "<script> $('#error').html('Los datos proporcionados no son correctos, verifíca la información y vuelve a intentarlo'); $('#error').slideDown(); </script>";
	}else{
		$i=mysql_fetch_array($is);
		mysql_query("insert into log (ID_MAT, PLANTEL, CARRERA) values ($i[ID_MAT],$_POST[PLANTEL], '$_POST[CARRERA]')");
		foreach($i as $c=>$v) $_SESSION[$c] = $v;
		echo '<input type="button" value="Terminar Sesión" onClick="ter_ses();" style="float:right;">';
		echo utf8_encode("<h4>Bienvenido $i[NOMBRE] $i[PATERNO] $i[MATERNO]</h4><hr><div id=\"tb_tex\" style=\"text-align:center;\">probando</div>");
		echo "<script> $('#well').slideUp();\n $('#aut').slideUp();\n $('#antologias').slideDown();\n </script>";
	}
}elseif($_SESSION['antologias']=="activa"){
	if($_POST['act']=="ter_ses") session_destroy();
	elseif($_POST['act']=="get_tex"){
		
	}elseif($_POST['act']=="get_doc"){
		
	}
}else{
	echo 'Acceso no autorizado.';
}
?>