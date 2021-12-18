<?php
session_start();
$_SESSION['name'] = htmlentities($_POST['vardas']);

echo 'Vardas: ' . $_POST['vardas'] . '<br>';
echo 'El.pasto adresas: ' . $_POST['pastas'] . '<br>';
echo 'Tema: ' . $_POST['tema'] . '<br>';
echo 'Zinutes tema: ' . $_POST['zinute'] . '<br>';
echo '<br>';
?>
<html>
<form action="saugotiSesijosDuomenis.php" method="POST">
    <input type="submit" value="Saugoti sesija">
</form>
<form action="saugotiSausaineliuDuomenis.php" method="POST">
    <input type="submit" value="Saugoti sausaini">
</form>
</html>