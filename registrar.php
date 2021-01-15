<?php 

include("con_db.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['menor']) >= 1 && strlen($_POST['taller']) >= 1 && strlen($_POST['group']) >= 1 && strlen($_POST['horarios']) >= 1&& strlen($_POST['dias']) >= 1 && strlen($_POST['materiales']) >= 1){

		
		$name = trim($_POST['name']);
		$namemenor = trim($_POST['menor']);
		$taller = trim($_POST['taller']);
		$group = trim($_POST['group']);
		$horarios = trim($_POST['horarios']);
		$dias = trim($_POST['dias']);
		$materiales =trim($_POST['materiales']);
		$celular = trim($_POST['telefono']);
		$adress = trim($_POST['adress']);
		$fechareg = date("y/m/d h:i:sA");
	
	
		
		$consulta = "INSERT INTO datos(id,nombre,nombre_menor,taller,grupo,horario,dias,materiales,celular,direccion, fecha_registro) VALUES ('','$name','$namemenor','$taller','$group','$horarios','$dias','$materiales','$celular','$adress','$fechareg')";
		
		$result = mysqli_query($conex,$consulta) or die('No se pudo conectar a la base de datos');

		echo $result;
		echo $consulta;
	    if ($result) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>