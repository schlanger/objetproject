<?php

include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'comparable.php';
include 'club.php';
include 'data.php';

//liste des sports d'un club
if (isset($_GET["idclub"]))  {
    echo "<br>club" . $club[$_GET["id"]]->getNomclub()."<br>";
    foreach ($club[2]->getlesSports() as $ksport=>$vsport) {
        echo "-" . $vsport->getNomSport() . "<br>";
    }
}
echo "<br> <a href='/index.php'>RETOUR</a>";