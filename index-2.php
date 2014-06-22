<!DOCTYPE html>
<html lang="en">
<head>
	<title> Airlines.com </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script> 
	<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
	<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
	<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/Script.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page5">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<a href="index.php" id="logo">Air Lines</a><span id="slogan">el Mundo a tu alcance</span>
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="index.php">Home</a></li>
							<li><a href="index-3.php">Check - in</a></li>
							<li><a href="index-4.php">Contacto</a></li>

							<li id="redes"><a href=""><img src="images/img4.png"></a></li>
							<li><a href=""><img src="images/img5.png"></a></li>
							<li><a href=""><img src="images/img6.png"></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			COMFORT<span>Garantizado</span><p>Buscamos ofrecerte la mejor atención desde que compras tu pasaje hasta que abandonas el avion, con una interesante oferta de productos Duty Free y con salones VIP.</p>
		</div>
	</div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Contact Us</h2>
				<span class="cols">
					Pais:<br>
					Provincia:<br>
					Telefono:<br>
					Email:
				</span>
				Argentina<br>
				Buenos Aires<br>
				(011) 4635621<br>
				<a href="mailto:">consultas@airlines.com</a>
				<h2>Mas Informacion</h2>
				<p> Airlines ofrece vuelos a los destinos más lindos del continente americano, dándoles a todos los viajeros la posibilidad de descubrir todos sus encantos.</p>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>Completa tus datos</h2>
			<form id="PagoForm" action="">
				<div>
					<?php
					  session_start();

					  for ($i= 1; $i <= $_SESSION['adultos'] ; $i++) {
					  	echo "<div class='marker'>";
					    echo "<strong class='rotulo'> Pasajero Adulto $i: </strong>";
					    echo "<div class='wrapper'>";
					    echo "Apellido:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Apellido'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Nombre:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Nombre'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Fecha de Nacimiento:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Fecha de Nacimiento'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Sexo:"; 
					    echo "<div class='radio right'><label>F<input type='radio' name='sexo'/></label><label>M<input type='radio' name='sexo'/></label></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Tipo de Documento:"; 
					    echo "<div class='bg'><select><option value='dni'>DNI</option><option value='le'>L.E</option><option value='lc'>L.C</option></select></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Numero de Documento:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Numero de Documento'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Pais de Emision:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese pais'/></div>";
					    echo "</div>"; 
					    echo "</div>"; 
					  }
					  for ($f= 1; $f <= $_SESSION['menores']; $f++) { 
					    echo "<div class='marker'>";
					    echo "<strong> Pasajero Menor $f: </strong>";
					    echo "<div class='wrapper'>";
					    echo "Apellido:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Apellido'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Nombre:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Nombre'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Fecha de Nacimiento:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Fecha de Nacimiento'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Sexo:"; 
					    echo "<div class='radio right'><label>F<input type='radio' name='sexo'/></label><label>M<input type='radio' name='sexo'/></label></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Tipo de Documento:"; 
					    echo "<div class='bg'><select><option value='dni'>DNI</option><option value='le'>L.E</option><option value='lc'>L.C</option></select></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Numero de Documento:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese Numero de Documento'/></div>";
					    echo "</div>";
					    echo "<div class='wrapper'>";
					    echo "Pais de Emision:"; 
					    echo "<div class='bg'><input type='text' class='input' placeholder='Ingrese pais'/></div>";
					    echo "</div>";
					    echo "</div>";
					  }
					?>
					<strong> Formas de Pago:  </strong>
					<div class='wrapper'>
						Coutas:
						<div class='radio right'>
							<label> 1 Pago <input type='radio' name='couta'/></label>
							<label> 6 Pagos <input type='radio' name='couta'/></label>
						</div>
					</div>
					<div class='wrapper'>
						Tarjeta:
						<div class='bg'>
							<select>
								<option value='visa'> Visa </option>
								<option value='american'> American Express </option>
								<option value='master'> Master Card </option>
							</select>
						</div>
					</div>
					<div class='wrapper'>
						Numero de Tarjeta:
						<div class='bg'><input type='text' class='input' placeholder="Ingrese los 16 digitos"/></div>
					</div>
					<div class='wrapper'>
						Vencimiento:
						<div class='bg'><input type='text' class='input' placeholder='Ingrese Vencimiento'/></div>
					</div>
					<div class='wrapper'>
						Nombre Titular:
						<div class='bg'><input type='text' class='input' placeholder="Ingrese Nombre Titular"/></div>
					</div>
					<div class='wrapper'>
						Dni Titular:
						<div class='bg'><input type='text' class='input' placeholder="Ingrese Dni Titular"/></div>
					</div>
					<div class='wrapper'>
						Sexo: 
					    <div class='radio right'>
					    	<label> F <input type='radio' name='sexo'/></label>
					    	<label> M <input type='radio' name='sexo'/></label>
					    </div>
					</div>
					<strong> E-Mail de Contacto:  </strong>
					<div class='wrapper'>
						E-Mail:
						<div class='bg'><input type='text' class='input' placeholder="Ingrese E-Mail"/></div>
					</div>
					<div class='wrapper'>
						Verificar E-Mail:
						<div class='bg'><input type='text' class='input' placeholder="Re-Ingrese E-Mail"/></div>
					</div>
					<a href="#" class="button2" onClick="document.getElementById('ContactForm').submit()">Enviar</a>
					<a href="#" class="button2" onClick="document.getElementById('ContactForm').reset()">Cancelar</a>
				</div>
				<div class="clr"></div>
			</form>

		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!-- footer -->
		<footer>
			Trabajo Practico Integrador - Programacion Web II - UNLaM <br>
			<span id="pie">Velasco, Romina Giselle · Zerpa, Nadia Lorena · Zurdo, Nahuel Matias</span>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>