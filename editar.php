
<?php 
include 'contato.class.php';
$contato = new Contato();
$email = addslashes($_GET['email']);
$usuario = $contato->getNome($email);

if (isset($_POST['nome']) && empty($_POST['email']) == false) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$contato->editar($nome, $email);

	header("Location: index.php");
}


 ?>
<h1>Editar Contato</h1>

<form  method="POST">
 	Nome: <br>
 	<input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"><br><br>
 	E-mail: <br>
 	<input type="email" name="email" required="" value="<?php echo $usuario['email']; ?>"><br><br>
 	<input type="submit" value="Editar">
 </form>