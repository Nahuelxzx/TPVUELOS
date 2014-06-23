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
	<?php
	session_start();

	if (isset($_POST['cantAdul']))
		$_SESSION['adultos'] = $_POST['cantAdul'];
	if (isset($_POST['cantMen']))
		$_SESSION['menores'] = $_POST['cantMen'];
	?>
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
				<form id="form_1" action="index-1.php" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<label><input type="radio" name="viaje" value="iyv" <?php if (isset($_POST['viaje'])) { if ($_POST['viaje'] == "iyv") { echo "checked = 'checked'";}} ?> onclick="ocultar(this)"> Ida y Vuelta </label><br>
							<label><input type="radio" name="viaje" value="si" <?php if (isset($_POST['viaje'])) { if ($_POST['viaje'] == "si") { echo "checked = 'checked'";}} ?> onclick="ocultar(this)">Solo Ida</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="clase" value="primera" <?php if (isset($_POST['clase'])) { if ($_POST['clase'] == "primera") { echo "checked='checked'";}} ?> >Primera</label><br>
							<label><input type="radio" name="clase" value="economy" <?php if (isset($_POST['clase'])) { if ($_POST['clase'] == "economy") { echo "checked='checked'";}} ?> >Economy</label>
						</div>
					</div>
					<div class="wrapper">
						Origen:
						<div class="bg"><input type="text" class="input input1" name="Origen" 
							placeholder="<?php if (isset($_POST['Origen'])) { echo $_POST['Origen'];} ?>" id="search"></div>
					</div>
					<div class="wrapper">
						Destino:
						<div class="bg"><input type="text" class="input input1" name="destino" placeholder="<?php if (isset($_POST['destino'])) { echo $_POST['destino'];} ?>" id="search1"></div>
					</div>
					<div class="wrapper">
						Partida:
						<div class="wrapper">
							<div class="bg left"><input type="text" name="fechap" id="txtStartDate" class="input input2" placeholder="<?php if (isset($_POST['fechap'])) { echo $_POST['fechap'];} ?>"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<div id="ocultarDiv" style="display:block">Regreso:
						<div class="wrapper">
							<div class="bg left"><input type="text" name="fechar" id="txtEndDate" class="input input2" placeholder="<?php if (isset($_POST['fechar'])) { echo $_POST['fechar']; } ?>"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div></div>
					</div>
					<div class="wrapper_1">
						Adulto(s):
						<div class="bg left">
							<select name="cantAdul">
				              <option value="1" <?php if($_POST['cantAdul'] == "1"){ echo "selected=selected"; }?>>1</option>
				              <option value="2" <?php if($_POST['cantAdul'] == "2"){ echo "selected=selected"; }?>>2</option>
				              <option value="3" <?php if($_POST['cantAdul'] == "3"){ echo "selected=selected"; }?>>3</option>
				              <option value="4" <?php if($_POST['cantAdul'] == "4"){ echo "selected=selected"; }?>>4</option>
				            </select>
						</div>
					</div>
					<div class="wrapper_1">
						Menor(es):
						<div class="bg left">
							<select name="cantMen">
							  <option value="0" <?php if($_POST['cantMen'] == "0"){ echo "selected=selected"; }?>>0</option>
				              <option value="1" <?php if($_POST['cantMen'] == "1"){ echo "selected=selected"; }?>>1</option>
				              <option value="2" <?php if($_POST['cantMen'] == "2"){ echo "selected=selected"; }?>>2</option>
				              <option value="3" <?php if($_POST['cantMen'] == "3"){ echo "selected=selected"; }?>>3</option>
				              <option value="4" <?php if($_POST['cantMen'] == "4"){ echo "selected=selected"; }?>>4</option>
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
		<h2>Vuelos de <?php if (isset($_POST['Origen'])) { echo $_POST['Origen'];} ?> a <?php if (isset($_POST['destino'])) { echo $_POST['destino'];} ?></h2>			
		<form id="form_1" action="index-2.php" method="POST">
			<div class="marker">
				<div class="wrapper">
					<div id="lineaIda">
		              <ul><li><strong> ROTULOS IDA </strong></li></ul>
			          	<?php
				          	require_once "Conexion/estructuraConsulta.php";
				          
							$estructuraConsulta = new estructuraModelo();
							$var1 = $_POST['Origen'];
							$var2 = $_POST['destino'];


							$varFecha1= $_POST['fechap'];
							echo "<br><br> FECHAAAAAAAAAAAAAAAAAAAAAA";
							var_dump($varFecha1);
							echo "<br><br>";


							$clientes = $estructuraConsulta->get_sql('select A1.Ciudad as CiudadOrigen, A2.Ciudad as CiudadDestino,
							V1.Hora_Salida as HoraSalida, V1.Hora_Llegada as HoraLlegada from vuelo V1 inner join aeropuerto A1
							on V1.Aepto_Origen = A1.idAepto inner join aeropuerto A2 on V1.Aepto_Destino = A2.idAepto
							where A1.Ciudad = "' . $var1 . '" and A2.Ciudad = "' . $var2 . '" and V1.Fecha_Salida = "2014-05-10" ');
							//var_dump($clientes);
							echo "<table border='1' rules=all>\n";		

							echo "<tr><td>Ciudad Origen</td><td>Ciudad Destino</td><td>Hora Salida</td><td>Hora Llegada</td><td>Avion</td><td>Importe</td></tr>";
							echo "<tr>Nombre</td>";

							foreach ($clientes as $row)
							 {
				            
				           	 echo "<ul><label><li><input type='radio' name='i1'></li><li> Sale:\t " . $row['CiudadOrigen'] . "</li><li> Llega: \t" . $row['CiudadOrigen'] . " </li><li> TiempoViaje </li><li> Directo </li><li> LineaAvion </li></label></ul> ";
				 	   		 echo "\t<tr>\n";
				 	   		 //echo "<td>" . $row['idVuelo'] . "</td>";
				             echo "<td>\t" . $row['CiudadOrigen'] . "</td>";
				             echo "<td>\t\n" . $row['CiudadDestino'] . "</td>";
				             //echo "<td>" . $row['CiudadDestino'] . "</td>";
				             //echo "<td>" . $row['Aepto_Destino'] . "</td>";
				             echo "<td>" . $row['HoraSalida'] . "</td>";
				             echo "<td>" . $row['HoraLlegada'] . "</td>";
				             //echo "<td>" . $row['Dia_vuelo'] . "</td>";
				             //echo "<td>" . $row['Fecha_Salida'] . "</td>";			 	   		 
				 	   		 echo "\t</tr>\n";
						 }

						echo "</table>\n";
						echo "<br><br>";
					    ?>
		              <ul><label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label></ul> 
		              <ul><label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label></ul> 
		              <ul><label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label></ul> 
		              <ul><label><li><input type="radio" name="i1"></li><li> Sale: $horaSale </li><li> Llega: $horaLlegada </li><li> $TiempoViaje </li><li> Directo </li><li> $LineaAvion </li></label></ul> 
		            </div>
				</div>
			</div>
			<?php
			if ($_POST['viaje'] == "iyv") {
				echo "<div class='marker'>";
				echo "<div class='wrapper'>";
				echo "<div id='lineaVuelta'>";
				echo "<ul> <li><strong> ROTULOS Vuelta </strong></li> </ul>";
				echo "<ul> <label><li><input type='radio' name='v1'></li><li> Sale: horaSale </li><li> Llega: horaLlegada </li><li> TiempoViaje </li><li> Directo </li><li> LineaAvion </li></label> </ul> ";
		        echo "<ul> <label><li><input type='radio' name='v1'></li><li> Sale: horaSale </li><li> Llega: horaLlegada </li><li> TiempoViaje </li><li> Directo </li><li> LineaAvion </li></label> </ul> ";
		        echo "<ul> <label><li><input type='radio' name='v1'></li><li> Sale: horaSale </li><li> Llega: horaLlegada </li><li> TiempoViaje </li><li> Directo </li><li> LineaAvion </li></label> </ul> ";
		        echo "<ul> <label><li><input type='radio' name='v1'></li><li> Sale: horaSale </li><li> Llega: horaLlegada </li><li> TiempoViaje </li><li> Directo </li><li> LineaAvion </li></label> </ul> ";
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}
			?>
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

	<?php
		//require_once "Conexion/estructuraConsulta.php";
		$Consulta_Ciudad = new estructuraModelo();
		$clientes = $Consulta_Ciudad->get_sql('select ciudad from aeropuerto order by ciudad');
		$arreglo_php = array();		
		if (count ($clientes) < 0) {  
				      array_push($arreglo_php, "No hay datos");
		                           }
		else{
		      foreach ($clientes as $row)
		       {
		         array_push($arreglo_php, $row['ciudad']);          
		       }
		    }
	?>
	<script type="text/javascript">
	 $(function(){
	    var autocompletar = new Array();
	    <?php //Esto es un poco de php para obtener lo que necesitamos
	     for($p = 0;$p < count($arreglo_php); $p++){ ?> //usamos count para saber cuantos elementos hay 
	       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
	     <?php } ?>
	     $("#search").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
	       source: autocompletar //Le decimos que nuestra fuente es el arreglo
	     });
	     $("#search1").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
	       source: autocompletar //Le decimos que nuestra fuente es el arreglo
	     });
	  });
	</script>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>