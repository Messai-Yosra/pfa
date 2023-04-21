<p>La voiture a bien été modifiée</p>
<?php
$immatriculation=$oldVoiture->getImmatriculation();
echo "<p> Voiture <a href='index.php?controller=voiture&action=read&immatriculation=$immatriculation'> $immatriculation </a> </p>" ;
?>