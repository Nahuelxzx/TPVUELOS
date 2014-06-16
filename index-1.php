<!DOCTYPE html>
<html>
<head>
	<title> Airlines.com </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Script.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script> 
	<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
	<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
	<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page1">
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
		<a href="index-3.php" class="button_top">Realiza tu check - in</a>
	</div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Vuelos</h2>
				<form id="form_1" action="" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<label><input type="radio" name="viaje" value="iyv" checked="checked" onclick="ocultar(this)">Ida y Vuelta</label><br>
							<label><input type="radio" name="viaje" value="si" onclick="ocultar(this)">Solo Ida</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="clase" value="primera">Primera</label><br>
							<label><input type="radio" name="clase" value="economy">Economy</label>
						</div>
					</div>
					<div class="wrapper">
						Origen:
						<div class="bg"><input type="text" class="input input1" placeholder="<?php echo $_POST['Origen']; ?>"></div>
					</div>
					<div class="wrapper">
						Destino:
						<div class="bg"><input type="text" class="input input1" placeholder="<?php echo $_POST['destino']; ?>"></div>
					</div>
					<div class="wrapper">
						Partida:
						<div class="wrapper">
							<div class="bg left"><input type="text" name="fechap" id="datepicker" class="input input2" placeholder="<?php echo $_POST['fechap']; ?>"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<div id="ocultarDiv" style="display:block">Regreso:
						<div class="wrapper">
							<div class="bg left"><input type="text" name="fechar" id="datepicker1" class="input input2" placeholder="<?php echo $_POST['fechar']; ?>"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div></div>
					</div>
					<div class="wrapper_1">
						Adulto(s):
						<div class="bg left">
							<select>
							  <option value="0">0</option>
		                      <option value="1">1</option>
		                      <option value="2">2</option>
		                      <option value="3">3</option>
		                      <option value="4">4</option>
		                    </select>
						</div>
					</div>
					<div class="wrapper_1">
						Menor(es):
						<div class="bg left">
							<select>
							  <option value="0">0</option>
		                      <option value="1">1</option>
		                      <option value="2">2</option>
		                      <option value="3">3</option>
		                      <option value="4">4</option>
		                    </select>
		                </div>
					</div>
					<div class="wrapper_2">
					<!--<a href="datos.php" class="button2" onClick="document.getElementById('form_1').submit()"> Buscar </a> -->
					<input type="submit" class="button2" id="boton" value="Buscar"/>
					</div>
				</form>
				<div class="clr"></div>
				<h2>Noticias Recientes</h2>
				<p class="under"><a href="#" class="link1">Nuevos Destinos a tu alcance..</a><br>Mayo 20, 2014</p>
				<p><a href="#" class="link1">Los Precios mas baratos..</a><br>Febrero 12, 2014</p>
			</div>
		</article>
		<article class="col2 pad_left1">
		<h2>Vuelos de <?php echo $_POST['Origen'];?> a <?php echo $_POST['destino'];?></h2>			
		<form id="form_1" action="index-2.php" method="POST">
			<div class="marker">
				<div class="wrapper">
					<div id="lineaIda">
		              <ul> 
		                <li><strong> ROTULOS IDA </strong></li>
		              </ul>
		              <ul> 
		                <label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		              <ul> 
		                <label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		              <ul> 
		                <label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		              <ul> 
		                <label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		            </div>
				</div>
			</div>
			<div class="marker">
				<div class="wrapper">
					<div id="lineaIda">
		              <ul> 
		                <li><strong> ROTULOS Vuelta </strong></li>
		              </ul>
		              <ul> 
		                <label><li><input type="radio" name="v1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		              <ul> 
		                <label><li><input type="radio" name="v1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		              <ul> 
		                <label><li><input type="radio" name="v1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		              <ul> 
		                <label><li><input type="radio" name="v1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label>
		              </ul> 
		            </div>
				</div>
			</div>

			<div class="wrapper pad_bot2">
				<!--<a href="datos.php" class="button2" onClick="document.getElementById('form_1').submit()"> Buscar </a> -->
				<input type="submit" class="button2" id="boton" value="Seleccionar"/>
			</div>
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
			<span>Velasco, Romina Giselle · Zerpa, Nadia Lorena · Zurdo, Nahuel Matias</span>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>