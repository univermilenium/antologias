<? session_start();
include "access.php";

mysql_connect($ht,$dbus,$dbps) or die('¡No se puede realizar la conexión con la base de datos!');
mysql_select_db($db) or die('¡No se puede seleccionar la base de datos!');

$planteles=array(1=>"Rayón", 2=>'Nezahualcoyotl', 3=>'Iztapaluca', 4=>'Hidalgo', 5=>'Salud', 6=>'Ecatepec');

$mnu=array('get_rep'=>'Reportes', 'get_doc'=>'Administrar Documentos', 'get_usr'=>'Administrar usuarios');

$no=array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', '-', ' ', '__', '._', '_.', '..', '__');
$si=array('a', 'e', 'i', 'o', 'u', 'n', 'a', 'e', 'i', 'o', 'u', 'n', '_', '_', '_', '.', '.', '.', '_');

if($_POST['act']=="ini_adm"){
	$chk=mysql_query("select * from usuarios where USER = '$_POST[USER]' and PASS = MD5('$_POST[PASS]')");
	if(mysql_num_rows($chk)==1){
		$s=mysql_fetch_array($chk);
		mysql_query("insert into usr_log (ID_USR) values ('$s[ID_USR]')");
		foreach($s as $c=>$v) if($c!="pass") $_SESSION[$c]=$v;
		$_SESSION['admin']="yes";
		echo '<input type="button" value="Terminar sesión" style="float:right;" onclick="fun(Array(\'act\',\'hola\'), Array(\'ter_adm\',\'probando\'),\'cont\')">';
		echo utf8_encode("<h3 class=\"Subtitle\">Bienvenido $_SESSION[NOMBRE] $_SESSION[PATERNO] $_SESSION[MATERNO]</h3><hr>");
		echo '<div id="menu" class="four columns alpha">menu</div><div id="cont" class="twelve columns omega">cargas</div>';
		echo "<script> $('#well').slideUp();\n $('#aut').slideUp();\n $('#admin').slideDown();\n fun(Array('act'), Array('get_menu'), 'menu'); </script>";
	}else{
		echo "<script> $('#error').html('Los datos proporcionados no son correctos, verifíca la información y vuelve a intentarlo'); $('#error').slideDown(); </script>";
	}
}elseif($_SESSION['admin']=="yes"){
	if(!$_POST['act']) $_POST=array_combine($_POST['p'],$_POST['v']);
	if($_POST['act']=="ter_adm"){
		session_destroy();
		echo "<script>document.sess.reset();
		$('#error').hide();
		$('#admin').slideUp();
		$('#well').slideDown();
		$('#aut').slideDown();</script>";
	}elseif($_POST['act']=="get_menu"){
		$nm=0; $pv=$_SESSION['PRIVILEGIOS'];
		
		foreach($mnu as $g=>$m){ 
			if(substr($pv,$nm,1)==1){
				echo '<input type="button" value="'.$m.'" onclick="fun(Array(\'act\'), Array(\''.$g.'\'), \'cont\')" class="full-width button"><br>';
			}
			$nm++;
		}
		
		//echo "<input type='button' value='Actualizar' onclick=\"fun(Array('act'), Array('get_menu'), 'menu');\"><br>";
	}elseif($_POST['act']=="get_rep"){
		$ta=mysql_num_rows(mysql_query("select ID_LOG from log"));
		$tu=mysql_num_rows(mysql_query("select distinct(ID_MAT) from log"));
		echo '<div class="six columns alpha"><h2 class="Subtitle2" style="text-align:center">Acceso </h2><ul><li>Total de accesos: <strong>'.$ta.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'ver\', \'log\', \'*\', \'Total de Accesos\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'descargar\', \'log\', \'*\', \'Total de Accesos\'), \'descarga\');">Descargar</button></li><li>Total de Usuarios: <strong>'.$tu.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'ver\', \'log\', \'distinct(ID_MAT), PLANTEL, CARRERA, FECHA\', \'group by ID_MAT\', \'Total de Usuarios\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'descargar\', \'log\', \'distinct(ID_MAT), PLANTEL, CARRERA, FECHA\', \'group by ID_MAT\', \'Total de Usuarios\'), \'descarga\');">Descargar</button></li></ul></div>';
		$tdes=mysql_num_rows(mysql_query("select ID_DES from descargas"));
		$tdoc=mysql_num_rows(mysql_query("select distinct(DOC) from descargas"));
		echo '<div class="six columns alpha"><h2 class="Subtitle2" style="text-align:center;">Descargas</h2><ul><li>Total de descargas: <strong>'.$tdes.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'ver\', \'descargas\', \'*\', \'Total de Descargas\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'descargar\', \'descargas\', \'*\', \'Total de Descargas\'), \'descarga\');">Descargar</button></li><li>Total de documentos: <strong>'.$tdoc.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'ver\', \'descargas, documentos\', \'distinct(DOC), CARRERA, MATERIA, AUTOR\', \'where ID_DOC=DOC group by doc\', \'Total de Descargas\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'descargar\', \'descargas, documentos\', \'distinct(DOC), CARRERA, MATERIA, AUTOR\', \'where ID_DOC=DOC group by doc\', \'Total de Descargas\'), \'descarga\');">Descargar</button></li></ul></div><div class="clear" id="descarga" style="display:none;"></div>';
	}elseif($_POST['act']=="reporte"){
		if(!$_POST['wr']) $wr=''; else $wr=$_POST['wr'];
		$sql = "select $_POST[cm] from $_POST[tb] $wr";
		$enc = mysql_fetch_array(mysql_query($sql." limit 1"));
		$en='<tr>';
		foreach($enc as $n=>$mv) if(!is_numeric($n)){
			if($n=="ID_MAT"){
				$en.="<th>MATRICULA</th><th>ALUMNO</th>";
			}else $en.="<th>$n</th>";
		}
		$en.='</tr>';
		$fil = mysql_query($sql);
		$repo='<table class="tb_tex">'.$en;
		while($f=mysql_fetch_array($fil)){
			$repo.='<tr>';
			foreach($f as $n=>$v) if(!is_numeric($n)){
				if($n=="ID_MAT"){
					$mt=mysql_fetch_array(mysql_query("select NOMBRE, PATERNO, MATERNO from matriculas where ID_MAT = '$v'"));
					$repo.="<td>$v</td><td>$mt[NOMBRE] $mt[PATERNO] $mt[METERNO]</td>";
				}elseif($n=="PLANTEL"){
					$repo.="<td>$planteles[$v]</td>";
				}elseif($n=="DOC"){
					$doc=mysql_fetch_array(mysql_query("select CLAVE from documentos where ID_DOC = $v"));
					$repo.="<td>$doc[0]</td>";
				}else $repo.="<td>$v</td>";
			}
			$repo.='</tr>';
		}
		$repo.='</table>';
		if($_POST['opt']=="ver"){
			echo " <button onclick=\"fun(Array('act'), Array('get_rep'), 'cont')\" style='position: fixed; margin-top: 180px; margin-left: -150px;'>&lt;&lt; Regresar</button>";
			echo '<h2 class="Subtitle" style="text-align:center;">'.$_POST['tit'].'</h2>'.$repo;
		}elseif($_POST['opt']=="descargar"){
			echo '<form method="post" name="des" target="_top" action="rep.php">';
			foreach($_POST as $c=>$v) if($c!='opt') echo '<input type="hidden" name="'.$c.'" value="'.$v.'">';
			echo '<input type="hidden" name="opt" value="xls">';
			echo '</form><script> document.des.submit();</script>';
		}elseif($_POST['opt']=="xls"){
			if(!$_POST['tit']) $name='reporte'.date("d_m_Y");
			else $name=strtolower(substr(str_replace($no,$si,$_POST['tit']),0,20).date("_d_m_Y"));
			header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
			header("Content-type: application/x-msexcel; charset=utf-8");
			header("Content-Disposition: attachment; filename=$name.xls");
			echo utf8_decode($repo);
		}else echo "<h2 class='Subtitle2'>¡Esta opción no es válida!</h2>";
	}else echo "<h2 class='Subtitle2'>¡Esta opción aún no esta disponible!</h2>";
}else echo "<h1>Acceso no autorizado</h1>";

?>