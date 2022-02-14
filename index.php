<?php
include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'comparable.php';
include 'club.php';
include 'data.php';


echo "Projet Heritage et Interface" <"br";



//liste des clubs
 foreach ($club as $kclub => $vclub) {
     echo '<a href="result.php?id='.$vclub->getIdclub().'">'.$vclub-> getNomclub().'</a><br>';
 }

 //liste des sports d'un club
//if (isset($_GET["idclub"]))  {
//    echo "<br>club" . $club[$_GET["id"]]->getNomclub()."<br>";
//}
//foreach ($club[$_GET["idclub"]]->getlesSports() as $ksport=>$vsport){
//    echo $vsport->getNomSport()."<br>";
//}

echo"
      <br>
      'formulaire idclub'
      <br>

      <form method='post' name='formidclub' action='result.php'>;
      <label for='club-select'>club:</label>
      <select name='idclub' id='club-select'>
          <option value=''>--choisir un club--</option>";

          foreach ($club as $kformclub => $vformclub)
          {
               echo "<option value='". $vformclub->getidclub()."'>". $vformclub->getnomclub()."</option>";
          }


 echo "</select>

         <button type='submit'>ENVOIEEEEEEE!</button>
      </form>
";