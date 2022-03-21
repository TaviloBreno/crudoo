<?php 
require 'contato.class.php';

$contato = new Contato();
$email = addslashes($_GET['email']);


if (isset($email) && empty($email) == false) {
	$contato->excluir($email);
	header("Location: index.php");
}else{
	header("Location: index.php");
}
