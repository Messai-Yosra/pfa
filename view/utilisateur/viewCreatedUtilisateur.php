<p>L'utilisateur a bien été créé</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'> $ncin </a> </p>" ;
?>