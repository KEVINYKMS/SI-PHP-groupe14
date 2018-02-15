<?php
include "data.php";

$id = $_POST['id'];

$req= $db -> prepare ('UPDATE reservation SET nbPlaces = :places');
$req->execute(array(
			'places' => $_POST['nbPlaces']));
?>

<p> Votre reservation à bien été modifier. </p>
<a href="index2.php"> Cliquez ici pour revenir à l'accueil </a> </br>
<a href="supprimer.php?id=<?php echo $id;?>"> Voulez vous annuler? </a> </br>
<a href="modifier.php?id=<?php echo $id;?>"> Voulez vous modifier le nombre de place? </a>