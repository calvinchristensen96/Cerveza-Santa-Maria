<?php
	ob_start("sanitizeOutput");
	function sanitizeOutput($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // Quitamos espacios en blanco después de las etiquetas, excepto los espacios en sí
        '/[^\S ]+\</s',     // Quitamos espacios en blanco antes de las etiquetas, excepto los espacios en sí
        '/(\s)+/s',         // Acortamos los espacios en blanco
        '/<!--(.|\s)*?-->/' // Quitamos los comentarios HTML
    );
    $replace = array(
        '>',
        '<',
        '\\1',
		''
    );
		$output = preg_replace($search, $replace, $buffer);
		return $output;
		
	}    

	session_start(); // al volver al index si existe una session, esta sera destruida, existen formas de conservarlas como con un if(session_start()!= NULL). Pero por el momento para el ejemplo no es valido. 
	//session_destroy();  // Se destruye la session existente de esta forma no permite el duplicado.
	
	//$_SESSION['error'] = 0;
	$err = "";
	
	if (!isset($_SESSION['error'])){
		$_SESSION['error'] = 0;
	}
	
	if ($_SESSION['error'] == 1) {
		$err = "Nombre es incorrecto.";
	} else if ($_SESSION['error'] == 2) {
		$err = "E-mail es incorrecto";
	} else if ($_SESSION['error'] == 3) {
		$err = "Telefono es incorrecto";
	} else if ($_SESSION['error'] == 4) {
		$err = "Mensaje es incorrecto";
	}    
?>


<DOCTYPE HTML>
	<head>	
		
		<link type="text/css" rel="stylesheet" href="MINIFICATION/estilo.php ">	
		<link rel="stylesheet" href="css/animate.css">
		<title>Cerveza Santa Maria</title>
		
		<meta charset="UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="url" content="http://indiga.mx/santamaria/" >
		<meta name="type" content="website" >
		<meta name="title" content="Santamaría Cerveza Artesanal" >
		<meta name="description" content="Cervecería artesanal Poblana, específicamente del valle de Atlixco, por amor a las bebidas artesanales y Mexicanas.">
		<meta name="image" content="Material/Material/cortes/1home/logotipo">
		
		
		<meta property="og:url" content="http://indiga.mx/santamaria">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Santamaría Cerveza Artesanal">
		<meta property="og:description" content="Cervecería artesanal Poblana, específicamente del valle de Atlixco, por amor a las bebidas artesanales y Mexicanas.">
		<meta property="og:image" content="http://indiga.mx/santamaria/Material/Material/cortes/1home/logotipo">
		  
	</head>
	<body background="Material/Material/cortes/fondo.jpg">	
		<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn"> <img src="Material/Material/cortes/menu.png"></button>
			<div id="myDropdown" class="dropdown-content">
				<a href="#NOS">Nosotros</a>
				<a href="#CON">Cervesas</a>
					<ul>
					<li><a href="#CON">Consentida</a></li>
					<li><a href="#AMA">Amargada</a></li>
					<li><a href="#OVE">Oveja Negra</a></li>
					<li><a href="#LIB">Libertina</a></li>
					<li><a href="#PUM">Pumpkin</a></li>
					<li><a href="#MEX">Mexican Collection</a></li>
					</ul>
				<a href="#REC">Reconocimientos</a>
				<a href="#PRO">Proyectos</a>
				<a href="#CONT">Contacto</a>
			</div>
		</div>	
	<div class="principal" id="principal">
			<div class="contenido" id="contenido">
				<div class ="margen">
					<div class="primera_seccion">
						<div class="bloc">						
							<div class="home_imagenes">
								<div class="home_logo">
									<img src="Material/Material/cortes/1home/logotipo.png">
								</div>							
								<div class="cerveza1">
									<img src="Material/Material/cortes/1home/cerveza1.png" class="wow animated fadeInLeft">
								</div>								
								<div class="cerveza2">
									<img src="Material/Material/cortes/1home/cerveza2.png" class="wow animated fadeInRight">
								</div>								
								<div class="destapador">
									<img src="Material/Material/cortes/1home/destapador.png" class="wow animated fadeInLeft">
								</div>								
								<div class="hojas">
									<img src="Material/Material/cortes/1home/hojas.png" class="wow animated fadeInLeft">
								</div>								
								<div class="lupulo">
									<img src="Material/Material/cortes/1home/lupulo.png" class="wow animated fadeInRight">
								</div>								
								<div class="lupulo2">
									<img src="Material/Material/cortes/1home/lupulo2.png" class="wow animated fadeInRight">
								</div>								
								<div class="tabla">
									<img src="Material/Material/cortes/1home/tabla.png" class="wow animated fadeInLeft">
								</div>							
								<div class="toronja">
									<img src="Material/Material/cortes/1home/toronja.png" class="wow animated fadeInLeft">
								</div>								
								<div class="trigo">
									<img src="Material/Material/cortes/1home/trigo.png" class="wow animated fadeInRight">
								</div>								
								<div class="trigo2">
									<img src="Material/Material/cortes/1home/trigo2.png" class="wow animated fadeInLeft">
								</div>
								<div class="espacio">
								</div>
							</div>
						</div>
						<a name="NOS"></a>
					</div>					
					<div class="segunda_seccion">						
						<div class="texto_bg">
							<img src="Material/Material/cortes/2nosotros/fondotexto.png">
						</div>							
						<div class=nosotros_texto>
							<div class="nos">
								Del amor a la cerveza surge el deseo de elaborar un producto para consumo personal de estilos diferentes al mercado local. El resultado fue una cerveza con gran sabor y calidad. 
							</div>	
							<div class="nos">
								Así es como surge la Cerveza Santamaría, con el más puro espíritu artesanal. Sale al mercado el 28 de Junio del 2013 en un festival local de cerveza artesanal. En dicho festival “La Oveja Negra” obtiene el Oro y “La Consentida” el Bronce. Este inicio fue el mejor reforzamiento del potencial de nuestra cerveza.
							</div>								
							<div class="nos">
								Con una producción de 1,200 litros mensuales, nuestra cerveza se distribuye en Puebla, Morelia, Cuernavaca, Oaxaca, Celaya y Distrito Federal con excelente aceptación del mercado y con varias opciones de estilos para abarcar diferentes gustos y paladares.							
							</div>
						</div>					
						<div class="imagenes_izquierda">
							<div class=imagen_consentida>
								<img src="Material/Material/cortes/2nosotros/consentida.png">
							</div>
							<div class=imagen_ovejanegra>
								<img src="Material/Material/cortes/2nosotros/ovejanegra.png">
							</div>
						</div>						
						<div class="imagenes_derechas">
							<div class=imagen_amargada>
								<img src="Material/Material/cortes/2nosotros/amargada.png">
							</div>
							<div class=imagen_libertina>
								<img src="Material/Material/cortes/2nosotros/libertina.png">
							</div>
						</div>					
						<div class=navigacion>						
						</div>					
					</div>			
					<a name="CON"></a>
					<div class="tercera_seccion">
						<div class="bloc">
							<div class="col1">
								<div class="titulo">
									<img src="Material/Material/cortes/3laconsentida/laconsentida.png">
								</div>								
								<div class="sobre">
									<div class="icono">
										<img src="Material/Material/cortes/3laconsentida/consentidaicono.png">
									</div>								
									<div class="caja">
										Cerveza de trigo sin filtrar, afrutada, refrescante, de una espuma muy densa, de sabor moderado a fuerte con aromas pronunciados a cítricos, cuerpo robusto y un color dorado realmente único, todo esto es el resultado de su levadura especial, con un toque moderadamente lupulada. 
									</div>									
									<div class="caja">
										Una experiencia inigualable para los amantes de este estilo por algo nuestra consentida.
									</div>								
									<div class ="datos">
										<img src="Material/Material/cortes/3laconsentida/consentidadatos.png">
									</div>	
								</div>
								<div class="extras1">
									<img src="elementosextras/cortes/consentida/ostiones.png" class="wow animated fadeInLeft">
								</div>
							</div>					
							<div class="col2">
								<div class="sobre_hefeweizen">
									Hedonista, Narcisista, Egocéntrica. Gustos por el diseño, la Moda, el Arte, el mundo Snob. Música alternativa pop. Hippster: Interesada por la sociedad.
								</div>								
								<div class="tape">
								</div>
								<div class="imagen">
									<img src="Material/Material/cortes/3laconsentida/consentidabotella.png">
								</div>
								<div class="extras2">
									<img scr="elementosextras/cortes/consentida/cervezatrigo.png" class="wow animated fadeInLeft">
								</div>
							</div>
						</div>
					</div>				
					<a name="AMA"></a>
					<div class="cuarta_seccion">
					
					
						<div class="bloc">
							<div class="col1">
								<div class="sobre_amargada">
									Hater, Sincera, Directa, Con humor negro. Interesada por temas serios y burla de la sociedad: Cultura, Política, Valores, Desarrollo Humano. Hater: Interesada en el medio ambiente.
								</div>
								
								<div class="tape3">
								</div>

								<div class="imagen">
									<img src="Material/Material/cortes/4laamargada/amargadabotella.png">
								</div>
								<div class="extras3">
									<img src="elementosextras/cortes/amargada/aceitunas.png" class="wow animated fadeInLeft">
								</div>
								<div class="extras4">
									<img src="elementosextras/cortes/amargada/aguachile.png" class="wow animated fadeInLeft">
								</div>
							</div>
						
							<div class="col2">
								<div class="titulo">
									<img src="Material/Material/cortes/4laamargada/laamargada.png">
								</div>
							
								<div class="sobre">
									<div class="icono">
										<img src="Material/Material/cortes/4laamargada/amargadaicono.png">
									</div>
								
									<div class="caja">
										Una experiencia refrescante para todos los sentidos. 
	De color cobrizo irresistible, aromas intensos a lúpulo, textura maltosa de cuerpo medio, sabores amargos intensos y frutales y alto nivel de alcohol.

									</div>
									
									<div class="caja">
										Su “amargura” proviene de una selecta variedad de lúpulos que influyen en los sabores y aromas de esta cerveza. 
	El estilo IPA (India Pale Ale) es de origen inglés y es uno de los estilos más populares entre las cervezas artesanales, y a menudo es definido como el preferido por los verdaderos amantes de la cerveza.
									</div>
									<div class="datos">
										<img src="Material/Material/cortes/4laamargada/amargadadatos.png">
									</div>
								</div>
								<div class="extras5">
									<img scr="elementosextras/cortes/amargada/toronja.png" class="wow animated fadeInRight">
								</div>
							</div>
						</div>
					</div>			
					<a name="OVE"></a>
					<div class="quinta_seccion">
					
						<div class="bloc">
							<div class="col1">
								
								<div class="titulo">
									<img src="Material/Material/cortes/5laovejanegra/laovejanegra.png">
								</div>

								<div class="imagen">
									<img src="Material/Material/cortes/5laovejanegra/ovejanegrabotella.png">
								</div>
								<div class="extras6">
									<img src="elementosextras/cortes/ovejanegra/carne.png"  class="wow animated fadeInLeft">
								</div>
								<div class="extras7">
									<img src="elementosextras/cortes/ovejanegra/cafechocolate.png"  class="wow animated fadeInLeft">
								</div>
							</div>
						
							<div class="col2">
							
								<div class="sobre_ovejanegra">
									Rebelde, Inconforme, Inteligente, Alternativa, Geek. Gustos por la Música, los eventos alternativos, politica no activa, cultura, ciencia. Música Rock Clásico y Soft Metal.  Dark: Interesada por un mundo mejor.
								</div>
								
								<div class="tape2">
								</div>
							
								<div class="sobre">
									<div class="icono">
										<img src="Material/Material/cortes/5laovejanegra/ovejanegraicono.png">
									</div>
								
									<div class="caja">
										La Oveja Negra es una gran experiencia para el amante de la buena cerveza, es una Stout muy obscura, con gusto a café espresso debido a su sabor de grano moderadamente tostado con leve acidez y notas a chocolate no dulce. 								
									</div>
									
									<div class="caja">
										Mantiene una densidad alta y un marcado cuerpo debido a la combinación de 5 maltas diferentes. Sabor, textura y sofisticación.

									</div>
									
									<div class ="datos">
										<img src="MAterial/Material/cortes/5laovejanegra/ovejanegradatos.png">
									</div>
								</div>
								<div class="extras8">
									<img src="elementosextras/cortes/ovejanegra/pastel.png" class="wow animated fadeInRight">
								</div>
							</div>
						</div>
					</div>		
					<a name="LIB"></a>
					<div class="sexto_seccion">					
						<div class="bloc">
							<div class="col1">
							<div class="sobre_libertina">
									Independiente, Impulsiva, Apasionada. Gustos por los Viajes, los hobbies, el Cine, Vivir al día. Música Rock alternativo / Blues. Libre: interesada por el espíritu libre.
								</div>								
								<div class="tape4">
								</div>								
								<div class="sobre_lib">
									<div class="icono">
										<img src="Material/Material/cortes/6lalibertina/libertinaicono.png">
									</div>							
									<div class="caja">
										Uno de los estilos más antiguos y de origen Inglés con sabores a caramelo y chocolate muy evidentes debido a estas dos maltas que en conjunto con otras de especialidad, hacen una maravillosa, profunda y compleja sinfonía de sabores y aromas.
									</div>							
									<div class="caja">
										Cerveza fuerte de fermentación alta, con buen sabor a maltas y color castaño oscuro.
									</div>									
									<div class ="datos">
										<img src="Material/Material/cortes/6lalibertina/libertinadatos.png">
									</div>
								</div>			
								<div class="extras9">
									<img src="elementosextras/cortes/libertina/cervezacorcholata.png" class="wow animated fadeInLeft">
								</div>
							</div>						
							<div class="col2">							
								<div class="titulo_libertina">
									<img src="Material/Material/cortes/6lalibertina/lalibertina.png">
								</div>							
								<div class="imagen">
									<img src="Material/Material/cortes/6lalibertina/libertinabotella.png">
								</div>
								<div class="extras10">
									<img src="elementosextras/cortes/libertina/hamburguesa.png" class="wow animated fadeInRight">
								</div>
								<div class="extras11">
									<img src="elementosextras/cortes/libertina/destapador.png" class="wow animated fadeInRight">
								</div>
							</div>
						</div>
					</div>				
					
					<div class="septimo_seccion">					
						<div class="bloc">
							<a name="PUM"></a>
							<div class="pumpkin wow animated bounceInLeft">
								<div class="col1">								
									<div class="pumpkin_imagen">
										<img src="Material/Material/cortes/7lapumpkin/pumpkinbotella.png">
									</div>
								</div>								
								<div class="pumpkin_titulo">
									<img src="Material/Material/cortes/7lapumpkin/lapumpkin.png">
								</div>								
								<div class="pumpkin_sobre">
									La Pumpkin Ale es un estilo de cerveza conmemorativa del Halloween propio de la cultura norteamericana.
								</div>
								<div class="pumpkin_sobre">
									La Pumpkin de Santamaría es una cerveza hecha a base de pulpa de calabaza horneada, que ofrece un sabor dulce y ligero que es potenciado con diferentes especias de uso tradicional de otoño. Destacan sus sabores de jengibre, canela y nuez moscada.
								</div>
								<div class="pumpkin_sobre">
									Con mucho cuerpo y con un agradable color anaranjado intenso, ésta cerveza es una joya para los coleccionistas de sabores.
								</div>								
								<div class="pumpkin_datos">
									<img src="Material/Material/cortes/7lapumpkin/pumpkindatos.png">
								</div>
							</div>
						</div>
					</div>				
					
					<div class="octavo_seccion">			
						<a name="MEX"></a>
						<div class="pulque_bg">
						</div>
							<div class="bloc">
							<div class="pulque wow animated bounceInRight">
								<div class="pulque_imagen">
									<img src="Material/Material/cortes/8pulque/pulquebotella.png">
								</div>								
								<div class="pulque_titulo">
									<img src="Material/Material/cortes/8pulque/pulque.png">
								</div>							
								<div class="pulque_sobre">
									<div class="pulque_texto">
										En apoyo a los productores y con un sentido intenso de amor a nuestras raíces, Cerveza Santamaría produce cervezas especiales con productos regionales, realizando producciones creativas que armonicen con nuestros platillos y paladares mexicanos. 
									</div>
									<div class="pulque_texto">
										Mexican Curious Collection es nuestro catálogo de cervezas con sabor a México.
									</div>
									<div class="pulque_texto">
										<b>Cerveza de temporada</b>
									</div>
									<div class="pulque_texto2">
										<b>Consulta existencias</b>
									</div>
								</div>
							</div>					
						</div>
					</div>				
						<a name="REC"></a>
					<div class="noveno_seccion">
						<div class="reconocimientos">
							<div class="reco_imagen1">
								<img src="Material/Material/cortes/9reconocimientos/destapador.png" class="wow animated fadeInLeft">
							</div>
							<div class="reco_bg">
								<img src="Material/Material/cortes/2nosotros/fondotexto.png">
							</div>
							<div class="reco_imagen2">
								<img src="Material/Material/cortes/9reconocimientos/lupulo.png" class="wow animated fadeInRight">
							</div>							
							<div class="reco_titulo">
							
								Reconocimientos
							</div>		
							<div class="reco_texto">
								Reconocimiento a la Mejor Cervecería en la competencia cervecera Puebla Beer Fest 2016 Asociación de Cerveceros de Puebla.
								Diciembre 2, 2016. Puebla, Pue.
							<div class="reco_espacio">
							</div>
								Cerveza Santamaría La Amargada	<br>				
								2o lugar en la competencia cervecera 		<br>						
								Puebla Beer Fest 2016			<br>	
								Asociación de Cerveceros de Puebla.<br>	
								Diciembre 2, 2016. Puebla, Pue.<br>	
							<div class="reco_espacio">
							</div>
								Cerveza Santamaría La Pumpkin. <br>	
								3er lugar en la competencia cervecera Puebla Beer Fest 2016 <br>	
								Asociación de Cerveceros de Puebla. <br>	
								Diciembre 2, 2016. Puebla, Pue.<br>	
							<div class="reco_espacio">
							</div>
								Cerveza Santamaría La Oveja Negra <br>	
								1er lugar Festival de Cervezas Artesanales <br>	
								Puebla 2013<br>	
								Junio 28, 2013. Puebla, Pue.<br>	
							<div class="reco_espacio">
							</div>
								Cerveza Santamaría La Consentida<br>	
								3er lugar Festival de Cervezas Artesanales <br>	
								Puebla 2013<br>	
								Junio 28, 2013. Puebla, Pue.<br>	
							</div>
						</div>
						<div class="espacio2">
						</div>
						<div class="espacio">
						</div>
					</div>				
					<div class="decimo_seccion">
						<a name="PRO"></a>
						<div class="proyecto_bg">	
						</div>	
						<div class="proyecto_titulo">
							Proyectos Especiales
						</div>
						<div class="proyecto_texto">
							Santamaría se mantiene realizando nuevos estilos de cerveza a manera de Proyectos, mismos que podrían dar vida a nuevos estilos de línea.
						</div>						
						<div class="proyecto_texto">
							Los Proyectos Santamaría también pueden elaborarse a solicitud de nuestros clientes para ofrecer cervezas de la casa o para eventos especiales
						</div>					
						<div class="proyecto_texto">
							Pregunte por nuestras cervezas en proyectos.
						</div>
						<div class="tape5">
						</div>
						<div class="tape6">
						</div>
					</div>
					<div class="undecimo_seccion">
						<div class="bloc">
							<div class="contacto">
								<a name="CONT"></a>
								<div class="col1">
									<div class="contacto_titulo">
										Contacto
									</div>
									<div class ="contacto_sobre">
										¡Contáctanos y con gusto te brindaremos más información!
									</div>
									<div class="tape7">
									</div>
									<div class="tape8">
									</div>					
									<div class="contacto_input wow animated fadeInLeft">
											<form name="form" action="data/mail.php" method="post" onsumbit="return validate();">
												<label>Nombre* </label><br> 
													<input type="text" name="nombre" id="nombre" value="">
												<label>E-Mail*</label><br>
													<input type="text" name="email" id="email" value=""><br>
												<label>Teléfono</label><br>
													<input type="text" name="telefono"  id="tele" value=""><br>
												<label>Mensaje* </label><br>
													<textarea  name="mensaje" id="mensaje" rows="10" ></textarea>
													<input type="submit">
											</form>
											<?php echo $err ?>
									</div>
								</div>
								<div class="col2">
									<div class="contacto_imagenes">
										<div class="contacto_imagen1">
											<img src="Material/Material/cortes/10contacto/trigo.png" class="wow animated fadeInRight">
										</div>
										<div class="contacto_imagen2">
											<img src="Material/Material/cortes/10contacto/datoscontacto.png">
										</div>
									</div>
									<div class="links">
										<a style="display:block" href="mailto:contacto@cervezasantamaria.com/">
											<div class="link_em">
											</div>
										</a>									
										<a style="display:block" href="https://www.facebook.com/CervezaSantamaria">
											<div class="link_fb">
											</div>
										</a>
										<a style="display:block" href="https://twitter.com/santa_cervart?lang=es">
											<div class="link_tw">
											</div>
										</a>
										<a style="display:block" href="https://www.instagram.com/cervezasantamaria/">
											<div class="link_ig">
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="doceavo_seccion">
					</div>
				</div>
			</div>
		</div>
		<script src="wow/dist/wow.min.js"></script>
        <script>           
			function myFunction() {
				var menu = document.getElementById("myDropdown");
				if (menu.style.display === "none") {
					menu.style.display = "block";
				} else {
					menu.style.display = "none";
				}
			}
			
			function validate(){
			
				var count = 0;
				var nombre = document.getElementById('nombre').value;
				var email = document.getElementById('email').value; 
				var tele = document.getElementById('tele').value; 
				
				var nombreExp = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/g;
				var emailExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				var teleExp =	/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
				
				if (nombreExp.test(nombre) && emailExp.test(email) && document.getElementById("mensaje").value != '') {
					
				} else {
					window.location.reload(true);
					return true;
				}
				
			}

			new WOW().init();       
			window.onload = function() {
				var menu = document.getElementById("myDropdown");
				menu.style.display = "none";
			};
			
		</script>
	</body>
</html>