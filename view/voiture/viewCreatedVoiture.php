<p>La voiture a bien été créée</p>
<?php
$immatriculation = $voiture->getImmatriculation(); 
echo "<p> Voiture <a href='index.php?controller=voiture&action=read&immatriculation=$immatriculation'> $immatriculation </a> </p>" ;
?>