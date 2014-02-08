<?php
//j'aime les poissons, les fruits de mer et le chocolat ensemble
//j'aime les poissons, les fruits de mer et le rhum ensemble
	$i = 1;
	while ($i <= 2) {
		echo "J'aime les poissons, les cornichons et le ";
		if ($i ==1) {
			echo "chocolat";
		}else{
			echo "rhum";
		}
		echo " ensemble <br>";
		$i = $i +1;
	}
?>