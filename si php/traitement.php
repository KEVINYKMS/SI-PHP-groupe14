<?php
include "data.php";

$req= $db -> prepare ('INSERT INTO client(nom, prenom, email, tel) VALUES (:nom, :prenom, :email, :tel)');
$req->execute(array(
			'nom' => $_POST['nom'],
			'prenom' => $_POST['prenom'],
			'email' => $_POST['mail'],
			'tel' => $_POST['numtel']));

$placesRestantes = 50;
$date = $_POST['date'];
$req = $db->query('SELECT nbPlaces FROM reservation WHERE date="'.$date.'"');
while ( $res = $req -> fetch ()){
	$placesRestantes = $placesRestantes-$res['nbPlaces'];
}
echo "Pour cette journee, il reste ".$placesRestantes." places restantes.";
?>

<form action="reserver.php" method="post">
	<?php
	for($i=1; $i<9; $i++){
		if($placesRestantes-$i < 0){
			echo "<input type='submit' name='nbPlaces' value='".$i."' disabled>	";
		} else {
			echo "<input type='submit' name='nbPlaces' value='".$i."'>";
		}
	}
	echo '<input name="date" type="hidden" value="'.$date.'">';
	
	?>
</form>