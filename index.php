<?php 
	$leftLimit = 1;
	$rightLimit = 6;
	
	$firstBoneNumber = mt_rand($leftLimit, $rightLimit);
	$secondBoneNumber = mt_rand($leftLimit, $rightLimit);
	$thirdBoneNumber = mt_rand($leftLimit, $rightLimit);

	$highestNumber = max($firstBoneNumber, $secondBoneNumber, $thirdBoneNumber);

	echo "Первый бросок: $firstBoneNumber</br>";
	echo "Второй бросок:  $secondBoneNumber</br>";
	echo "Третий бросок: $thirdBoneNumber<br/>";

	echo "</br>Наибольшее выпавшее число: $highestNumber";
?>