<?php 
	$leftLimit = 1;
	$rightLimit = 6;
	
	$firstBoneNumber = mt_rand($leftLimit, $rightLimit);
	$secondBoneNumber = mt_rand($leftLimit, $rightLimit);
	$thirdBoneNumber = mt_rand($leftLimit, $rightLimit);

	$highestNumber = max($firstBoneNumber, $secondBoneNumber, $thirdBoneNumber);

	echo "Первый бросок: <b>$firstBoneNumber</b></br>";
	echo "Второй бросок: <b>$secondBoneNumber</b></br>";
	echo "Третий бросок: <b>$thirdBoneNumber</b><br/>";

	echo "</br>Наибольшее выпавшее число: <b>$highestNumber</b>";
?>