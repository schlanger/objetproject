<?php
include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'comparable.php';
include 'club.php';

echo "Projet Heritage et Interface";

// Init les clubs
$club = array();
$club[1] = new Club(1, "Dijon", 63);
$club[2] = new Club(2, "PSG", 67);
$club[3] = new Club(3, "Nantes", 65);

// Les sports de Dijon
$sb = new SportBallon("Basketball", 5, 35, 45);
$club[1]->AjouterSport($sb);

// Les sports de PSG
$sport1 = new Sport("Javelot", 1);
$sport2 = new Sport("Judo", 1);
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais1 = new SportRelais("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

// Les sports Nantes
$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("FootBall", 11, 68, 105);
$sportBallon4 = new SportBallon("Rugby", 15, 65, 115);
$sportRelais2 = new SportRelais("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);

echo'<h1>Liste des clubs: </h1> <br>';
echo'<a href="?id=1"> 1-Dijon 18 </a><br>';
echo'<a href="?id=2"> 2-PSG 32</a><br>';
echo'<a href="?id=3"> 3-Nantes 2</a><br>';



if($_GET['id']==1)
{
    echo'<h3> Liste des sports du club de Dijon: </h3>';
    echo  " DESCRIPTION Nom du sport: " . $SF->getnomSport() . ", Nombre de Joueurs:" . $SF->getnbJoueurs() . ", Longueur" . $SF->getlongueur() . ", Largeur" . $SF->getlargeur() . "<br>";

}


if($_GET['id']==2)
{
    echo '<h3> Liste des sports du club du PSG: </h3>';
    echo "DESCRIPTION Nom du sport:" . $Sport1->getNomSport() . ", Nombre de Joueurs:" . $Sport1->getnbJoueurs() . "<br>";
    echo "DESCRIPTION Nom du sport:" . $Sport2->getNomSport() . ", Nombre de Joueurs:" . $Sport2->getnbJoueurs() . "<br>";
    echo "DESCRIPTION Nom du sport:" . $SportBallon1->getNomSport() . ", Nombre de Joueurs:" . $SportBallon2->getnbJoueurs() . ", Longueur" . $SportBallon1->getlongueur() . ", Largeur" . $SportBallon1->getlargeur() . "<br>";
    echo "DESCRIPTION Nom du sport:" . $SportBallon2->getNomSport() . ", Nombre de Joueurs:" . $SportBallon2->getnbJoueurs() . ", Longueur" . $SportBallon2->getlongueur() . ", Largeur" . $SportBallon2->getlargeur() . "<br>";
    echo "DESCRIPTION Nom du sport:" . $SportRelais1->getNomSport() . ", Nombre de Joueurs:" . $SportRelais1->getnbJoueurs() . ",Distance:" . $SportRelais1->getDistance() . "<br>";
}

if ($_GET['id']==3)
{
    echo '<h3> Liste des sports du club de Nantes: </h3>';
    echo "DESCRIPTION Nom du sport:" .$Sport3->getNomSport(). ", Nombre de Joueurs:" .$Sport3->getnbJoueurs(). "<br>";
    echo "DESCRIPTION Nom du sport:" .$SportBallon3->getNomSport(). ", Nombre de Joueurs:" .$SportBallon3->getnbJoueurs(). ", Longueur:" .$SportBallon3->getlongueur(). ", Largeur:" .$SportBallon3->getlargeur(). "<br>";
    echo "DESCRIPTION Nom du sport:" .$SportBallon4->getNomSport(). ", Nombre de Joueurs:" .$SportBallon4->getnbJoueurs(). ", Longueur:" .$SportBallon4->getlongueur(). ", Largeur:" .$SportBallon4->getlargeur(). "<br>";
    echo "DESCRIPTION Nom du sport:" .$SportRelais2->getNomSport(). ", Nombre de Joueurs:" .$SportRelais2->getnbJoueurs(). ", Distance:" .$SportRelais2->getDistance(). "<br>";
}

?>


