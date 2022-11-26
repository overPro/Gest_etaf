<?php 
try{
$this->con = new PDO('mysql:host=localhost;dbname=gest_etaf','root','');
} catch(Exception $e)
{
	echo 'Exception reçue : ',  $e->getMessage();
}

 ?>