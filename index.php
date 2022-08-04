<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Centro Michimiau</title>
		<link rel="stylesheet" type="text/css" href="estilo_cascada.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	</head>
	<body>
		<header>
			<div id="fondo_banner"></div>	
			<nav id="menu">
				<ul>				
				<li><a href="#texto">Nuestra Historia</a></li>
                <li><a href="#presentacion">Nuestra Tarea</a></li>
                <li><a href="#gatito">En Adopción</a></li>
                <li><a href="#adoptados">Adoptados</a></li>
                <li><a href="#consejos">Consejos Útiles</a></li>
                <li><a href="#colaboraciones">Colaboraciones</a></li>              
                </ul>
			</nav>
		</header>	
		<section id="tarea">
		<div id="gatito"></div>
		<div id="texto">
			<h3><p>Hagamos un poco de historia...</p></h3>
			<p>Todo comenzó hace 30 años cuando me mudé a metros de la cancha de Atlanta, observé que allí habitaba una colonia importante de felinos en estado lamentable. Al principio, les llevaba alimentos hasta que conocí a dos mujeres que ya se encargaban de ello y enfoqué en la parte sanitaria.</p>
			<p>El objetivo inmediato fue poner fin a la reproducción y diminuir la población mediante la adopción y tenencia responsable.</p>
			<p>Nuestra obra fue ejemplo para muchos que siguieron nuestros pasos y pudieron controlar otras colonias en distintos lugares.</p>
		</div>
	    </section>
		<section id="historia">
		<div id="presentacion">
			<h1><em>Nuestra Tarea...</em></h1>
			<p>El Centro de Adopción y Rescate Michimiau es una organización especializada en gatitos sin hogar o que necesitan ser reubicados.</p>
			<p>En la primer etapa los gatitos son evaluados por nuestros veterinarios y especialistas, quienes se encargan de decidir en cada caso, cual es el tratamiento y hogar apropiado para cada uno de ellos.</p>
			<p>En la segunda etapa los gatitos son ofrecidos en adopción. Con nuestro asesoramiento, los adoptantes seleccionan el gatito que más se ajuste a su gusto y necesidad.</p>
			<p>En la tercer etapa se realiza un seguimiento y así se verifica que la adaptación se este llevando a cabo con normalidad.</p>
			<p>Durante la estadía en nuestro Centro, les brindamos un ambiente de amor y contención, como así también todos los cuidados necesarios para que cada gatito llegue a los adoptantes en óptimas condiciones tanto físicas como emocionales.</p>
			<p>Otra de las tareas que realizamos, es crear conciencia sobre la <em>tenencia responsable</em> ya que nuestro trabajo requiere del tiempo y esfuerzo de muchas personas. Si los adoptantes no los cuidan como es debido, dejándolos salir a la calle, abandonandolos ante una mudanza o no esterilizandolos, nuestra tarea resulta inútil.</p>
			<p>Si querés ser parte de nuestro equipo todo tipo de colaboración será bienvenida. El Centro Michimiau se sostiene gracias al aporte de gente que valora nuestra tarea y dedicación...gracias!!</p>
			<h2><p align="right"><em>Centro Michimiau</em></p></h2>
		</div>
		<div id="adoptados">
			<a href="imagenes/carrousel_sushi.jpg" data-lightbox="adoptados" data-title="Sushi"><img src="imagenes/carrousel_sushi.jpg" class="carrousel1"></a>
			<a href="imagenes/carrousel_dan.jpg" data-lightbox="adoptados" data-title="Dan"><img src="imagenes/carrousel_dan.jpg" class="carrousel2"></a>	
			<a href="imagenes/carrousel_rocky.jpg" data-lightbox="adoptados" data-title="Rocky"><img src="imagenes/carrousel_rocky.jpg" class="carrousel3"></a>	
			<a href="imagenes/carrousel_milo.jpg" data-lightbox="adoptados" data-title="Milo"><img src="imagenes/carrousel_milo.jpg" class="carrousel4"></a>	
		</div> 
		<div id="colaboraciones">
		<h2><p><em>Ayudanos a ayudar!!</em></p></h2>		
		<p>Número de cuenta 373922</p>
		<p>CBU: GATO.PERRO.ARDILLA</p>
		<p>Banco Santander Río/Sucursal 792</p>
		<h4><p><em>Nuestra tarea depende de vos!!!</em></p></h4>
		</div>
		<div id="consejos">	
				<p class="utiles">Consejos útiles para la adopción y el cuidado exitoso del gatito</p>
				<nav id="menu_consejos">
	    	<ul>
	    		<li><a href="index.php?id=el#caja_consejos">Elección del Gatito</a></li>
	    		<li><a href="index.php?id=adap#caja_consejos">Adaptación</a></li>
	    		<li><a href="index.php?id=ali#caja_consejos">Alimentación</a></li>
	    		<li><a href="index.php?id=edu#caja_consejos">Educación</a></li>
	    		<li><a href="index.php?id=sani#caja_consejos">Cuidados Sanitarios</a></li>
	    		<li><a href="index.php?id=resp#caja_consejos">Tenencia Responsable</a></li>	    		
	    	</ul>
	    	</nav>	    	
	    	<?php  
	    	if (isset($_GET['id'])) {	    	 
	    	   		   		
	    	switch ($_GET['id']) {
	    		case 'el':
	    		      $titulo = "Elección del Gatito";
	    		      $contenido = "Por lo general los adoptantes buscan un gatito bebé porque creen que lo podrán acostumbrar más facilmente, esta es una idea muchas veces equivocada ya que eso depende de las características de cada gato y de la situación en particular de cada adoptante.
Hay casos dónde el adoptante trabaja todo el día y un gatito bebé se criará solito, en ese caso se volverá asustadizo y arisco por falta de contacto humano.
También hay que considerar que un gatito bebé requiere supervisión, ya que su sistema inmune es inmaduro aún y está más expuesto a distintas enfermedades, en cambio el de un gato algunos meses mayor, estará mucho más fuerte y no requerirá de tanta observación, pudiendo ser acostumbrado y educado de igual manera.
Siempre es mejor un gato jóven con un caracter dócil y bien definido al de un bebé que aún está en formación, muchas veces puede ser beneficioso pero en otros casos puede ser contraproducente, todo depende de la situación de cada adoptante en particular, por eso es tan importante dejarse guiar por especialistas para que la adopción realmente sea exitosa.";
                       $imagen = "eleccion.jpg";	    			
	    			break;	   
	    			case 'adap':
		    	    $titulo = "Adaptación";
	    			$contenido = "Cuando llevamos un gato a casa existe un lapso de tiempo, generalmente no mayor a 3 o 4 días dependiendo de la personalidad de cada gato, dónde necesita adaptarse al nuevo hogar, para él, su nuevo territorio.
La tendencia al principio, es esconderse y de a poco ir inspeccionando el lugar hasta saber que es seguro. No hay que olvidarse que cuando se traslada un gato y llega a un lugar desconocido, él no sabe para qué está allí y con qué motivo, por eso hay que ir ganándose la confianza del animal de a poco.
Durante ese tiempo, lo aconsejable, es ir hablándole y si es posible ir acariciándolo, también ofreciéndole comida, para hacerle saber de que está todo bien y que no hay de que preocuparse.
Es normal que al principio el gatito se rehúse a comer, es por el estado de estrés que le produce la adaptación, pero a medida que transcurre el tiempo, comienza a comer, va a las piedritas y ya no se esconde, es decir, que se va adaptando.
Todo este tiempo de adaptación, puede ser menor o mayor dependiendo de cada gato, o sea que a medida que vemos que se van cumpliendo las pautas dadas todo marcha bien.";
                    $imagen = "adaptacion.jpg";
	    			break;
	    			case 'ali':
	    			$titulo = "Alimentación";
	    			$contenido = "Hasta un mes después de la castración, es aconsejable suministrarle alimento balanceado para gatitos o kitten, ya que proporciona los nutrientes necesarios para gatitos en crecimiento.
Pasado ese período de tiempo hay que pasar a alimento para gatos adultos, así evitaremos problemas de obesidad.
Otro factor importante con respecto al alimento, es elegir uno de buena calidad, ya que por lo general los alimentos demasiados económicos traen consecuencias de salud a corto o largo plazo, ej. diarreas y problemas urinarios y renales, entre otros. Todo lo que podamos ahorrar en un alimento de baja calidad lo gastaremos luego en consultas veterinarias con el riesgo de salud que ello significa.
El mejor alimento es el Royal Canin (toda la línea incluyendo la premium que es más económica, no así la selección). Con alimentos de mala calidad he tenido cuadros de diarrea o materia fecal muy blanda y con olor fuerte, e infecciones urinarias.
Con un buen alimento balanceado y agua cambiada a diario, no es necesario suministrar ningún otro tipo de alimento.
NO dar leche, lo más probable es que cause diarrea ya que rompe el frágil equilibrio intestinal del gato.";
                        $imagen = "alimentacion.jpg";
	    				break;
	    				case 'edu':
	    				$titulo = "Educación";
	    				$contenido = "Los gatos, cachorros y adultos, necesitan ser educados no sólo para que sepan hacer sus necesidades en las piedritas sino también para que respeten las normas de la casa.
Por ejemplo, si deseamos que el gato no se suba a la mesa o se cuelgue de las cortinas, cuando lo haga o intente hacerlo sólo debemos indicar que eso no está bien, para ello es suficiente con asustarlo mediante un fuerte chistido y si eso no funciona con un machete de diario golpeamos en algún lugar. Con un par de veces que mantengamos límites claros el gatito aprenderá muy pronto que es lo que puede hacer y que es lo que no y ya no hará falta asustarlo...ellos entienden más de lo que nosotros creemos!
Con respecto al uso de las piedritas, cuando el gatito llega al nuevo hogar, es conveniente mostrarle dónde está su baño. En caso de que se desoriente y haga sus necesidades en algún otro lugar, una buena idea es recoger lo que hizo y colocarlo en las piedritas.
También es un buen consejo, limitarle el espacio a un sitio reducido, dónde no tenga demasiadas alternativas que ir a su bandeeja sanitaria, eso hasta que tenga la conducta afianzada.
Independientemente de la edad del gatito, ellos aprenden con facilidad, es un error pensar que sólo se puede educar a un gatito pequeño.";
                        $imagen = "educacion.jpg";
	    				break;
	    				case 'sani':
	    				$titulo = "Cuidados Sanitarios";
	    				$contenido = "Es muy importante tener al gatito con sus controles veterinarios al día, así evitaremos problemas de salud.
Lo ideal es desparasitar internamente cada 3 o 4 meses, y de forma externa todos los meses así prevenimos problemas de salud a causa de parasitos.
Es importante mantener cuchas, almohadones y mantitas, en condiciones de higiene adecuadas para mantener la situación controlada.
Siempre hay que estar atentos sobre la conducta del gato. Un gato sano, come, juega (en especial si es cachorro), va al baño y duerme. Si observamos que duerme todo el día, no come, va al baño, rasca las piedras y no hace nada, un cambio de hábito o de conducta, etc., puede ser un signo de que algo no está bien. Este tipo de síntomas, cuando más temprano se detecten será más sencillo el tratamiento.
Los gatos a partir de los 7 meses, ya sean machos o hembras, comienzan a dar signos de madurez sexual. Como consecuencia de ello se empiezan a producir problemas de conducta, que si no son tratados a tiempo por medio de la esterilización, puede tener consecuencias muy desagradables e inclusive irreversibles aún después de la operación.
También es un mito que el gato/a castrado pierda interés por todo, el animal sigue conservando exactamente las mismas características que antes, sólo pierde el interés sexual.";
                            $imagen = "cuidados_sani.jpg";
	    					break;
	    					case 'resp':
	    					$titulo = "Tenencia Responsable";
	    					$contenido = "Recordemos que al adoptar un gatito o cualquier otro ser vivo, estamos asumiendo un compromiso muy importante y para toda la vida.
Hay que suministrarle los cuidados básicos, que no son tantos pero son importantes para la salud del animalito.
Abandonaríamos un hijo por mudanza, por separación o porque nos vamos de vacaciones y no sabemos dónde dejarlo...?? Son sólo algunos de los tantos argumentos de abandono. Un gato acostumbrado a un entorno hogareño se ve desesperado ante una situación de abandono, no entiende qué hizo ni por qué lo abandonaron, no sabe cómo manejarse ni los peligros de la calle, tampoco sabe cómo cazar para procupar su propio alimento ya que por generaciones, los felinos han sido sociabilizados de forma temprana. Es decir, han perdido su instinto natural de supervivencia. Algún felino que viva en alguna zona abierta, aún mantiene ese instinto vigente, aunque sólo caza por naturaleza y no por hambre. Siempre hay alguien dispuesto a adoptarlo...no lo abandones!";
                            $imagen = "tenencia.jpg";
	    						break;
	    	}
	    	 ?>
		</div>
	    </section> 
	    <section id="caja_consejos">
	    		<div id="contenido_consejos">
	    		    <div id="img_consejos">
	    		    <img src="imagenes/<?php echo $imagen; ?>"></div> 		    
	    		    <div id="texto_consejos">
	    		    	<h5>
	    		    		<?php echo $titulo; ?>
	    		    	</h5>
	    		    	<p>
	    		    		<?php echo $contenido; ?>
	    		    	</p>
	    		    </div>	    		
	    	</div>
	    	<?php } ?>
	    </section>     
        <section id="registro">        	
		<h2 class="destacar">Solicitud de Adopción</h2>
		<form action="consulta1.php" method="POST">
			<label form="Nombre">Nombre *</label>
			<input type="text" placeholder="Nombre" name="nombre" maxlength="30"/>
			<br><br>
			<label form="Apellido">Apellido *</label>
			<input type="text" placeholder="Apellido" name="apellido" maxlength="30"/>
			<br><br>
			<label form="Telefono">Teléfono *</label>			
			<input type="Teléfono" name="telefono" placeholder="Número de Tel"/>
			<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label form="Mail">Mail *</label>
			<input type="email" name="mail" placeholder="Mail" required="true" maxlength="100"/>
			<br><br><br>
			<textarea name="comentario" placeholder="Dejá tu comentario indicando tu búsqueda" rows="5" class="textarea"></textarea>
			<br><br>
			<input type="submit" class="boton" value="Enviar Solicitud"/>	
        </form> 
        <?php 
        if(isset($_GET['ok'])) {
        	echo "<h2>Tu consulta ha sido enviada</h2>";
        }
         ?>
        </section>
	    <footer>
		<div id="contacto">
		<p><strong>Cel. 11 5011 0798 / 11 5415 3947<strong></p></div>
		<div id="redes">
		<p>Facebook/Instagram <em>Centro Michimiau</em></p></div>				
		<div id="copyright">
		<p>Copyright 2005 - 2021 Centro Michimiau is Trademark. All Rights Reserved</p></div>		
	    </footer>
	    <script type="text/javascript" src="js/lightbox.js"></script>
	    <script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
	</body>	
</html>