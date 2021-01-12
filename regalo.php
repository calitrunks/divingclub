<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Somos Aventureros - Recursos para el club de Aventureros IASD</title>	
		<meta name="description" content="Todo el material que necesitas para trabajar con tu Club de Aventureros">
		<meta name="Keywords" content="Club de Aventureros"/>
		<meta name="author" content="Carlos Astudillo">
		<!---Favicon-->
		<link rel="shortcut icon" href="img/favicon.png" />
		<!---CSS Boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		
		<!---Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!---Css Local-->
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<!--JS Bootstrap-->
		<script src="https://www.somosaventureros.cl/js/jquery-3.3.1.slim.min.js"></script>
		<script src="https://www.veterlink.com/web/js/jquery.min.js"></script>
		<script src="https://www.somosaventureros.cl/js/jquery.easing.min.js"></script>
		<script src="https://www.somosaventureros.cl/js/popper.min.js"></script>
		<script src="https://www.somosaventureros.cl/js/bootstrap.min.js"></script>
	<style>
		a:hover{
			 filter: grayscale(100%);
		}

		body{			
			background-image: url('https://www.somosaventureros.cl/images/body-bg2.png');  	
		    background-size:cover;
		    background-position: center;
		    height: 100vh;
		}
		
	</style>		
	</head>
	<body>
	<section id="main" class="pt-lg-2 pt-sm-5 pt-md-2">
		<div class="container">
			<div class="row mt-5 mt-sm-5 mt-md-5 mt-lg-3 justify-content-center align-items-center">
				<div class="col-lg-2 col-sm-2"></div>
				<div class="col-lg-8 col-sm-8">
				<div class="card text-center">
				  <div id="body-card" class="card-body">
				    <h1 class="card-title text-danger">Feliz Día del Aventurero</h1>				    
				    <p class="card-text">Estamos muy contentos de poder celebrar este día especial y es por eso que hemos preparado un pequeño regalo para ti. No esperes más y abrelo para que puedeas disfrutarlo</p>				    				    				    
				    <img width="30%" src="images/regalo.png" alt="">
				    <p class="mt-2"><button  onclick="AbrirRegalo()" class="btn btn-primary">¡Abrir mi regalo ahora!</button></p>
				    <div id="result" class="progress mt-2 d-none">
					    <div class="progress-bar progress-bar-striped bg-success" style="min-width: 0px;"></div>
				   </div>
				  </div>
				</div>
				</div>
				<div class="col-lg-2 col-sm-2"></div>
			</div>
		</div>
	</section>		
	</body>
	<script type="text/javascript">

		function AbrirRegalo(){
			EjecutaMusica();
			makeProgress();
			ParaMusica();		
			setTimeout("AbreCaja()", 12000);	
		}

		function AbreCaja(){
			html='<img width="30%" src="images/confeti.png" alt="">';
			html=html+'<h1 class="card-title text-danger">¡¡Felicidades!!</h1>';
			html=html+'<p class="text-body">Aqui tienes varios materiales para descargar e imprimir.</p>';
			html=html+'<table width="100%" class="table"><tbody><tr><td>Domino Ingles - Español</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/domino-espanol-ingles-domituti.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr><tr><td>Juego de Cartas: Sumando Puntos</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/juego-de-cartas-sumando-puntos.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr><tr><td>Juego de Mesa: Fabrica de Historias Extrañas</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/juego-fabrica-historias-extranas.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr><tr><td>Juego de Mesa: Vialmente Seguros</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/jurgo-de-mesa-vialmente-seguro.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr><tr><td>Libro para colorear Club de Aventureros Jezreel</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/libro-para-colorear-jezreel.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr><tr><td>Figuras para armar, Profesiones</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/manualidad-figuras-profesiones.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr><tr><td>Memorice: Grupo Mis Amigos</td><td class="text-right"><a class="btn btn-primary" target="_blank" href="rec/memorice-mis-amigos.pdf">Descargar <i class="fas fa-cloud-download-alt"></i></a></td></tr></tbody></table>';
			$('#body-card').html(html);
		}

		function EjecutaMusica(){
			//Parametros Audio
		    var audioElement = document.createElement('audio');
		    audioElement.setAttribute('src', 'https://www.somosaventureros.cl/rec/redoble.mp3');
		    
		    //Ejecutando Audio
		    audioElement.play();
		}

		function ParaMusica(){
			//Parametros Audio
		    var audioElement = document.createElement('audio');
		    audioElement.setAttribute('src', 'http://www.soundjay.com/misc/sounds/bell-ringing-01.mp3');
		    
		    //Pausando Audio
		    audioElement.pause();
		}

	
		// ProgresBar
	    var i = 0;
	    function makeProgress(){	    	
		    //Incrementando progresbar
	    	$('#result').removeClass('d-none');
	        if(i < 100){
	            i = i + 1;
	            $(".progress-bar").css("width", i + "%").text(i + " %");
	        }	        
	        setTimeout("makeProgress()", 100);	   	      	  
	    }	 

	    
</script>
</html>