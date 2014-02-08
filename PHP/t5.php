<?php
//post get

//La concatenation

function phrase($aliment){
	echo "J'aime les poissons, les cornichons et le ".$aliment." ensemble <br>";
}
for ($i=1; $i <= 2 ; $i=$i +1) { 
	if ($i ==1) {
		$a = "chocolat";
	}else{
		$a = "rhum";
	}
	phrase($a);
}

//inclusion
//include 't4.php';
//phrase("patates");

//date

/*
$date = date("D, d M Y H:i:s");
			//Monday 18th of November 2013 06:00:06 PM
echo $date;
$file = "idiot.txt";
$content = "Elliot et Julien";
$f = fopen($file,'wb');
fwrite($f,$content,strlen($content));
fclose($f); 
*/


?>
