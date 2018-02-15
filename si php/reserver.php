<?php
include "data.php";

$date = $_POST['date'];
$req = $db->query('SELECT MAX(id) FROM reservation');
$res = $req -> fetch ();
$id = $res['MAX(id)']+1;

$req= $db -> prepare ('INSERT INTO reservation(id, date, nbplaces) VALUES (:id, :date, :nbplaces)');
$req->execute(array(
			'id' => $id,
			'date' => $_POST['date'],
			'nbplaces' => $_POST['nbPlaces']));
?>

<p> Votre reservation à bien été prise en compte. </p>
<a href="index2.php"> Cliquez ici pour revenir à l'accueil </a> </br>
<a href="supprimer.php?id=<?php echo $id;?>"> Voulez vous annuler? </a> </br>
<a href="modifier.php?id=<?php echo $id;?>"> Voulez vous modifier le nombre de place? </a>