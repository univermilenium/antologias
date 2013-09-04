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
	echo '<option value=""></option>';
	while($c=mysql_fetch_array($cars)){
		echo '<option value="'.$c['CARRERA'].'" >'.$c['DESCRIPCION'].'</option>';
	}
}elseif($_POST['act']=="ini_ses"){
	$is=mysql_query("select * from matriculas where MATRICULA = '".$_POST['MATRICULA']."'");
	if(mysql_num_rows($is)==0){
		echo "<script> $('#error').html('Los datos proporcionados no son correctos, verifíca la información y vuelve a intentarlo'); $('#error').slideDown(); </script>";
	}else{
		$i=mysql_fetch_array($is);
		mysql_query("insert into log (ID_MAT, PLANTEL, CARRERA) values ($i[ID_MAT],$_POST[PLANTEL], '$_POST[CARRERA]')");
		foreach($i as $c=>$v) $_SESSION[$c] = $v;
		$_SESSION['antologias'] = "activa";
		echo '<input type="button" value="Terminar Sesión" onClick="ter_ses();" style="float:right;"> <input type="button" value="Actualizar" onClick="get_tex(\''.$_POST['CARRERA'].'\');" style="float:right;">';
		echo utf8_encode("<h4>Bienvenido $i[NOMBRE] $i[PATERNO] $i[MATERNO]</h4><hr><div id=\"tb_tex\" style=\"text-align:center;\"></div>");
		echo "<script> $('#well').slideUp();\n $('#aut').slideUp();\n $('#antologias').slideDown();\n get_tex('$_POST[CARRERA]'); </script>";
	}
}elseif($_SESSION['antologias']=="activa"){
	if($_POST['act']=="ter_ses") session_destroy();
	elseif($_POST['act']=="get_tex"){
		$tex=mysql_query("select carreras.DESCRIPCION, documentos.* from documentos, carreras where documentos.CARRERA=carreras.CARRERA and carreras.PLANTEL=$_SESSION[PLANTEL] and documentos.CARRERA = '$_POST[CARRERA]' order by AUTOR");
		if(mysql_num_rows($tex)==0) echo "<h2>No existen documentos para esta licenciatura.</h2>";
		else{
			  echo '<table class="tb_tex"><tr><th>LICENCIATURA</th><th>CUATRIMESTRE</th><th>MATERIA</th><th>CLAVE</th><th>AUTOR</th><th>&nbsp;</th></tr>';
			while($t=mysql_fetch_array($tex)){
				echo '<tr><td>'.$t['DESCRIPCION'].'</td><td>'.$t['GRADO'].'</td><td>'.$t['MATERIA'].'</td><td>'.$t['CLAVE'].'</td><td>'.$t['AUTOR'].'</td><td><input type="button" value="Descargar" onClick="get_doc(\''.$t['RUTA'].'\',\''.$t['ID_DOC'].'\')"></td></tr>';
			}
			echo '</table>';
		}
	}elseif($_GET['act']=="get_doc"){
		mysql_query("insert into descargas (ID_MAT, DOC) values ('$_SESSION[ID_MAT]', '$_GET[n]')");
		$f='files'.$_GET['d'];
		header("Location: $f");
	}
}else{
	echo 'Acceso no autorizado.';
}
?>