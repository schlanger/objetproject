<?php

include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'comparable.php';
include 'club.php';
include 'data.php';


//liste des sports d'un club
if (isset($_GET["idclub"]) || isset($_POST["idclub"]) ) {
    if (isset($_GET["idclub"])) {
        $idclub = $_GET["idclub"];
    } else {
        $idclub = $_POST["idclub"];
    }
    echo "<br>club" . $club[$idclub]->getNomclub() . "<br>";
    $listsport = $club[$idclub]->getlesSports();
    foreach ($listsport as $ksport => $vsport) {
        echo "-" . $vsport->getNomSport() . "<br>";
    }
}

echo "<br> <a href='/index.php'>RETOUR</a>";