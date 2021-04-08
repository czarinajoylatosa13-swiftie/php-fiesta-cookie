<?php
	function pokemon_defense($array, int $limitnumber){
		$num = 7;
		foreach($array as $defense){
			if ($defense[$num] >= $limitnumber){
				echo $defense [1];
				echo "<br>";
			}
		}
	}
?>