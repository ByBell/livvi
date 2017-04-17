<?php
session_start() ;
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LIVVI L'IUT en Visite Virtuelle Interactive - DUT MMI IUT Velizy - Agence Santhor</title>
	<meta name="description" content="Site projet  Livvi par agence Santhor DUT MMI Vélizy" />
	<meta name="keywords" content="visite, virtuelle, etude, étude, orientation, velizy, vélizy, dut, iut, mmi, interactif, interactive, livvi, santhor, agence, etudiant, étudiant, etudiants, étudiants, projet" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Exo|Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="css/reset.css">
	<!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Resource style -->
	<link rel="stylesheet" href="css/style-timeline.css">
	<!-- Resource style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font Awesome icône  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<!-- Librarie jQuery -->
	<!--	<script src="js/parallax.min.js"></script>-->

	<!--	Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">



</head>

<body>
	<header class="cd-auto-hide-header">
		<div class="logo" onclick="baccueil()">
			<a href="#"><img src="img/LogoLIVVIv2vectorise.svg" alt="Logo"></a>
		</div>

		<nav class="cd-primary-nav">
			<a href="#cd-navigation" class="nav-trigger">
				<span>
				<em aria-hidden="true"></em>
				Menu
			</span>
			</a>
			<!-- .nav-trigger -->

			<ul id="cd-navigation">
				<li id="baccueil" onclick="baccueil()"><a class="active" href="#">Accueil</a></li>
				<li id="btimeline" onclick="btimeline()"><a href="#">Timeline</a></li>
				<li id="btelechargement"><a href="#">Téléchargement</a></li>
				<li id="bcontact" onclick="bcontact()"><a href="#">Nous contacter</a></li>
				<li><a href="http://www.santhor.com" id='agence'>L'agence Santhor</a></li>
			</ul>
		</nav>
		<!-- .cd-primary-nav -->
	</header>
	<!-- .cd-auto-hide-header -->
<div id="contenu">
	<section class="cd-hero">
		<div class="cd-hero-content">
			<h1>LIVVI</h1>
			<h2>L'IUT en Visite Virtuelle Interactive</h2>
			<!-- your content here -->
		</div>
	</section>
	<!-- .cd-hero -->

	<nav class="cd-secondary-nav">
		<ul>
			<li><a class="transition-souris" href="#quoi">Pourquoi</a></li>
			<li><a class="transition-souris" href="#qui">Pour qui</a></li>
			<li><a class="transition-souris" href="#comment">Comment</a></li>
			<li><a class="transition-souris" href="#quand">Pour quand</a></li>
		</ul>
	</nav>
	<!-- .cd-secondary-nav -->


	<main class="cd-main-content sub-nav-hero">
		<div class="pt" id="quoi">
			<div class="pt-cell mef img1">
				<!-- <h1 class="top">What the meaning of</h1>
				<h1 class="bot">the existence of LIVVI ?</h1> -->
			</div>
			<div class="pt-cell">
				<div id="background">
		    	What
		    </div>
				<p>
					LIVVI part du constat commun entre tous les membres de l’agence que l’orientation post-bac a été un véritable calvaire, et que nous aurions été largement aidés par des visites virtuelles. C’est ainsi que nous avons communément décidé de venir au secours des futurs étudiants de l’IUT.
					Nous sommes restés sur notre formation MMI car c’est celle que nous connaissons le mieux, et que nous pourrons donc le mieux retranscrire. </p>
			</div>
		</div>


		<div class="pt" id="qui">

			<div class="pt-cell mef img2 sm-display">
				<!-- <h1 class="top">Not sure if</h1>
				<h1 class="bot">LIVVI is for me or not</h1> -->
			</div>

			<div class="pt-cell">
				<div id="background">
		    	Who
		    </div>
				<p>
					Principalement destiné aux étudiants qui souhaitent intégrer le campus de l’IUT de Vélizy, LIVVI s’adresse également à un public plus large : Les adeptes de visite virtuelle pourront apprécier la modélisation, les parents d’élèves pourront se rassurer quant au choix d’orientation de leurs enfants, les futurs MMI pourront se projeter dans leur prochaine année, et les connaisseurs de l’IUT pourront arpenter les couloirs avec une certaine nostalgie virtuelle. </p>
			</div>
			<div class="pt-cell mef img2 sm-display-none">
				<!-- <h1 class="top">Not sure if</h1>
				<h1 class="bot">LIVVI is for me or not</h1> -->
			</div>
		</div>


		<div class="pt" id="comment">
			<div class="pt-cell mef img3">
				<!-- <h1 class="top">It's ...</h1>
				<h1 class="bot">Magic !</h1> -->
			</div>
			<div class="pt-cell">
				<div id="background">
		    	How
		    </div>
				<p>
					Nous avons décidé de mettre en place une visite virtuelle dans le but principal de faciliter les choix d’orientation. En ce sens, il nous fallait créer un module attractif, simple d’utilisation et immersif. Pour ce faire, la modélisation sera designée de façon originale, tout en respectant l’agencement des lieux, l'interface sera intuitive et sans nécessité d’inscription.
					Enfin, LIVVI sera un logiciel téléchargeable sur ordinateur en seulement deux clics. </p>
			</div>
		</div>


		<div class="pt" id="quand">

			<div class="pt-cell mef img4 sm-display">
				<!-- <h1 class="top">Will it be available</h1>
				<h1 class="bot">One Day ?</h1> -->
			</div>

			<div class="pt-cell">
				<div id="background">
		    	When
		    </div>
				<p>
					Bientôt ;)<br/>
					<a class="transition-souris" href="#" onclick="bcontact()">Restez connectés</a> pour suivre nos actualités<br/>
					Accédez à la <a href="#" onclick="btimeline()">chronologie de LIVVI</a>. </p>
			</div>
			<div class="pt-cell mef img4 sm-display-none">
				<!-- <h1 class="top">Will it be available</h1>
				<h1 class="bot">One Day ?</h1> -->
			</div>
		</div>
	</main>
    </div>	<!-- .cd-main-content -->

	<footer class="cd-footer" id="footer">
        <div class="cd-footer-content">
			<div class="cd-footer-element cd-sitemap">
				<ul id="bouton-admin">
                    <?php if (!isset($_SESSION['connexion'])) { ?>
					<li><input id="mdp" type="password"></li>
					<li><button id="connexion" onclick="connexion()">Connexion</button></li>
                    <?php } else { ?>
                    <li><button id="deconnexion" onclick="deconnexion()">Déconnexion</button></li>
                    <?php } ?>
				</ul>
			</div>
			<!--<div class="cd-footer-element cd-contact">
				Nous contacter
				<ul>
					<li><a href="mailto:contact@santhor.com"><span class="fa fa-envelope"></span><span class="label">M@il</span></a></li>
					<li><a href="https://twitter.com/ProjetLIVVI"><span class="fa fa-twitter"></span><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/projetlivvi"><span class="fa fa-facebook"></span><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/agencesanthor"><span class="fa fa-instagram"></span><span class="label">Instagram</span></a></li>
					<li><a href="https://fr.pinterest.com/santhor7685"><span class="fa fa-pinterest"></span><span class="label">Pinterest</span></a></li>
				</ul>
			</div>-->
		</div>
		<!-- <div class="cd-footer-content">
			<div class="cd-footer-element cd-sitemap">
				Plan du site
				<ul>
					<li><a class="transition-souris" href="#">Accueil</a></li>
					<li><a href="timeline.html">Timeline</a></li>
					<li><a href="telechargment.html">Téléchargement</a></li>
					<li><a href="http://www.santhor.com">L'agence Santhor</a></li>
				</ul>
			</div>
			<div class="cd-footer-element cd-contact">
				Nous contacter
				<ul>
					<li><a href="mailto:contact@santhor.com"><span class="fa fa-envelope"></span><span class="label">M@il</span></a></li>
					<li><a href="https://twitter.com/ProjetLIVVI"><span class="fa fa-twitter"></span><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/projetlivvi"><span class="fa fa-facebook"></span><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/agencesanthor"><span class="fa fa-instagram"></span><span class="label">Instagram</span></a></li>
					<li><a href="https://fr.pinterest.com/santhor7685"><span class="fa fa-pinterest"></span><span class="label">Pinterest</span></a></li>
				</ul>
			</div>
		</div> -->
		<div class="cd-credit">
			<ul class="copyright">
				<li>© <a href="http://www.santhor.com/index.html">SANTHOR</a> 2016. All rights reserved.</li>
				<li>by <a href="http://www.dubosclard.santhor.com">DUBOSCLARD</a>, <a href="http://www.magaud.santhor.com">MAGAUD</a> &amp; <a href="http://www.koehren.santhor.com">KOEHREN</a></li>
			</ul>
		</div>
	</footer>
	<script src="js/main.js"></script>
	<!-- Js principal -->
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79423336-2', 'auto');
      ga('send', 'pageview');

    </script>
</body>

</html>
