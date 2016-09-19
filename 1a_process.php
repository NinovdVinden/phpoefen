<?php
echo $_GET['naam'];
echo '<br>';
echo $_GET['fouten'];
echo '<br>';
if($_GET['naam'] == ""){
  echo "Je hebt je naam niet ingevuld";
}
echo '<br>';
if($_GET['fouten'] == ""){
  echo "Je hebt geen aantal fouten ingevuld";
}
echo '<br>';
echo '<a href="1a.php">Terug naar het formulier</a>';
 ?>
