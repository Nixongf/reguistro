<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="ie-edge">
	<title>Taller de Acuarela</title>
	<meta name="description" content="Taller de Acuarelas de Verano">
	<meta name="author" content="Nixon">
	<link rel="icon" type="image/png" href="">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
	
	<script defer src="main.js"></script>
</head>
<body>
	<div class="box-login">
      <h1>Inscripción</h1>
      <form method="post">
		  <!-- Nombre del representante -->
        <div class="box-username">
          <input type="text" name="name" required>
          <label>Nombre</label>
		</div>
		<!-- Nombre del menor  -->
		<div class="box-username">
          <input type="text" name="menor" required>
          <label>Nombre del menor</label>
		</div>

		<!-- TAller y Grupo -->
		<div class="ajustar">
			<div class="box-usernam">
				<div class="ajuste" >Taller</div> 	
				<select name="taller" id="taller" required>
					<option disabled="" selected="" id="predeterminado">Elija un Taller</option>
					<option value="Taller de Acuarela">Taller de Acuarela</option>
					<option value="Taller de Retratos">Taller de Retratos</option>
					<option value="Taller de Dibujo">Taller de Dibujo</option>
				</select>			  
			</div>
			
			<div class="box-usernam2">
				<div class="ajuste">Grupo</div> 	
				<select name="group" id="subtipo" required>
					<option disabled="" selected="">Elija un Grupo</option>
					<option class="none" value="G-1">G-1 (4 a 6 años)</option>
					<option class="none" value="G-2">G-2 (7 a 10 años)</option>
					<option class="none" value="G-3">G-3(11 - 15 años)</option>
					<option class="none" value="G-4">G-4(11 - 15 años)</option>
				</select>			  
			</div>
		</div>
		<!-- Horarios Y materiales-->
		<div class="ajustar">
			<div class="box-usernam">
				<div class="ajuste">Horarios</div> 	
				<select name="horarios" id="subtipo2" required>
					<option disabled="" selected="">Elija un Horario</option>
					<!-- G-1 -->
					<option class="none" value="8:00 a 9:00 AM">8:00 a 9:00 AM</option>
					<option class="none" value="2:00 a 3:00 PM">2:00 a 3:00 PM</option>
					<!-- G-2 -->
					<option class="none" value="9:30 a 11:00 AM">9:30 a 11:00 AM</option>
					<option class="none" value="3:30 a 5:00 PM">3:30 a 5:00 PM</option>

					<!-- G-3 Miercoles y Viernes-->
					<option class="none" value="11:30 a 1:00 PM">11:30 a 1:00 PM</option>
					
					<!-- G-3 Martes y Jueves-->
					<option class="none" value="5:30 a 7:00 PM">5:30 a 7:00 PM</option>
					
				</select>			  
			</div>
			<div class="box-usernam2">
				<div class="ajuste">Dias</div> 	
				<select name="dias" id="subtipo3" required>
					<option disabled="" selected="">Elija los dias</option>
					<!-- G-1 -->
					<option class="none" value="Martes y Jueves">Martes y Jueves</option>
					<option class="none" value="Miercoles y Viernes">Miercoles y Viernes</option>
					
				</select>			  
			</div>
		</div>
			<div class="box-username">
				<div class="ajuste">Incluir Materiales</div> 	
				<div class="espace">
					<input type="radio" name="materiales" value="Si" required>Si
					<input type="radio" name="materiales"  value="No" required>No	  
				</div>
			</div>

		<!-- Numero de celular  -->
        <div class="box-username">
          <input type="tel" name="telefono" maxlength="9" required>
		  <label>Numero de Celular</label>
		</div>
		<!-- Direccion -->
		<div class="box-username">
          <input type="text" name="adress"  required>
		  <label>Direccion</label>
		</div>

		<div class="boton">
          <input type="submit" name="register">
        </div>
      </form>
	</div>
        <?php 
        include ("registrar.php");
        ?>
</body>
</html>