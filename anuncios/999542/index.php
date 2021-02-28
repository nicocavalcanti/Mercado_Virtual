<?php
session_start();
include_once("../../BACKEND/connection.php");
$_SESSION["anuncio"]=basename(__DIR__);//volta o nome do arquivo
$_SESSION["url"]=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$query=$pdo->query("SELECT * FROM anuncio WHERE id_carro=".$_SESSION["anuncio"])->fetch(PDO::FETCH_OBJ);
$query1=$pdo->query("SELECT * FROM carros WHERE id_carro=".$_SESSION["anuncio"])->fetch(PDO::FETCH_OBJ);

include("../../BACKEND/anuncio/tela.php");
?>