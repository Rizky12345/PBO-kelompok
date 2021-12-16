<?php 

class random
{
	
	function aa($a)
	{
		if ($a < 50) {
			throw new Exception("$a, random ini tidak valid");
		}
		return $a;
	}
}
try {
	$random = new random();
	echo $random->aa(rand(1,100));

	echo " ,data ini valid";
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>