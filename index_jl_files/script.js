// JavaScript Document
function numeros(e){
        key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = "1234567890";
		especiales = [8,37,39,46];
		tecla_especial = false;
	 for(var i in especiales){
				if(key == especiales[i]){
					tecla_especial = true;
					break;
				} 
		}
        if(letras.indexOf(tecla)==-1 && !tecla_especial)
			return false;
}
function get_car(c){
	$.post("func.php",{act:"get_car",carrera:c},
	function(data){ $('#carrera').html(data);}
	);
}

function ini_ses(){
	var err="";
	$('#error').slideUp();
	if($('#matricula').val()=='') err += "<li>Debes proporcionar tu número de matrícula.</li>";
	if($('#plantel').val()=='') err +="<li>Debes seleccionar el plantel.</li>";
	if($('#carrera').val()=='') err +="<li>Debes seleccionar la carrera</li>";
	if(err==""){
		$.post("func.php",{act:"ini_ses",MATRICULA:$('#matricula').val(),PLANTEL:$('#plantel').val(), CARRERA:$('#carrera').val()},
			function (data){
				$('#antologias').html(data);
			});
	}else{
		$('#error').html('Error(es): <ul class="disc">'+err+'</ul>');
		$('#error').slideDown();
	}
}

function ter_ses(){
	$.post("func.php",{act:"ter_ses"},function (data){
		document.sess.reset();
		$('#carrera').html('');
		$('#error').hide();
		$('#antologias').slideUp();
		$('#well').slideDown();
		$('#aut').slideDown();
	});
}

function get_tex(car){
	$.post("func.php",{act:"get_tex",CARRERA:car}, function(data){
		$('#tb_tex').html(data);
	});
}

function get_doc(d,n){
	window.open("func.php?act=get_doc&d="+d+"&n="+n,'docsuniver');
}