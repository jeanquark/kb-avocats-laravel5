<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
		<meta name="description" content="KB Avocats est une Etude d'avocats sise à Neuchâtel, Suisse. Elle traite d'affaires en droit pénal, droit civil et droit administratif.">
		<meta name="keywords" content="Avocats, Neuchâtel, Droit, Justice, Tribunal, Conseils juridiques">
		<meta name="author" content="Cyril Kleger, Gabriele Beffa">

		<!-- Favicon -->
    	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        <!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    	<title>KB Avocats</title>

    	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.css" rel="stylesheet">

		<!-- Import Google Font -->
    	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

    	<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Import Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

      	<!--Import materialize.css-->
      	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71694605-9"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-71694605-9');
		</script>


		<style>
			/* Show it is fixed to the top */
			body {
  				font-family: 'Lora', serif;
			}
			.form-control:focus {
			  	border-color: rgba(52, 58, 64, 0.8);
			  	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(52, 58, 64, 0.6);
			  	outline: 0 none;
			}
		</style>
    </head>
	<body>
		<div id="app">
    		<header class="py-5" style="background-image: url('/images/livres3_3-min.jpg'); background-size: 100%;">
      			<img class="img-fluid d-block mx-auto" src="/images/logo3.png" alt="Logo de l'Etude">
    		</header>

    		<!-- Content section -->
    		<section class="py-5">
      			<div class="container" style="text-align: justify;">
        			<p class="lead">Essentiellement active dans le droit pénal, l’Etude <strong>KB Avocats</strong> accompagne également ses clients dans tous contentieux – en cours ou à venir – de nature civile ou administrative, tant devant les autorités cantonales que fédérales.<br />
					Nos deux avocats, domiciliés dans le canton, vous prodiguent leurs conseils sur les démarches à entreprendre à tout moment quelle que soit votre situation.<br />
					Idéalement situé au centre-ville de Neuchâtel, en plein cœur de la zone piétonne, nous vous garantissons une rapide prise en charge, dans les règles déontologiques, en vous assurant un traitement individualisé de votre dossier.<br />
					Inscrits au barreau de Neuchâtel, nous plaidons également devant les juridictions bernoises, fribourgeoises et vaudoises. </p>
      			</div>
    		</section>

			<div class="container">
  				<div class="row">
			    	<div class="col-md">

			      		<div class="card border-dark" style="">
			  				<div class="card-header text-center">Avocat Associé</div>
			  				<div class="card-body text-dark">
			    				<h5 class="card-title text-center">Maître Cyril Kleger</h5>
			    				<p class="card-text" style="text-align: justify;">
									<img src="/images/cyril_kleger2-min.jpg" class="rounded float-right" alt="Photo Cyril Kleger" style="width: 50%; padding: 0px 0px 0px 10px;" />
				    				Inscrit au barreau de Neuchâtel, Cyril Kleger exerce son activité essentiellement en matière de droit pénal mais intervient régulièrement dans le cadre des litiges matrimoniaux et des droits des contrats.
									En parallèle de son activité d’avocat, il revêt la fonction de Juge d’instruction auprès de la Justice militaire.<br />
									Né en 1988, il est titulaire d’une Maîtrise en droit de l’Université de Neuchâtel et titulaire du Brevet d’Avocat Bernois. Il vient d'achever récemment un <i>Certificate of Advanced Studies</i> en magistrature pénale dans sa discipline de prédilection.<br />
									Membre fondateur du Jeune Barreau Neuchâtelois dont il assume le service de permanence des avocats de première heure, Cyril Kleger cultive un goût prononcé pour les lettres, la presse et le sport.<br />
									Ancien arbitre de première ligue de football, Cyril Kleger garde encore un contact régulier avec le milieu du ballon rond et siège dans la Commission des arbitres de l’ACVF en sa qualité de Chef d’instruction.<br />

									<div class="text-center">
										<button type="button" class="btn btn-dark" @click="toggleShow('cyril')">
											<span v-if="showMoreCyril">Moins <font-awesome-icon icon="angle-up" /></span>
											<span v-else>Plus <font-awesome-icon icon="angle-down" /></span>
										</button>
									</div>

									<div>
										<slide-up-down :active="showMoreCyril" :duration="1000">
											<br />
											<ul>
											    <li>Membre de la Fédération Suisse des Avocats</li>
												<li>Membre de l’Ordre des Avocats Neuchâtelois et de l’Association des Avocats Bernois</li>
												<li>Membre fondateur du Jeune Barreau Neuchâtelois</li>
												<li>Inspecteur & Instructeur diplômé par l’Association Suisse de Football</li>
											</ul>
											<br />
										</slide-up-down>
									</div>
								</p>
			  				</div>
						</div>
						<br />

			    	</div>
			    	<div class="col">
			      		<div class="card border-dark" style="">
			  				<div class="card-header text-center">Avocat Associé</div>
			  				<div class="card-body text-dark">
			    				<h5 class="card-title text-center">Maître Gabriele Beffa</h5>
			    				<p class="card-text" style="text-align: justify;">
			    					<img src="/images/gabriele_beffa-min.jpg" class="rounded float-left" alt="Photo Gabriele Beffa" style="width: 53%; padding: 0px 10px 0px 0px;" />
			    					Inscrit au barreau de Neuchâtel depuis 2014, Gabriele Beffa offre principalement ses services en matière matrimoniale, en défense pénale, dans le cadre du droit des obligations et dans le domaine administratif.
									Gabriele Beffa est né le 9 octobre 1986 à Genève. Après avoir obtenu sa maturité gymnasiale, il a entamé des études de droit à l’Université de Neuchâtel en 2006 sanctionné d’une Maîtrise en Droit en orientation « droit de la santé et des biotechnologies » en 2012.<br />
									Titulaire du Brevet d’Avocat Neuchâtelois, il a d’abord exercé en qualité de collaborateur au sein de l’Etude Nardin & Röthlisberger à La Chaux-de-Fonds puis obtient en 2016 un <i>Certificate of Advanced Studies</i> en magistrature pénale.<br />
									Également Juge d’instruction militaire, il est adepte de sport en général, plus particulièrement d’unihockey et effectue une activité de journaliste sportif dans le domaine du hockey sur glace.
									<div class="text-center">
										<button type="button" class="btn btn-dark" @click="toggleShow('gabriele')">
											<span v-if="showMoreGabriele">Moins <font-awesome-icon icon="angle-up" /></span>
											<span v-else>Plus <font-awesome-icon icon="angle-down" /></span>
										</button>
									</div>

									<div>
										<slide-up-down :active="showMoreGabriele" :duration="1000">
											<br />
											<ul>
											    <li>Membre de la Fédération Suisse des Avocats</li>
												<li>Membre de l’Ordre des Avocats Neuchâtelois</li>
												<li>Membre du Jeune Barreau Neuchâtelois</li>
											</ul>
											<br />
										</slide-up-down>
									</div>
								</p>
			  				</div>
						</div>
						<br />
			    	</div>
			  	</div>
			  	<br /><br />

			  	<div class="row">

			  		<div class="col-md-6 col-sm-12" style="">
			  			<h3 class="text-center">Où nous trouver</h3>
			  			{{-- <div id="map"></div> --}}
			  			<p style="font-size: .8em; padding: 10px; border: 1px solid #343a40 ; border-radius: 5px;">N'hésitez pas à venir nous rencontrer directement à notre Etude. En cas de disponibilité nous vous recevrons immédiatement. Dans le cas contraire nous fixerons un rendez-vous dans les plus brefs délais.</p><br />

			  			<div style="overflow: hidden; width: 100%; position: relative;"><iframe width="700" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Rue%20du%20Seillon%2010%2C%20Neuch%C3%A2tel+(KB%20Avocats)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;"></div></div><br />

			  			<div class="row">
				  			<div class="col-6">
					  			<p style="text-font: 1.2em;">
					  				<b>KB Avocats</b><br />
						  			Rue du Seyon 10<br />
						  			Case postale<br />
						  			2001 Neuchâtel<br />
						  		</p>
					  		</div>
					  		<div class="col-6">
					  			<p>
						  			<i class="fas fa-phone"></i>&nbsp;(032) 722 61 70<br />
						  			<i class="fas fa-fax"></i> (032) 722 61 71<br />
						  			<i class="fas fa-envelope"></i>&nbsp;etude@kb-avocats.ch
						  		</p>
						  	</div>
					  	</div>
			  		</div>
			  		<contact-form></contact-form>
			  	</div>
			  	<br /><br />
			</div>

			<!-- Footer -->
    		<footer class="py-5 bg-dark">
      			<div class="container">
        			<p class="m-0 text-center text-white">Tous droits réservés &copy; KB Avocats <?php echo date('Y'); ?></p>
      			</div><!-- /.container -->
    		</footer>

		</div>

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      	<script src="{{ asset('/js/app.js') }}"></script>

		<!-- Google Maps -->
      	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuefeW6qmAGwWenc0MXAPJ-XylDLxyu78&callback=initMap"
        async defer></script>

		<!-- Disable send message button after click -->
        <script>
        	$(document).ready(function() {
        		// $("#submitButton").attr("disabled", false);
        	});
        	$("#submitButton").click(function() {
        		// $(this).attr("disabled", true);
        	});
        </script>

        <!-- VeeValidate -->
  		{{-- // <script src="https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js"></script> --}}
	</body>
</html>