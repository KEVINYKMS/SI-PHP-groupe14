<?php
include "data.php";

$placesRestantes = 50;
$id = $_GET['id'];
$req = $db->query('SELECT date FROM reservation WHERE id='.$id);
$res = $req -> fetch ();
$date = $res['date'];
$req = $db->query('SELECT nbPlaces FROM reservation WHERE date="'.$date.'" AND id != '.$id);
while ( $res = $req -> fetch ()){
	$placesRestantes = $placesRestantes-$res['nbPlaces'];
}
echo "Pour cette journee, il reste ".$placesRestantes." places restantes.";
?>

<form action="modifierTraitement.php" method="post">
	<?php
	for($i=1; $i<9; $i++){
		if($placesRestantes-$i < 0){
			echo "<input type='submit' name='nbPlaces' value='".$i."' disabled>	";
		} else {
			echo "<input type='submit' name='nbPlaces' value='".$i."'>";
		}
	}
	echo '<input name="id" type="hidden" value="'.$id.'">';
	
	?>
</form>