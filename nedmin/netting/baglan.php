<?php 

try {
	
	$db=new PDO("mysql:host=localhost;dbname=emlakscripti;charset=utf8",'root','12345678');
	//echo "database' uğurla qoşuldu :)"."<br>";

}
catch (PDOException $e) {

	echo "Syntax Error: ".$e->getMessage();

}

?>