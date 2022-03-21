<?php 
require 'contato.class.php';
$contato = new Contato();

if (!empty($_POST['nome'])) {
	
	

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$contato->adicionar($email, $nome);

	header("Location: index.php");

}

 ?>

 <h1>Adicionar Contato</h1>

 <form  method="POST">
 	Nome: <br>
 	<input type="text" name="nome"><br><br>
 	E-mail: <br>
 	<input type="email" name="email" required=""><br><br>
 	<input type="submit" value="Adicionar">
 </form>



