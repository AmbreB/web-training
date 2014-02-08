<?php
/**
*	Ni lu ni executé
*/
//D'autre commentaires

//Opérateurs
// == != ! : comparaison
// = : affectation
// + - / * % ..
// les variables sont précedées d'un $

$a = 2 / 3;
// afficher une donnée en php
// echo
// var_dump
echo $a;
var_dump ($a);
//types : int, float, string, array, booleans true : false
var_dump($a==1);

if ($a!=1) {
	echo 'bananes <br>';
}

if($a==1){
	echo 'bananes <br>';
}elseif(false){
	echo 'poire';
}else{
	echo 'peches <br>';
}

//assez compliqué
switch ($a) {
	case 1:
		echo $a;
		break;
	case 2:
		echo $a;
		break;
	case 3:
		echo $a;
		break;
	default:
		echo $a;
		break;
}


//les boucles
// $a = 5
while ($a < 10) {
	echo "je t'aime <br>";
	$a = $a +1;
}

$age_de_mon_cheri = 20; // On crée la variable
echo ($age_de_mon_cheri); // Permet d'afficher ce qu'elle contient

echo "Leo a $age_de_mon_cheri ans";
echo 'Leo a '.$age_de_mon_cheri.' ans';


$age = 15;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";

?>
