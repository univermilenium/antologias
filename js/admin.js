//Administrador Textos Basicos
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

function ini_adm(){
	var err = "";
	$('#error').slideUp();
	if(!$('#user').val()) err+='<li>Debes ingresar el usuario</li>';
	if(!$('#pass').val()) err+='<li>La contraseña es obligatoria</li>';
	
	if(err==''){
		$.post("rep.php",{act:"ini_adm",USER:$('#user').val(),PASS:$('#pass').val()}, function(data){
			$('#admin').html(data);
		});
	}else{
		$('#error').html('Error(es): <ul class="disc">'+err+'</ul>');
		$('#error').slideDown();
	}
}

function fun(p,v,d){
	$('#loading').show();
	$.post("rep.php",{p:p,v:v},function(data){
		 $('#'+d).html(data);
	})
	.done(function(){$('#loading').hide();});
}

function efor(f,d){
	$('#loading').show();
	$('#'+d).html('');
	$.post("rep.php",$('#'+f).serializeArray(),function(data){
		$('#'+d).html(data);
	})
	.done(function(){$('#loading').hide();});
}