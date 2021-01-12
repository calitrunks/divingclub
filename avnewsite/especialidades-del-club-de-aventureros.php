<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta charset="UTF-8">
<title>Somos Aventureros - Especialidades del club de Aventureros</title>	
<meta name="description" content="Listado de Especialidades del Club de Aventureros. Especialidades Espirituales, Habilidades Domesticas, Habilidades, Naturaleza y Artes ">
<?php include('header.php'); ?>
<section id="content" class="pb-3">
	<div class="container">
		<div class="row mt-2">
			<div class="col-1"></div>
			<div class="col-10">
				<h4 class="text-center">Especialidades del Club de Aventureros</h4>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row mt-2">
			<div class="col-1"></div>
			<div class="col-10">
				<input onkeyup="BuscaEspecialidad()" id="buscador" type="text" class="form-control" placeholder="¿Que especialidad estas buscando?">
			</div>
			<div class="col-1"></div>
		</div>		
		<div class="row mt-5 d-flex justify-content-center align-items-center">
			<div class="card mb-3 bg-light col-lg-5 col-sm-12 especialidad manualidades rounded-0">
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_manualidades.gif" />
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Manualidades</h6>			        
			        <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/manualidades.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>			
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad artista rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_artista.gif" />
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Artista</h6>			        
			        <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="rec/especialidades/arte.pdf">Requisitos</a></small> <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=BZ0sGU3ItGs&list=PLCB1FFVN9fsPk5OhxZ3HFFOXg7S1ckAXt">Material de apoyo</a></small></p>
			      </div>
			    </div>
			  </div>
			</div>										
			<div class="card mb-3 bg-light col-lg-5 col-sm-12 especialidad cesteria rounded-0">
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_cesteria.gif" />
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Cesteria</h6>			        
			       <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/cesteria.pdf">Requisitos</a></small><!--  <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>			
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad critico rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_criticocomunicacion.gif" />
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Critico de los medios</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/critico_medios_comunicacion.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>	
			<div class="card mb-3 bg-light col-lg-5 col-sm-12 especialidad trovador rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_artes.gif" />
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Trovador</h6>			        
			       <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/trovadores.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>													
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad cometas rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_barriletes.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Cometas</h6>			        
			       <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/cometas.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>		
			<div class="card mb-3 bg-light col-lg-5 col-sm-12 especialidad musica rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			      <img src="img/especialidades/parche_musica.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Música</h6>			        
			        <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/musica.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>													
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad colaboracion hogar rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      
			     <img alt="Colaboracion en el hogar" src="img/especialidades/parche_colaboracionhogar.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Colaboracion en el hogar</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="rec/especialidades/colaboracion_en_el_hogar.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>													
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad manualidades hogareñas rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img alt="Manualidades Hogareñas" src="img/especialidades/parche_manualidadeshogarenas.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Manualidades Hogareñas</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/manualidades_hogarenas.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad cortesia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img alt="Cortesía" src="img/especialidades/parche_cortesia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Cortesía</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/cortesia.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad higiene rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img alt="higiene" src="img/especialidades/parche_higiene.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Higiene</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/higiene.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad jardinieria rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img alt="jardineria" src="img/especialidades/parche_jardineria.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Jardinería</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/jardineria.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad ayudante cocina rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img alt="Ayudante de cocina" src="img/especialidades/parche_ayudantecocina.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Ayudante de cocina</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/ayudante_cocina.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad costura rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img alt="Manualidades Hogareñas" src="img/especialidades/parche_costura.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Costura</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/costura.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="#">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad enfermedades contagiosas rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img width="116px" height="87px" alt="Enfermedades Contagiosas" src="img/especialidades/parche-enfermedades-contagiosas.jpg">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Enfermedades Contagiosas</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="http://deptos.adventistas.org.s3.amazonaws.com/aventureros/oma/OMA011-20es.pdf">Requisitos</a></small> <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad amigos jesus rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Amigos de Jesus" src="img/especialidades/parche_amigosdejesus.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Amigos de Jesús</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/amigo_de_jesus.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad biblia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Biblia I" src="img/especialidades/parche_biblia1.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Biblia I</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/biblia1.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad biblia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Biblia II" src="img/especialidades/parche_biblia2.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Biblia II</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/biblia2.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad mayordomia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Mayordomia" src="img/especialidades/parche_mayordomia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Mayordomia</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/mayordomia.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad temperancia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Temperancia" src="img/especialidades/parche_temperancia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Temperancia</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/temperancia.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad pioneros rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Pioneros I" src="img/especialidades/parche_pioneros1.jpg">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Pioneros de la Iglesia I</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/pioneros1.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad pioneros rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Pioneros II" src="img/especialidades/parche_pioneros2.jpg">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Pioneros de la Iglesia II</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/pioneros2.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=oMrLS3UCz64&list=PLCB1FFVN9fsO4HkPbWSeF9m77s0Gnp0JA">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad promesas biblicas rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Promesas Bíblicas" src="img/especialidades/parche_promesas_biblicas.jpg">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Promesas Bíblicas</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/promesas_biblicas.pdf">Requisitos</a></small> <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" data-toggle="tooltip" data-placement="right" title="Aportado por los amigos de Club de Aventureros en Familia" href="https://www.youtube.com/watch?v=d2ZwfyD3yPU&list=PLCB1FFVN9fsPGlo83aNDQqJjvlpSNA3mI">Material de apoyo</a></small></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad regreso jesus rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Regresos de Jesús" src="img/especialidades/parche_regreso_de_jesus.jpg">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Regreso de Jesús</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/regreso_de_jesus.pdf">Requisitos</a></small> <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad gimnasia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Gimnasia" src="img/especialidades/parche_gimnasia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Gimnasia</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/gimnasia.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad amigo servicial rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Amigo Servicial" src="img/especialidades/parche_amigoservicial.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Amigo Servicial</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/amigo_servicial.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad astronomia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Astronomia" src="img/especialidades/parche_astronomia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Astronomia</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/astronomia.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad arte acampar rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Arte de Acampar" src="img/especialidades/parche_acampante.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Arte de Acampar</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/campamentos.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad periodista rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Periodista" src="img/especialidades/parche_periodista.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Periodista</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/periodista.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad carpintero rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Carpintero" src="img/especialidades/parche_carpintero.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Carpintero</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/carpintero.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad coleccionista rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="coleccionista" src="img/especialidades/parche_coleccionista.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Coleccionista</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/coleccionista.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad computacion rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="computacion" src="img/especialidades/parche_computacion.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Computacion</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/computacion.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad patinaje rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="patinaje" src="img/especialidades/parche_patinaje.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Patinaje</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/patinaje.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad excursionista rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="excursionista" src="img/especialidades/parche_excursionista.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Excursionista</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/exploracion.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad guia turismo rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Guia de Turismo" src="img/especialidades/parche_guia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Guia de Turismo</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/guia_turismo.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad observador rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="observador" src="img/especialidades/parche_observador.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Observador</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/observador.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad natacion rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Natacion I" src="img/especialidades/parche_natacion1.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Natacion I</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/natacion1.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad natacion rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Natacion II" src="img/especialidades/parche_natacion2.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Natacion II</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/natacion2.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad lenguaje señas rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Lenguaje de Señas" src="img/especialidades/parche_lenguaje_para_sordos.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Lenguaje de Señas</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/lenguaje_para_sordos.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad cuidado salud rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Cuidado de la Salud" src="img/especialidades/parche_cuidado_de_la_salud.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Cuidado de La Salud</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/cuidado_de_la_salud.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad ayudante primeros auxilios rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Ayudante de Primeros Auxilios" src="img/especialidades/parche_primerosauxilios.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Ayudante de Primeros Auxilios</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/primeros_auxilios.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad seguridad hogar rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Seguridad en el Hogar" src="img/especialidades/parche_seguridad.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Seguridad en el Hogar</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/seguridad.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad seguridad carreteras rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Seguridad en Carreteras" src="img/especialidades/parche_seguridad_carreteras.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Seguridad en Carreteras</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/seguridad_carreteras.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad atleta rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Atleta" src="img/especialidades/parche_atleta.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Atleta</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/atleta.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad estado fisico rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Estado Físico" src="img/especialidades/parche_estadofisico.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Estado Físico</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/estado_fisico.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad excelencia lectura rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Excelencia en Lectura" src="img/especialidades/parche_excelencia_lectura.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Excelencia en Lectura</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/excelencia_en_lectura.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad ciclismo rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="ciclismo" src="img/especialidades/parche_ciclismo.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Ciclismo</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/ciclismo.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad amigo naturaleza rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Amigo de la Naturaleza" src="img/especialidades/parche_amigonaturaleza.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Amigo de la Naturaleza</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/amigo_naturaleza.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad cuidado animales rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Cuidado de los Animales" src="img/especialidades/parche_amigoanimales.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Cuidado de los Animales</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/cuidado_los_animales.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad arboles rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Arboles" src="img/especialidades/parche_arboles.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Arboles</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/arboles.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad aves rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="aves" src="img/especialidades/parche_aves.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Aves</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/aves.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad ecologia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="ecologia" src="img/especialidades/parche_ecologia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Ecología</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/medio_ambiente.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad flores rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="flores" src="img/especialidades/parche_flores.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Flores</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/flores.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="card mb-3 ml-2 bg-light col-lg-5 col-sm-12 especialidad geologia rounded-0" >
			  <div class="row no-gutters">
			    <div class="col-md-4 d-flex justify-content-center align-items-center">			      			     
			     <img  alt="Geología" src="img/especialidades/parche_geologia.gif">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h6 class="card-title">Geología</h6>			        
			      <p class="card-text"><small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal" href="https://www.somosaventureros.cl/rec/especialidades/geologia.pdf">Requisitos</a></small> <!-- <small class="badge badge-danger"><a target="_blank" class="text-white font-weight-normal"  href="https://www.youtube.com/watch?v=f9V6j2mfJdE">Material de apoyo</a></small> --></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>		
	</div>
</section>	
<script>
	function BuscaEspecialidad(){
		var key = $('#buscador').val().toLowerCase();						
		if(key=="" || key.length<3){
			$('.especialidad').show();
		}else{
		
			$('.especialidad').hide();						
			$("div[class*='"+key+"']").show();			
		}
	}

	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	})
</script>		