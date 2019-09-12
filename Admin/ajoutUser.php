<?php
$nom = isset($_POST['nom'])? trim(htmlspecialchars($_POST['nom'],ENT_QUOTES)) : null;
$prenom = isset($_POST['prenom'])? trim(htmlspecialchars($_POST['prenom'],ENT_QUOTES)) : null;
$login = isset($_POST['login'])? trim(htmlspecialchars($_POST['login'],ENT_QUOTES)) : null;
$mdp = isset($_POST['psswd'])? hash('sha256', htmlspecialchars($_POST['psswd'],ENT_QUOTES)) : null;
$mdp2 = isset($_POST['psswd2'])? hash('sha256', htmlspecialchars($_POST['psswd2'],ENT_QUOTES)) : null;
echo $login," ",$nom," ",$prenom,"<br>",$mdp,"<br>",$mdp2;
// if (isset($_POST['nom']))
// {
//     $nom=trim(htmlspecialchars($_POST['nom']),ENT_QUOTES);
// }
// else
// {
//     $nom=null;
// }
?>