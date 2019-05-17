<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Meu Sistema de Login</title>

	<link rel="stylesheet" href="_css/bootstrap.css">
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>

	<div class="container-fluid">
		
		<div class="jumbotron meuLayout">
			
			<h1>Área de Login</h1>
			
			<form action="daoLogin.php" method="POST">
				
				<div class="form-group">
					<label for="iUser">Usuário</label>
					<input type="text" class="form-control" id="iUser" name="nUser">
				</div>

				<div class="form-group">
					<label for="iSenha">Senha</label>
					<input type="password" class="form-control" id="iSenha" name="nSenha">
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-block" value="Entrar">
				</div>

				Não possui cadastro? <a href="cadastro.php">Clique aqui</a>

			</form>

		</div>
	</div>

	<footer>
		Desenvolvido por Carlos Alberto Sales
	</footer>

	<?php 
		if(isset($_GET['erro'])) echo "<script>alert('Usuário ou senha inválido =(')</script>";	
	?>
</body>
</html>