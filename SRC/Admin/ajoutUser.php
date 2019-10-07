<?php
require "../Models/Users.php";
require "../Models/TypeUser.php";
require "../Models/Adresse.php";
require "../Models/Villes.php";
require "../Models/Pays.php";
require "../Models/Genre.php";
require "../Models/Entreprise.php";
require "../Controler/fonctions.php";
testPOST('nom');
$nom = isset($_POST['nom']) ? trim(htmlspecialchars($_POST['nom'], ENT_QUOTES)) : null;
$prenom = isset($_POST['prenom']) ? trim(htmlspecialchars($_POST['prenom'], ENT_QUOTES)) : null;
$login = isset($_POST['login']) ? trim(htmlspecialchars($_POST['login'], ENT_QUOTES)) : null;
$mdp = isset($_POST['psswd']) ? hash('sha256', htmlspecialchars($_POST['psswd'], ENT_QUOTES)) : null;
$mdp2 = isset($_POST['psswd2']) ? hash('sha256', htmlspecialchars($_POST['psswd2'], ENT_QUOTES)) : null;
$adr=isset($_POST['adresse']) ? trim(htmlspecialchars($_POST['adresse'], ENT_QUOTES)) : null;
$adr2=isset($_POST['adresse2']) ? trim(htmlspecialchars($_POST['adresse2'], ENT_QUOTES)) : null;
$cp=isset($_POST['cp']) ? trim(htmlspecialchars($_POST['cp'], ENT_QUOTES)) : null;
$ville = isset($_POST['ville']) ? trim(htmlspecialchars($_POST['ville'], ENT_QUOTES)) : null;
$pays = new Pays(0, "France");
$pays->insertSQLPays();
$v=new Villes(0,$ville,$pays->getIdPays());
$v->insertSQLVille();
$adresse= new Adresse(0,$adr,$adr2,$cp,$v->getIdVille());
$adresse->insertSQLAdresse();
// echo $login," ",$nom," ",$prenom,"<br>",$mdp,"<br>",$mdp2;

// $user = new Users(0, $nom, $prenom);
