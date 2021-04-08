<?php
	function hp_sum($array){
		$hp_sum = 0;
		$num = 5;
		foreach($array as $arr){
			$hp_sum = $hp_sum + $arr[$num];
	}
		return $hp_sum;
	}
	
	function ave_attack($array){
		$ave_attack = 0;
		$num = 6;
		foreach($array as $arr){
			$ave_attack = $ave_attack + $arr[$num];
			
	}
		$ave_attack = $ave_attack / 10;
		return $ave_attack;
	}
?>