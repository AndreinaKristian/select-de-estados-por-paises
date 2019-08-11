<!DOCTYPE html>
<html>
<head>
	<title>Plugin para select con paises y estados</title>

	<!--fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<!--google material design lite -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_green-orange.min.css" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" sync>

	<!--BOOTSTRAPS SELECT -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css" sync>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

	<link href="prism.css" rel="stylesheet" />

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
	<!-- GOOGLE MATERIAL DESIGN LITE -->
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script src="http://creativeit.github.io/getmdl-select/getmdl-select.min.js"> </script>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" sync></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" sync integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" sync crossorigin="anonymous"></script>

  

	<script type="text/javascript" src="bootstrap-select.js" sync></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<script src="prism.js"></script>




	<script type="text/javascript" src="autocompletadorgeografico.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			jQuery.fn.shake = function(interval,distance,times){
			   interval = typeof interval == "undefined" ? 100 : interval;
			   distance = typeof distance == "undefined" ? 10 : distance;
			   times = typeof times == "undefined" ? 3 : times;
			   var jTarget = $(this);
			   jTarget.css('position','relative');
			   for(var iter=0;iter<(times+1);iter++){
			      jTarget.animate({ left: ((iter%2==0 ? distance : distance*-1))}, interval);
			   }
			   return jTarget.animate({ left: 0},interval);
			}

			$('.selectpicker').selectpicker();


			$("#ejemplos").click(function () { 
				$( ".card" ).shake();
			});


			$('.ancla').click(function(e){				
				e.preventDefault();		//evitar el eventos del enlace normal
				var strAncla=$(this).attr('href'); //id del ancla
					$('body,html').stop(true,true).animate({				
						scrollTop: $(strAncla).offset().top
					},1000);
				
			});

		});
	</script>

	




	<header>
		<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link ancla" href="#donaciones">Donar <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link ancla" id="ejemplos" href="#">Ejemplos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ancla" href="#pasos">Primeros pasos</a>
					</li>
				</ul>
			</div>
		</nav>
	

		<div class="container-fluid introduccion">
			<div class="row">
				<div class="col texto_introduccion" >
					<h1>Autocompletador Geografico</h1>
					<p class="">Select geografico es un pequeño plugin diseñado para el autocompletado de opciones en select de "paises" y "estados" y tambien para autocompletar la informacion de la moneda del pais seleccionado. </p>
					<p><h3> Gratis, facil, y rapido</h3></p>
					<p class="">¡Select geografico es un plugin pequeño pero eficaz, si te ha sido util podrias invitarme un cafe! Tu donacion me seria de gran ayuda</p>

					<a class="boton_descargar mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="autocompletadorgeografico.js" download="autocompletador geografico">
					  Descargar JS
					</a>
				</div>
				<div class="col ejemplo">
					<div class="card">
						<div class="card-title">¡Pruebame!</div>
					  <div class="card-body">

						  	<div class="form-group row">
						    <label for="pais" class="col-auto col-sm-1 col-form-label">
						    	<i class="fas fa-globe-americas"></i>
						    </label>
						    <div class="col">
						      <select 
								  class="selectpicker  form-control country-AG" 
								  data-live-search="true" 
								  data-live-search-normalize="true"
								  title="-- Country --"
								  name="select_pais_registro"  autocomplete="country" required style="width: 100%;">
								</select>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label  class="col-auto col-sm-1 col-form-label">
						    	<i class="far fa-flag"></i>
						    </label>
						    <div class="col">
						      <select 
								  class="  form-control state-AG" 
								  data-live-search="true" 
								  data-live-search-normalize="true"
								  title="-- Estate --"
								  name="select_estado_registro"  autocomplete="estate" required disabled="disabled" style="width: 100%;">
								  	<option selected="selected" value="-1"> Estado / Provincia</option>
								</select>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label  class="col-auto col-sm-1 col-form-label">
						    	<i class="fas fa-money-bill-alt"></i>
						    </label>
						    <div class="col">
						      <input type="text" class="currency-AG form-control" readonly="readonly" value="Moneda" style="width: 100%;" >
						    </div>
						  </div>

						  <div class="form-group row">
						    <label  class="col-auto col-sm-1 col-form-label">
						    	<i class="fas fa-dollar-sign"></i>
						    </label>
						    <div class="col" >
						      <input type="text" class="currency_code-AG  form-control"  readonly="readonly" value="Codigo de moneda" style="width: 100%;" >
						    </div>
						  </div>

					  </div>
					</div>	
					
				</div>
			</div>

			
		</div>
	</header>



	<div class="container">
		<div class="row">
			<div class="col" id="pasos">
				<dl>
				  <dt><span class="numero">1 </span>Instalacion</dt>
				  <dd>Descarga el archivo JS y agregalo a tu codigo, o incluye el link de JS <br>
				  	<pre><code class="language-markup">&lt;link href="prism.css" rel="stylesheet" /></code></pre>
				  </dd>
				  <dt><span class="numero">2 </span>Incluir Libreria</dt>
				  <dd>Autocompletador Geografico requiere <a href="https://jquery.com/download/">jquery</a>. Incluyelo en tu codigo si aun no lo has hecho<br>
				  	<pre><code class="language-markup"> &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">&lt;/script></code></pre>
				  </dd>
				  <dt><span class="numero">3 </span> Agregar Clases</dt>
				  <dd>Agrega las clases correspondientes a cada select o input segun el autocompletado que quieres que tenga. <br> 
				  	<ul >

			         <li><b class="titulo">country-AG: (Obligatorio)</b> Select de paises, con codigo ISO 3166-1 como value
			         	<br>
			         	<pre><code class="language-markup">&lt;select  class="  form-control country-AG"  title="-- Country --" name="select_pais"  autocomplete="country">&lt;/select></code></pre>
			         </li>

			         <li><b class="titulo">state-AG: (Opcional)</b> Select de estados/provincias. Se autocompleta segun la seleccion en el select de paises
			         	<br>
			         	<pre><code class="language-markup">&lt;select  class="  form-control state-AG"  title="-- state --" name="select_pais"  autocomplete="state">&lt;/select></code></pre>
			         </li>

			         <li><b class="titulo">currency-AG: (Opcional)</b> Input de moneda (Nombre de la moneda)
			         	<br>
			         	<pre><code class="language-markup">&lt;input type="text" class="currency-AG form-control" readonly="readonly" value="Moneda"  ></code></pre>
			         </li>

			         <li><b class="titulo">currency_code-AG:  (Opcional)</b> Input de codigo ISO 4217 de la moneda del pais seleccionado 
			         	<br>
			         	<pre><code class="language-markup">&lt;input type="text" class="currency_code-AG form-control" readonly="readonly" value=" Codigo de Moneda"  ></code></pre>
			         </li>


			      </ul>
				   </dd>
				  <dt><span class="numero">4 </span> ¡Listo!</dt>
				  <dd>El select de paises tendra un option por cada pais de manera automatica, solo agregando la clase. Y al seleccionar un pais se autocompletaran las demas opciones: Estados/provincias, moneda, o codigo de moneda del pais seleccionado.</dd>
				</dl>
			</div>	
		</div>

		<div class="row">
			<div class="col">
				
			</div>
		</div>
	</div>

	

	<footer class="footer  bg-dark " style="margin: 0px !important;">
		<p > Creado por <a href="https://www.linkedin.com/in/andreina-riera/">Andreina Riera</a></p>
	</footer>
	
</body>
</html>


