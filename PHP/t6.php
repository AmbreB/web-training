<?php 
//tableau
$a = array('clé1' => '?????????',
		   'clé2' => '???????');




/*
echo $maClio['marque'];

if($maClio['marque'] == 'Renault'){
	echo "C'est de la merde";
}
*/
//
	//afficher la phrase "Je peux rouler"
//$maClio['options']; // renvoie un tableau
//$maClio['options']['ventilation']; // true : Boolean



//Exercice ( if, array, echo)
// Ecrire "Je peux rouler" si ma voiture a un moteur




function peuxTuRouler($voiture){
	if ($voiture['options']['moteur']) {
		echo "Je peux rouler<br>";
	}
}
$maClio = array('marque'=> 'Renault',
				'couleur' => 'Blanche',
				'puissance' => 75,
				'options'=>array(
								'ventilation'=> true,
								'moteur'=>true
							)
				);
$charette = array('options'=>
					array('moteur'=>false)
					);

$maGrandMere = array('options'=>
					array('moteur'=>false)
					);
peuxTuRouler($charette);
peuxTuRouler($maClio);
peuxTuRouler($maGrandMere);


//Piege à con sur les booleans
// si c'est faux ou 0 ou null => faux
// le reste => vrai
/*
$a = false;
if ($a){
	echo "C'était donc true";
}

$a = true;
if ($a){
	echo "C'était donc true";
}

$a = 1;
if ($a){
	echo "C'était donc true";
}

$a = 1648524;
if ($a){
	echo "C'était donc true";
}

$a = 0;
if ($a){
	echo "C'était donc true";
}

$a = "Cool";
if ($a){
	echo "C'était donc true";
}

$a = null;
var_dump($a);
if ($a){
	echo "C'était donc true";
}
*/
?>