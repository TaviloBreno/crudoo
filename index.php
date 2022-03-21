	<?php 

	include 'contato.class.php';

	$contato = new Contato();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>CRUD OO</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
	
	<h1>Contatos</h1>
	<br>
	<a href="adicionar.php" class="modal_ajax" title=""><button>Adicionar contato</button></a>
	<hr><br>

	<table border="1" width="650" align="center">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-Mail</th>
				<th>AÇÕES</th>
			</tr>
		</thead>
		<tbody align="center">
		<?php 
			$lista = $contato->getAll();

			foreach ($lista as $item) { 
			?>
			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['nome']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td> <a href="editar.php?email=<?php echo $item['email']; ?>" class="modal_ajax"><button>Editar</button></a> | <a href="excluir.php?email=<?php echo $item['email']; ?>"><button>Excluir</button></a></td>
			</tr>

			<?php

			}

	 		?>
		</tbody>
	</table>

	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>

	<div class="modal_bg">
		<div class="modal">
			
		</div>
	</div>

	</body>
	</html>



