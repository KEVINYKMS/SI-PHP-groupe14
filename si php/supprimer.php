<?php
include "data.php";

$id = $_GET['id'];

$req= $db -> prepare ('DELETE FROM reservation WHERE id=:id');
$req->execute(array(
			'id' => $id));
?>

<p> Votre reservation à bien été supprimer </p>
<a href="index2.php"> Cliquez ici pour revenir à l'accueil </a> </br>