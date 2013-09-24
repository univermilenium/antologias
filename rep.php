<?
/** PHP para funcionamiento de la aplicación "Textos Básicos" de Univer Milenium - eLearning
Autor(es):	Pablo César Sánchez Porta
			Moises RangelNarváes
**/

session_start();
include "access.php";
//Conexión a Base de Datos
mysql_connect($ht,$dbus,$dbps) or die('¡No se puede realizar la conexión con la base de datos!');
mysql_select_db($db) or die('¡No se puede seleccionar la base de datos!');
//Informacióin de palnteles
$planteles=array(1=>"Rayón", 2=>'Nezahualcoyotl', 3=>'Ixtapaluca', 4=>'Hidalgo', 5=>'Salud', 6=>'Ecatepec');
//Opciónes del Menú
$mnu=array('get_rep'=>'Reportes', 'get_doc'=>'Documentos', 'get_usr'=>'Usuarios', 'get_adm'=>'Administradores');
//Arreglos para limpieza de nombres
$no=array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', '-', ' ', '__', '._', '_.', '..', '__');
$si=array('a', 'e', 'i', 'o', 'u', 'n', 'a', 'e', 'i', 'o', 'u', 'n', '_', '_', '_', '.', '.', '.', '_');

if($_POST['act']=="ini_adm"){
	//Inicio de Sesión
	$chk=mysql_query("select * from usuarios where USER = '$_POST[USER]' and PASS = MD5('$_POST[PASS]')");
	if(mysql_num_rows($chk)==1){
		$s=mysql_fetch_array($chk);
		mysql_query("insert into usr_log (ID_USR) values ('$s[ID_USR]')");
		foreach($s as $c=>$v) if($c!="pass") $_SESSION[$c]=$v;
		$_SESSION['admin']="yes";
		echo '<input type="button" value="Terminar sesión" style="float:right;" onclick="fun(Array(\'act\',\'hola\'), Array(\'ter_adm\',\'probando\'),\'cont\')">';
		echo utf8_encode("<h3 class=\"Subtitle\">Bienvenido $_SESSION[NOMBRE] $_SESSION[PATERNO] $_SESSION[MATERNO]</h3><hr>");
		echo '<div id="menu" class="two columns alpha">&nbsp;</div><div id="cont" class="fourteen columns omega">El inicio de sesión fue exitoso, utiliza el menú del lado izquierdo para visualizar la información.</div>';
		echo "<script> $('#well').slideUp();\n $('#aut').slideUp();\n $('#admin').slideDown();\n fun(Array('act'), Array('get_menu'), 'menu'); </script>";
	}else{
		echo "<script> $('#error').html('Los datos proporcionados no son correctos, verifíca la información y vuelve a intentarlo'); $('#error').slideDown(); </script>";
	}
}elseif($_SESSION['admin']=="yes"){
	//Funciones disponibles con la sesión iniciada
	if(!$_POST['act']) $_POST=array_combine($_POST['p'],$_POST['v']); //Detecta falta de funcion y sonstruye el array asociativo
	if($_POST['act']=="val_ses"){
		//Valida si la sessión se encuentra iniciada al recargar la página
		echo '<input type="button" value="Terminar sesión" style="float:right;" onclick="fun(Array(\'act\',\'hola\'), Array(\'ter_adm\',\'probando\'),\'cont\')">';
		echo utf8_encode("<h3 class=\"Subtitle\">Bienvenido $_SESSION[NOMBRE] $_SESSION[PATERNO] $_SESSION[MATERNO]</h3><hr>");
		echo '<div id="menu" class="two columns alpha">&nbsp;</div><div id="cont" class="fourteen columns omega">El inicio de sesión fue exitoso, utiliza el menú del lado izquierdo para visualizar la información.</div>';
		echo "<script> $('#well').slideUp();\n $('#aut').slideUp();\n $('#admin').slideDown();\n fun(Array('act'), Array('get_menu'), 'menu'); </script>";
	}elseif($_POST['act']=="ter_adm"){
		//Cierra la sesión
		session_destroy();
		echo "<script>document.sess.reset();
		$('#error').hide();
		$('#admin').slideUp();
		$('#well').slideDown();
		$('#aut').slideDown();</script>";
	}elseif($_POST['act']=="get_menu"){
		//Obtiene el menu, con respecto a los privilegios asignados al usuario
		$nm=0; $pv=$_SESSION['PRIVILEGIOS'];
		
		foreach($mnu as $g=>$m){ 
			if(substr($pv,$nm,1)==1){
				echo '<input type="button" value="'.$m.'" onclick="fun(Array(\'act\'), Array(\''.$g.'\'), \'cont\')" class="full-width button"><br>';
			}
			$nm++;
		}
		
		echo '<center><img src="images/loading_blue.gif" id="loading" style="display:none;"></center>';
	}elseif($_POST['act']=="get_rep"){
		//Obtiene el reporte general y la botonera para vista y descarga de reportes especificos
		$ta=mysql_num_rows(mysql_query("select ID_LOG from log"));
		$tua=mysql_num_rows(mysql_query("select distinct(ID_MAT) from log"));
		$tu=mysql_num_rows(mysql_query("select ID_MAT from matriculas"));
		echo '<div class="seven columns alpha"><h2 class="Subtitle2" style="text-align:center">Acceso </h2><ul><li>Total de accesos: <strong>'.$ta.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'ver\', \'log\', \'*\', \'Total de Accesos\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'descargar\', \'log\', \'*\', \'Total de Accesos\'), \'descarga\');">Descargar</button></li><li>Acceso de Usuarios: <strong>'.$tua.'</strong> de <strong>'.$tu.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'ver\', \'log\', \'distinct(ID_MAT), PLANTEL, CARRERA, FECHA\', \'group by ID_MAT\', \'Total de Usuarios\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'descargar\', \'log\', \'distinct(ID_MAT), PLANTEL, CARRERA, FECHA\', \'group by ID_MAT\', \'Total de Usuarios\'), \'descarga\');">Descargar</button></li></ul></div>';
		$tdes=mysql_num_rows(mysql_query("select ID_DES from descargas"));
		$tdocd=mysql_num_rows(mysql_query("select distinct(DOC) from descargas"));
		$tdoc=mysql_num_rows(mysql_query("select ID_DOC from documentos"));
		echo '<div class="seven columns alpha"><h2 class="Subtitle2" style="text-align:center;">Descargas</h2><ul><li>Total de descargas: <strong>'.$tdes.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'ver\', \'descargas\', \'*\', \'Total de Descargas\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'tit\'), Array(\'reporte\', \'descargar\', \'descargas\', \'*\', \'Total de Descargas\'), \'descarga\');">Descargar</button></li><li>Documentos descargados: <strong>'.$tdocd.'</strong> de <strong>'.$tdoc.'</strong> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'ver\', \'descargas, documentos\', \'distinct(DOC), CARRERA, MATERIA, AUTOR\', \'where ID_DOC=DOC group by doc\', \'Documentos Descargados\'), \'cont\');">Ver</button> <button onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'descargar\', \'descargas, documentos\', \'distinct(DOC), CARRERA, MATERIA, AUTOR\', \'where ID_DOC=DOC group by doc\', \'Documentos Descargados\'), \'descarga\');">Descargar</button></li></ul></div><div class="clear" id="descarga" style="display:none;"></div>';
	}elseif($_POST['act']=="reporte"){
		//construye la vista del reporte, tanoto para explorador como para descarga
		if(!$_POST['wr']) $wr=''; else $wr=$_POST['wr'];
		$sql = "select $_POST[cm] from $_POST[tb] $wr";
		$enc = mysql_fetch_array(mysql_query($sql." limit 1"));
		$en='<tr>';
		foreach($enc as $n=>$mv) if(!is_numeric($n)){
			if($n=="ID_MAT"){
				$en.="<th>ID_MAT</th><th>MATRICULA</th><th>NOMBRE</th><th>PATERNO</th><th>MATERNO</th>";
			}else $en.="<th>$n</th>";
		}
		$en.='</tr>';
		$fil = mysql_query($sql);
		$repo='<table class="tb_tex">'.$en;
		while($f=mysql_fetch_array($fil)){
			$repo.='<tr>';
			foreach($f as $n=>$v) if(!is_numeric($n)){
				if($n=="ID_MAT"){
					$mt=mysql_fetch_array(mysql_query("select MATRICULA, NOMBRE, PATERNO, MATERNO from matriculas where ID_MAT = '$v'"));
					$repo.="<td>$v</td><td>$mt[MATRICULA]</td><td>$mt[NOMBRE]</td><td>$mt[PATERNO]</td><td>$mt[MATERNO]</td>";
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
			echo " <button onclick=\"fun(Array('act'), Array('get_rep'), 'cont')\" style='position: absolute; margin-top: 10px; margin-left: 20px;'>&lt;&lt; Regresar</button>";
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
	}elseif($_POST['act']=="get_doc"){
		//Construye buscador y contenedores para la vista y administación de documentos
		echo '<div id="func" class="three columns alpha"><h2 class="Subtitle2" style="margin-bottom:0;">Buscar</h2><form method="post" name="search" id="search" onsubmit="return false;" target="_top"><input type="hidden" name="act" value="search_doc"><input type="hidden" name="orden" id="orden"><input type="hidden" name="opt" value="xls"><label>palabras<input type="text" name="buscar" id="buscar"></label><span style="cursor:pointer; margin-top:-15px; display:block;" id="v_fina" onclick="$(\'#fina\').slideDown(); $(\'#v_fina\').slideUp();"><img src="images/mas.png"> Detalles</span><div id="fina" style="display:none;"><label>Carrera<select name="CARRERA" id="CARRERA"><option value></option>';
		$car=mysql_query("select distinct carrera from documentos order by carrera");
		while($ca=mysql_fetch_array($car)) echo "<option value=\"$ca[0]\">$ca[0]</option>";
		echo '</select></label><label>Cuatrimestre<select name="GRADO" id="GRADO"><option></option>';
		$gra=mysql_query("select distinct GRADO from documentos order by GRADO");
		while($gr=mysql_fetch_array($gra)) echo "<option value=\"$gr[0]\">$gr[0]</option>";
		echo '</select></label><span style="cursor:pointer; margin-top:-15px; display:block;" id="v_fina" onclick="$(\'#fina\').slideUp(); $(\'#v_fina\').slideDown(); if($(\'#CARRERA\').val()!=\'\' || $(\'#GRADO\').val()!=\'\'){ $(\'#CARRERA\').val(\'\'); $(\'#GRADO\').val(\'\'); efor(\'search\',\'resu\'); }"><img src="images/menos.png"> Ocultar</span></div><button onclick="efor(this.form.id,\'resu\')">Buscar</button></form><button onclick="fun(Array(\'act\'), Array(\'form_doc\'), \'resu\');">Agregar documento</button></div><div id="resu" class="eleven columns omega" style="overflow-x:auto; overflow-y:auto;">&nbsp;</div><div id="descarga" style="display:none;"></div><script>efor(\'search\',\'resu\')</script>';
	}elseif($_POST['act']=="search_doc"){
		//Construye la vistas de los documentos obtenidos en la busqueda
		$name=''; $tb='documentos'; $cm='*';
		if($_POST['buscar']!=''){
			$wr['buscar']=$_POST['buscar'];
			$name.="_$_POST[buscar]";
		}
		if($_POST['CARRERA']!=''){
			$wr['CARRERA']=$_POST['CARRERA'];
			$name.="_$_POST[CARRERA]";
		}
		if($_POST['GRADO']!=''){
			$wr['GRADO']=$_POST['GRADO'];
			$name.="_$_POST[GRADO]";
		}
		foreach($wr as $p=>$o){ $nw++;
			if($nw==1) $whr="where "; else $whr.="and ";
			if($p=="buscar") $whr.="(MATERIA LIKE '%$o%' OR AUTOR LIKE '%$o%' OR RUTA LIKE '%$o%' OR CLAVE LIKE '&$o&') ";
			else $whr.="$p = '$o' ";
		}
		if(!$_POST['orden']) $orden=''; else $orden = "order by $_POST[orden]";
		$sql="select $cm from $tb $whr $orden";
		$enc = mysql_fetch_array(mysql_query($sql." limit 1"));
		$en='<tr>';
		foreach($enc as $n=>$mv) if(!is_numeric($n)){$ne++;
			$en.="<th style='cursor:pointer'";
			if($ne!=1) $en.="title='ordenar por $n' onclick=\"$('#orden').val('".$n."'); efor('search', 'resu');\"";
			$en.=">$n</th>";
		}
		$en.='</tr>';
		$fil = mysql_query($sql);
		$nfil = mysql_num_rows($fil);
		while($f=mysql_fetch_array($fil)){
			$fi.="<tr>";
			foreach($f as $n=>$v) if(!is_numeric($n)){
				if($n=='ID_DOC') $fi.='<td><img src="images/editar.png" style="cursor:pointer;" title="Editar" onclick="fun(Array(\'act\', \'ID_DOC\'), Array(\'form_doc\', \''.$v.'\'), \'resu\');"><img src="images/borrar.png" style="cursor:pointer;" title="Borrar" onclick="if(confirm(\'¿Deseas borrar '.$f['CLAVE'].'?\')) fun(Array(\'act\',\'ID_DOC\',\'RUTA\'), Array(\'del_doc\',\''.$v.'\', \''.$f['RUTA'].'\'), \'descarga\'); "></td>';
				else $fi.="<td>&nbsp;$v</td>";	
			}
			$fi.="</tr>";
		}
		if($nfil==0) echo '<h2 class="Subtitle" style="text-align:center;">La busqueda no ofrece resultados</h2>';
		else echo '<button style="position:absolute; margin-left:-180px; margin-top:-25px;" title="'.$nfil.' documentos encontrados" onclick="fun(Array(\'act\', \'opt\', \'tb\', \'cm\', \'wr\', \'tit\'), Array(\'reporte\', \'descargar\', \''.$tb.'\', \''.$cm.'\', \''.str_replace("'","\'",$whr).'\', \'docs'.$name.'\'), \'descarga\')">Descargar Reporte ('.$nfil.')</button><table class="tb_tex">'.str_replace('ID_DOC','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$en).$fi.'</table>';
	}elseif($_POST['act']=="form_doc"){
		//Construye formulario para administración de documentos
		if(!$_POST['ID_DOC']){
			$h2="Agregar documento";
		}else{
			$h2="Editar documento";
			$doc=mysql_fetch_array(mysql_query("select * from documentos where ID_DOC = $_POST[ID_DOC]"));
		}
		echo '<div class="ten columns omega"><h2 class="Subtitle2">'.$h2.'</h2><form name="oper_doc" id="oper_doc" method="post" enctype="multipart/form-data" target="op_doc" action="rep.php"><input type="hidden" name="act" value="op_doc"><input type="hidden" name="ID_DOC" value="'.$doc['ID_DOC'].'"><div class="error" id="err_doc">&nbsp;</div><label style="float:left; margin-right:20px;">Carrera<select name="CARRERA" id="CARRERA"><option></option>';
		$carrs=mysql_query("select distinct(CARRERA), DESCRIPCION FROM carreras GROUP BY CARRERA ORDER BY CARRERA");
		while($car=mysql_fetch_array($carrs)){
			echo '<option value="'.$car[0].'" ';
			if($doc['CARRERA']==$car[0]) echo "selected";
			echo  '>'.$car[1].'</option>';
		}
		echo '</select></label><label>Cuatrimestre<input type="text" name="GRADO" id="GRADO" onkeypress="return numeros(event)" value="'.$doc['GRADO'].'" maxlength="2"></label><label style="float:left; margin-right:20px;">Materia<input type="text" name="MATERIA" id="MATERIA" value="'.$doc['MATERIA'].'"></label><label>Clave <input type="text" name="CLAVE" id="CLAVE" value="'.$doc['CLAVE'].'"></label><label style="float:left; margin-right:20px;">Autor<input type="text" name="AUTOR" id="AUTOR" value="'.$doc['AUTOR'].'"></label>';
		if($doc['RUTA']!=''){
			if(is_file('files'.$doc['RUTA'])) echo '<a href="files'.$doc['RUTA'].'" target="_blank">Ver documento</a><input type="hidden" name="RUTA" id="RUTA" value="'.$doc['RUTA'].'">';
			else echo '<span class="error" style="display:inline !important;">El documento no se encuentra en el servidor</span>';
			$ndr=mysql_num_rows(mysql_query("select ID_DOC from documentos where ruta = '$doc[RUTA]'"))-1;
			if($ndr>=1) echo '<label><input type="checkbox" name="conservar" id="conservar" value="1"> Conservar documento actual, este documento se encuaentra relacionado con <strong>'.$ndr.'</strong> documento(s).</label>';
		}
		echo '<label style="clear:both;">Adjuntar archivo<br><input type="file" name="docum" id="docum"></label><input type="submit" value="Guardar" onclick="$(\'#loading\').show(); $(\'#err_doc\').slideUp();"></form></div><iframe name="op_doc" id="op_doc" frameborder="0" style="display:none;"></iframe>';
	}elseif($_POST['act']=="op_doc"){
		//Operaciones para agregar o editar documentos
		$err='';
		if($_FILES['docum']['tmp_name']){
			if(!is_dir('files/'.strtolower($_POST['CARRERA']))){ mkdir('files/'.strtolower($_POST['CARRERA']), 0777); chmod('files/'.strtolower($_POST['CARRERA']),0777); }
			if(!is_dir('files/'.strtolower($_POST['CARRERA']).'/'.$_POST['GRADO'])){ mkdir('files/'.strtolower($_POST['CARRERA']).'/'.$_POST['GRADO'], 0777); chmod('files/'.strtolower($_POST['CARRERA']).'/'.$_POST['GRADO'], 0777); }
			$ruta='/'.strtolower($_POST['CARRERA']).'/'.$_POST['GRADO'].'/'.strtolower(str_replace($no,$si,$_FILES['docum']['name']));
			move_uploaded_file($_FILES['docum']['tmp_name'],'files'.$ruta);
		}else $ruta=$_POST['RUTA'];
		$chk=mysql_num_rows(mysql_query("select ID_DOC from documentos where CLAVE = '$_POST[CLAVE]'"));
		if(!$ruta){
			$err='No se a encontrado un archivo para relacionar el documento';
		}elseif(!$_POST['CARRERA'] || !$_POST['GRADO'] || !$_POST['MATERIA'] || !$_POST['CLAVE'] || !$_POST['AUTOR']){
			$err='Todos los campos son obligatorios';
		}elseif(!$_POST['ID_DOC']){
			if($chk==0){
				mysql_query("insert into documentos (CARRERA, GRADO, MATERIA, CLAVE, AUTOR, RUTA) values ('$_POST[CARRERA]', '$_POST[GRADO]', '$_POST[MATERIA]', '$_POST[CLAVE]', '$_POST[AUTOR]', '$ruta')");
				$res="window.parent.efor('search','resu');";
			}else{
				$err='La CLAVE de la Materia ya se encuentra registrada';
			}
		}else{
			if($chk>=1){
				mysql_query("update documentos set CARRERA='$_POST[CARRERA]', GRADO='$_POST[GRADO]', MATERIA='$_POST[MATERIA]', CLAVE='$_POST[CLAVE]', AUTOR='$_POST[AUTOR]', RUTA='$ruta' where ID_DOC = $_POST[ID_DOC]");
				$res="window.parent.efor('search','resu');";
			}else{
				$err='La CLAVE de la Materia ya se encuentra registrada.';
			}
		}
		if($err!='' && !$_POST['conservar']){
			$res="window.parent.$('#err_doc').html('$err'); window.parent.$('#err_doc').slideDown();";
			if(is_file('files'.$ruta))unlink('files'.$ruta);
		}elseif($_FILES['docum']['tmp_name']!='' && $_POST['RUTA']!='' && !$_POST['conservar']){
			unlink("files$_POST[RUTA]");
		}
		echo "<script> $res\n window.parent.$('#loading').hide();</script>";
	}elseif($_POST['act']=="del_doc"){
		//Borrado de documentos
		$chk=mysql_num_rows(mysql_query("select ID_DOC from documentos where RUTA = '$_POST[RUTA]'"));
		if($chk==1) unlink('files'.$_POST['RUTA']);
		mysql_query("delete from documentos where ID_DOC = $_POST[ID_DOC]");
		echo "<script>efor('search', 'resu'); alert('¡El documento se borro con éxito!');</script>";
	}else echo "<h2 class='Subtitle2'>¡Esta opción aún no esta disponible!</h2>"; //Mensaje de error en casoo de que se llame una funcion inexistente
}else echo "<h1>Acceso no autorizado</h1>";

?>