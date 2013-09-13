//Administrador Textos Basicos
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