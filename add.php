<?php
    $icons = array("blackboard", "board", "camera", "graduation", "group", "hierarchy", "location", "movie", "party", "picture", "promote") ;

$host = 'db660221105.db.1and1.com' ;
$dbname = 'db660221105' ;
$dbuser = 'dbo660221105' ;
$dbpass = 'Centaure_8' ;

$link = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpass) ;
$link->exec("SET CHARACTER SET utf8");
$selectModif = $link->prepare("SELECT * FROM timeline WHERE id = ?") ;
$r = '' ;
$v = '' ;
$j = '' ;
if (isset($_POST['idModif'])) {
    $selectModif->execute(array($_POST['idModif'])) ;
    $modif = $selectModif->fetchall(PDO::FETCH_ASSOC) ;
    $modif = $modif[0] ;
    $titre = $modif['titre'] ;
    $description = $modif['description'] ;
    $date = $modif['date'] ;
    $maxPos = $modif['pos'] ;
    $couleur = $modif['couleur'] ;
    $logo = $modif['logo'] ;
    if($couleur == 'rouge') {
        $r = 'selected' ;
    }
    else if ($couleur == "vert") {
        $v = 'selected' ;
    }
    else {
        $j = 'selected' ;
    }
}
else {
    $maxPos = $link->query("SELECT MAX(pos) FROM timeline") ;
    $maxPos->setFetchMode(PDO::FETCH_NUM) ;
    $maxPos = $maxPos->fetch() ;
    $maxPos = $maxPos[0] + 10 ;

    $logo = 'group' ;
    $titre = '' ;
    $description = '' ;
    $date = '' ;
    $couleur = '' ;

}
?>

<script>
    $(function() {
        prevtitre() ;
        prevdescription() ;
        prevlogo() ;
        prevcouleur() ;
        prevdate() ;
    });
</script>

<section class="cd-hero">
		<div class="cd-hero-content">
            <?php if (!isset($_POST['idModif'])) { ?>
                <h1>Ajouter</h1>
            <?php } else { ?>
                <h1>Modifier</h1>
            <?php } ?>
			<h2>une date</h2>
			<!-- your content here -->
		</div>
	</section>

    <main class="cd-content">
		<div class="pt">
			<div class="pt-cell imgbl">
            <?php foreach ($icons as $icon) { ?>
                <label for="<?php echo $icon ?>" class="img-add" onclick="prevlogo()">
				    <img style="width:inherit" src="img/icon/cd-icon-<?php echo $icon ?>.svg" alt="Picture">
                    <input type="radio" name="logo" value="<?php echo $icon ?>" id="<?php echo $icon ?>" <?php if($icon == $logo){ echo 'checked'; } ?>/>
                </label>
                <?php } ?>
			</div>
      <div class="pt-cell">
        <div class="inline-block">
          <div class="alignright">
            <h3>Titre : </h3><br/><br/>
            <h3>Description : </h3><br/><br/>
            <h3>Date : </h3><br/>
            <h3>Couleur : </h3><br/>
            <h3>Position : </h3><br/>
          </div>
          <div class="alignleft">
            <input type="text" id="titre" onkeyup="prevtitre()" maxlength="50" value="<?php echo $titre ; ?>"/><br/>
            <textarea id="description" onkeyup="prevdescription()" cols="50" rows="3" maxlength="200"><?php echo $description ; ?></textarea><br/><br/>
            <input type="text" id="date" onkeyup="prevdate()" maxlength="30" value="<?php echo $date ; ?>"/><br/><br/>
				    <select id="couleur" onchange="prevcouleur()">
              <option value="rouge" <?php echo $r ?>>Rouge</option>
              <option value="vert" <?php echo $v ?>>Vert</option>
              <option value="jaune" <?php echo $j ?>>Jaune</option>
            </select><br/><br/>
            <input type="number" id="position" value="<?php echo $maxPos ; ?>"/><span class="smallItalic">Ne pas modifier si placé en dernier.</span><br/>
            <h3><?php //print_r($modif) ; ?></h3>
            <?php if (!isset($_POST['idModif'])) { ?>
              <h3><button id="up" onclick="up()">Envoyer</button></h3>
            <?php } else { ?>
              <h3><button id="change" onclick="change(<?php echo $_POST['idModif'] ?>)">Envoyer</button></h3>
            <?php } ?>
          </div>
        </div>
      </div>
		</div>
        <section class="titre cd-container">
            <h1>Prévisualisation</h1>
        </section>
        <section id="cd-timeline" class="cd-container">
            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-rouge" id="preview-couleur">
                    <img src="img/icon/cd-icon-group.svg" id="preview-logo" alt="Picture">
                </div>
                <div class="cd-timeline-content">
                    <h2 id="preview-titre"></h2>
                    <p id="preview-description"></p>
                    <span id="preview-date" class="cd-date"></span>
                </div>
            </div>
        </section>
    </main>
