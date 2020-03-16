<?php 
	
	

try {
	
	$db=new PDO("mysql:host=all-in-one4her.eu;dbname=timucini_herdb;",'timucini_heroot','Herroot_12345');
	
}

catch (Expception $e) {

	echo $e->getMessage();
}


 ?>