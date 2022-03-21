	<?php 

	include 'contato.class.php';

	$contato = new Contato();
	?>

	<h1>Contatos</h1>
	<br>
	<a href="adicionar.php" title=""><button>Adicionar contato</button></a>
	<hr><br>

	<table border="1" width="800" align="center">
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
				<td> <a href="editar.php?email=<?php echo $item['email']; ?>"><button>Editar</button></a> | <a href="excluir.php?email=<?php echo $item['email']; ?>"><button>Excluir</button></a></td>
			</tr>

			<?php

			}

	 		?>
		</tbody>
	</table>




