<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>



<?php

if(isset($_POST["enviando"])){  //comprueba que hemos pulsado el boton de enviado
	
	$usuario=$_POST["nombre_usuario"];
	$edad=$_POST["edad_usuario"];
	
	if($usuario=="alex"){
            echo "<p class='validado'>Puedes entrar</p>";
        }  else {
            echo "<p class='no_validado'>NO Puedes entrar</p>";
        }
        
}
?>