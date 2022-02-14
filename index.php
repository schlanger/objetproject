<?php
include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'comparable.php';
include 'club.php';
include 'data.php';

echo "Projet Heritage et Interface";


var_dump($_GET["id"]);
//liste des clubs
 foreach ($club as $kclub => $vclub) {
     echo '<a href="result.php?id='.$vclub->getIdclub().'">'.$vclub-> getNomclub().'</a><br>';
 }

 //liste des sports d'un club
if (isset($_GET["idclub"]))  {
    echo "<br>club" . $club[$_GET["id"]]->getNomclub()."<br>";
}
foreach ($club[2]->getlesSports() as $ksport=>$vsport){
    echo $vsport->getNomSport()."<br>";
}
