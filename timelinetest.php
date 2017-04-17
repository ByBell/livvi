<?php
$host = 'db660221105.db.1and1.com' ;
$dbname = 'db660221105' ;
$dbuser = 'dbo660221105' ;
$dbpass = 'Centaure_8' ;

$link = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpass) ;
$link->exec("SET CHARACTER SET utf8"); 

$timeline = $link->query("SELECT * FROM timeline ORDER BY pos DESC") ;
$timeline = $timeline->fetchall(PDO::FETCH_ASSOC) ;
?>


<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LIVVI L'IUT en Visite Virtuelle Interactive - DUT MMI IUT Velizy - Agence Santhor</title>
	<meta name="description" content="Site projet  Livvi par agence Santhor DUT MMI Vélizy" />
	<meta name="keywords" content="visite, virtuelle, etude, étude, orientation, velizy, vélizy, dut, iut, mmi, interactif, interactive, livvi, santhor, agence, etudiant, étudiant, etudiants, étudiants, projet" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab" rel="stylesheet">

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
	<!--	Parallax JS -->

</head>

<body>
	<header class="cd-auto-hide-header">
		<div class="logo">
			<a href="index.html"><img src="img/cd-logo-livvi.svg" alt="Logo"></a>
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
				<li id="baccueil"><a class="transition-souris active" href="#">Accueil</a></li>
				<li id="btimeline"><a href="#">Timeline</a></li>
				<li id="btelechargement"><a href="#">Téléchargement</a></li>
				<li id="bcontact"><a href="#">Nous contacter</a></li>
				<li><a href="http://www.santhor.com">L'agence Santhor</a></li>
			</ul>
		</nav>
		<!-- .cd-primary-nav -->
	</header>
    
    
    
    <div id="contenu">
    
	<section class="cd-hero">
		<div class="cd-hero-content">
			<h1>DATES CLEFS DU PROJET</h1>
			<!-- <h2>Qu'est ce que c'est quoi que ça se passe?</h2> -->
			<!-- your content here -->
		</div>
	</section>
	<!-- .cd-secondary-nav -->

	<section class="titre cd-container">
		<h1>Dernières avancées du projet</h1>
	</section>

	<section id="cd-timeline" class="cd-container">

		<!-- <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-vert">
				<img src="img/icon/cd-icon-picture.svg" alt="Picture">
			</div>
			<div class="cd-timeline-content">
				<h2>À l'avenir</h2>
				<p>L’ensemble des écoles du monde entier auront une visite virtuelle pour aider les étudiants à leur orientation. </p> -->
								<!-- <a href="#0" class="cd-read-more">En savoir plus</a> -->
				<!-- <span class="cd-date">Dans 10 ans</span>
			</div>
		</div> -->
<?php
        if (!isset($_SESSION['connexion'])) {
            ?>
            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-rouge">
                    <img src="img/icon/cd-icon-promote.svg" alt="Picture">
                </div>
                <div class="cd-timeline-content">
                    <h2></h2>
                    <a href="#" class="cd-read-more" id="add">Ajouter une date</a>
                    <p></p>
                    <span class="cd-date"></span>
                </div>
            </div>
        <?php
        }
        foreach ($timeline as $date) { ?>
        <div class="cd-timeline-block">
			<div class="cd-timeline-img cd-<?php echo $date['couleur']; ?>">
				<img src="img/icon/cd-icon-<?php echo $date['logo']; ?>.svg" alt="Picture">
			</div>
			<div class="cd-timeline-content">
                <?php
                if (!isset($_SESSION['connexion'])) {
                    echo "<p style='color:green'>Position de cette carte : ".$date['pos']."</p>" ;
                }
                    ?>
				<h2><?php echo $date['titre']; ?></h2>
				<p><?php echo $date['description']; ?></p>
				<span class="cd-date"><?php echo $date['date']; ?></span>
			</div>
		</div>
        <?php } ?>

	</section>
	<!-- cd-timeline -->
    
    
    </div>
    
    
<footer class="cd-footer" id="footer">
		<div class="cd-credit">
			<ul class="copyright">
				<li>© <a href="http://www.santhor.com/index.html">SANTHOR</a> 2016. All rights reserved.</li>
				<li>by <a href="http://www.dubosclard.santhor.com">DUBOSCLARD</a>, <a href="http://www.magaud.santhor.com">MAGAUD</a> &amp; <a href="http://www.koehren.santhor.com">KOEHREN</a></li>
			</ul>
		</div>
	</footer>
	<script src="js/maintest.js"></script>
	<!-- Resource jQuery -->
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
