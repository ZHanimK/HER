<?php 


try {
	
	$db=new PDO("mysql:host=localhost;dbname=her_db;charset=utf8",'root','akif20mg');
	#echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>