<?php
//Les fonctions
/*
	f1 : le nom
	$parametre : c'est le premier paramètre
*/
	/*
function f1($parametre){
	// pleiiiiiiiiiiins de choses
	// des calculs
	// des conditions
	// des boucles
	//ecrire du contenu HTML
	// retourner des informations
	// par :
	return $mavaleur;
}

	$a = f1(3);

function idiot($nom){
	if($nom == "Elliot"){
		return true;
	}elseif($nom == "Julien"){
		return true; // aussi
	}
	return false;
}

	$etatMental = idiot("Elliot"); // true
	$etatMental = idiot("Andréa"); // false
*/


//j'aime les poissons, les fruits de mer et le chocolat ensemble
//j'aime les poissons, les fruits de mer et le rhum ensemble

function phrase($aliment){
	echo "J'aime les poissons, les cornichons et le ";
	echo $aliment;
	echo " ensemble <br>";
}

/*
$i = 1;
while ($i <= 2) {
	if ($i ==1) {
		$a = "chocolat";
	}else{
		$a = "rhum";
	}
	phrase($a);
	phrase("leo");
	$i++;
}
*/
// =
for ($i=1; $i <= 2 ; $i=$i +1) { 
	if ($i ==1) {
		$a = "chocolat";
	}else{
		$a = "rhum";
	}
	phrase($a);
}
?>
//tableau
//concatenation
//inclusion
//date
//post get

