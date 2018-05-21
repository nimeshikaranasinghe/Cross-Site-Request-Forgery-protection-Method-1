<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['CSFR1'])){
		echo "Hello there! ".$_POST['updatepost'];		
	}
	
	else{
		echo "Wrong".$_COOKIE['CSFR1'];
	}
}
?>