<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Página Inicial</title>

	<link rel="stylesheet" href="_css/bootstrap.css">
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>

	<?php 
	session_start();

	if ( !isset($_SESSION['nome']) ) {
		header('location:index.php');
	}

	 ?>

	<header>
		<?php echo $_SESSION['nome'] . ', seja bem-vindo(a)! ' ?>
		| <a href="daoLogin.php?logout=true">sair</a>
	</header>

	<div class="container-fluid">
		<div class="jumbotron">

			<h1>Área do Cliente</h1>
			
		</div>
		
		<h3>Minhas Informações</h3><br>

		<p><strong>Nome Completo: </strong><?php echo $_SESSION['nome'] . ' ' . $_SESSION['sobre']; ?></p>
		<p><strong>Usuario: </strong><?php echo $_SESSION['nick'];  ?></p>
		<p><strong>E-mail: </strong><?php echo $_SESSION['email'];  ?></p>
		<p><strong>Telefone Principal: </strong><?php echo $_SESSION['tel01'];  ?></p>
		<p><strong>Telefone Secundário: </strong><?php echo $_SESSION['tel02'];  ?></p>
		<p><strong>Local de Trabalho: </strong><?php echo $_SESSION['trabalho'];  ?></p>

		<button class="btn btn-primary btn-md">Editar Informações</button>
		<button class="btn btn-warning btn-md">Alterar Senha</button>
		<button class="btn btn-danger btn-md" onclick="confirmExclusao()">Excluir Conta</button>

	</div>

	<footer>
		Desenvolvido por Carlos Alberto Sales
	</footer>

	<script>
		function confirmExclusao() {
		   if (confirm("Tem certeza que deseja excluir seu cadastro?")) {
		      location.href="daoLogin.php?op=2";
		   }
		}
	</script>
	
</body>
</html>