<?php
session_start() ;
$host = 'db660221105.db.1and1.com' ;
$dbname = 'db660221105' ;
$dbuser = 'dbo660221105' ;
$dbpass = 'Centaure_8' ;

$link = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpass) ;
$link->exec("SET CHARACTER SET utf8"); 

$timeline = $link->query("SELECT * FROM timeline") ;
$timeline = $timeline->fetchall(PDO::FETCH_ASSOC) ;

$add = $link->prepare("INSERT INTO timeline (`id`, `titre`, `description`, `date`, `couleur`, `logo`, `pos`) VALUES (NULL, ?, ?, ?, ?, ?, ?);") ;
$modif = $link->prepare("UPDATE `timeline` SET `titre`=?,`description`=?,`date`=?,`couleur`=?,`logo`=?,`pos`=? WHERE id = ?") ;
$supp = $link->prepare("DELETE FROM timeline WHERE id = ?") ;
    
if (isset($_POST['addDate'])) {
    if (isset($_SESSION['connexion'])) {
        $add->execute(array($_POST['titre'], $_POST['description'], $_POST['date'], $_POST['couleur'], $_POST['logo'], $_POST['pos'])) ;
    }
}
else if (isset($_POST['password'])) {
    if (($_POST['password'] == 'Centaure_8') || ($_POST['password'] == 'prof'))
    {
        $_SESSION['connexion'] = 'ok' ;
        echo "<li><button id='deconnexion' onclick='deconnexion()'>Déconnexion</button></li>" ;
    }
    else {
        echo "<li><input id='mdp' type='password'></li><li><button id='connexion' onclick='connexion()'>Connexion</button></li>" ;
    }
}

else if (isset($_POST['deconnexion']))
{
    session_destroy() ;
    unset($_SESSION) ;
    echo "<li><input id='mdp' type='password'></li><li><button id='connexion' onclick='connexion()'>Connexion</button></li>" ;
}

else if (isset($_POST['idSupp']))
{
    if (isset($_SESSION['connexion'])) {
        $supp->execute(array($_POST['idSupp'])) ;
    }
}
else if (isset($_POST['modifDate'])) {
    if (isset($_SESSION['connexion'])) {
        $modif->execute(array($_POST['titre'], $_POST['description'], $_POST['date'], $_POST['couleur'], $_POST['logo'], $_POST['pos'], $_POST['id'])) ;
    }
}
?>