<?php
session_start() ;
$host = 'db660221105.db.1and1.com' ;
$dbname = 'db660221105' ;
$dbuser = 'dbo660221105' ;
$dbpass = 'Centaure_8' ;

$link = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpass) ;
$link->exec("SET CHARACTER SET utf8"); 

$timeline = $link->query("SELECT * FROM timeline ORDER BY pos DESC") ;
$timeline = $timeline->fetchall(PDO::FETCH_ASSOC) ;
?>
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

		<?php
        if (isset($_SESSION['connexion'])) {
            ?>
            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-vert">
                    <img src="img/icon/cd-icon-promote.svg" alt="Picture">
                </div>
                <div class="cd-timeline-content">
                    <h2></h2>
                    <a href="#" class="cd-read-more" onclick="add()" style='background:#75ce66'>Ajouter une date</a>
                    <p></p>
                    <span class="cd-date"></span>
                </div>
            </div>
        <?php
        }
        foreach ($timeline as $date) { ?>
        <div class="cd-timeline-block<?php if (!isset($_SESSION['connexion'])) { echo " pasco" ; } ?>">
			<div class="cd-timeline-img cd-<?php echo $date['couleur']; ?>">
				<img src="img/icon/cd-icon-<?php echo $date['logo']; ?>.svg" alt="Picture">
			</div>
			<div class="cd-timeline-content">
                <?php
                if (isset($_SESSION['connexion'])) {
                    ?>
                    <button style='background:#c03b44' onclick="supprimer(<?php echo $date['id'].", '".$date['titre']."'" ?>)">Supprimer cette carte</button>
                    <button style='background:#f0ca45' onclick="modif(<?php echo $date['id'] ?>)">Modifier cette carte</button>
                    <p style='color:green'>Position de cette carte : <?php echo $date['pos'] ?></p>
                <?php
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
