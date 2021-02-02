<?php
	//paramentros da conexão
    define("HOST","127.0.0.1");
    define("USER","root");
    define("SENHA", "senha");
    define("BD", "bd");
    //criar conexão
    try {
    	$pdo=new PDO("mysql:host=".HOST.";dbname=".BD,USER,SENHA);
    }catch (Exception $e) {
    	echo 'Não foi possivel conectar';
    	$pdo->rollBack();
    }
    
?>