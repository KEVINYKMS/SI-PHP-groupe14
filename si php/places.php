<?php
$page = isset($_GET['value']) ? $_GET['value'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
include 'data.php';
$id = (int) $_GET['id'] ?? 0;
/** @var \PDO $db */
$req = $db->prepare('SELECT id, nbplaces FROM jour WHERE id = :id');
$req->bindValue(':id', $id);
$req->execute();
$res = $req->fetch();
?>
<form method="post" action="traitement.php">
    <input type="hidden" name="id" value="<?=$id?>">
<?php
for($i = 1; $i<9; $i++){
    if($res['nbplaces'] - $i < 0){
        echo "<input type='submit' name='places' value='".$i."' disabled>";
    } else {
        echo "<input type='submit' name='places' value='".$i."' >";
    }
}
?>
</form>

<?var_dump($res['nbplaces']);?>
</body>
</html>
