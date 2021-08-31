<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="UTF-8">
	<meta name="description"
		content="KB Avocats est une Etude d'avocats sise à Neuchâtel, Suisse. Elle traite d'affaires en droit pénal, droit civil et droit administratif.">
	<meta name="keywords" content="Avocats, Neuchâtel, Droit, Justice, Tribunal, Conseils juridiques">
	<meta name="author" content="Cyril Kleger, Gabriele Beffa">

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>KB Avocats</title>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.css" rel="stylesheet">

	<!-- Import Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Import Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

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
		<vue-carousel></vue-carousel>

		<!-- Content section -->
		<section class="py-5">
			<div class="container" style="text-align: justify;">
				<p class="lead">Fondée en 2019, l’Étude est née de la volonté de constituer une équipe au service de la
					défense
					pénale. Aujourd’hui, l’Étude accompagne ses clients dans tous contentieux – en cours ou à venir –
					tant devant les autorités cantonales que fédérales.</p>
				<p class="lead">L’Étude Kleger & Beffa a délibérément choisi de rester une Étude à taille humaine. Nos
					deux avocats,
					domiciliés dans le canton, vous prodiguent leurs conseils avisés sur les démarches à entreprendre à
					tout moment quelle que soit votre situation. Par son esprit d’entente, l’Étude se distingue par le
					regard croisé que jette chaque associé sur votre affaire, spécificité qui représente une réelle
					valeur ajoutée et contribue à la mise en œuvre de solutions rapides et efficaces.</p>
				<p class="lead">Idéalement situé au centre-ville de Neuchâtel, en plein cœur de la zone piétonne, nous
					vous
					garantissons une rapide prise en charge, dans le strict respect des règles déontologiques notamment
					du secret professionnel, en vous assurant un traitement individualisé de votre dossier.</p>
				<p class="lead">Inscrits au barreau de Neuchâtel, nous plaidons également régulièrement devant les
					juridictions
					bernoises, fribourgeoises et vaudoises.</p>

			</div>
		</section>

		<div class="container">

			<lawyers-description></lawyers-description>

			<br /><br />

			<div class="row">

				<div class="col-md-6 col-sm-12" style="">
					<h3 class="text-center">Où nous trouver</h3>
					<p style="font-size: .8em; padding: 10px; border: 1px solid #343a40 ; border-radius: 5px;">Afin de
						nous permettre une prompte prise en charge, nous vous invitons, lorsque cela est possible, à
						indiquer avec précision les faits concernés. Toutes les demandes sont traitées dans le respect
						le plus strict de la confidentialité et du secret professionnel.</p><br />

					<div style="overflow: hidden; width: 100%; position: relative;"><iframe width="700" height="440"
							src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Rue%20du%20Seillon%2010%2C%20Neuch%C3%A2tel+(KB%20Avocats)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"
							frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						<div
							style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
						</div>
					</div><br />

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
				<p class="m-0 text-center text-white">Tous droits réservés &copy; KB Avocats <?php echo date('Y'); ?>
				</p>
			</div><!-- /.container -->
		</footer>

	</div>

	<!-- Scripts -->
	<script :src="`https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js`"></script>
	<script src="{{ asset('/js/app.js') }}"></script>

	<!-- Google Maps -->
	<script>
		// $(document).ready(function() {
        		// $("#submitButton").attr("disabled", false);
        	// });
        	// $("#submitButton").click(function() {
        		// $(this).attr("disabled", true);
        	// });
        	var google_api_key = "{{ env('MIX_GOOGLE_API_KEY') }}"
	</script>

	<script :src="`https://maps.googleapis.com/maps/api/js?key=${google_api_key}&callback=initMap`" async defer>
	</script>

	<!-- Disable send message button after click -->

	<!-- VeeValidate -->
	{{-- // <script src="https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js"></script> --}}
</body>

</html>