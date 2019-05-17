<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>

	<link rel="stylesheet" href="_css/bootstrap.css">
	<link rel="stylesheet" href="_css/estilo.css">
	<script src="_scripts/funcoes.js"></script>
</head>
<body>

	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Cadastro de Usuário</h1>
		</div>

		<form action="daoLogin.php?op=1" method="POST">
		
			<div class="row form-group">

				<div class="col">
					<label for="iNome">Nome</label>
					<input type="text" id="iNome" name="nNome" class="form-control" required>
				</div>

				<div class="col">
					<label for="iSobre">Sobrenome</label>
					<input type="text" id="iSobre" name="nSobre" class="form-control" required>	
				</div>
				
			</div>

			<div class="row form-group">

				<div class="col">
					<label for="iUser">Usuário</label>
					<input type="text" id="iUser" name="nUser" class="form-control" required>
				</div>

				<div class="col">
					<label for="iEmail">E-mail</label>
					<input type="email" id="iEmail" name="nEmail" class="form-control" required>
				</div>

			</div>

			<div class="row form-group">

				<div class="col">
					<label for="iTel01">Telefone Principal</label>
					<input type="tel" id="iNome" name="nTel01" class="form-control" required>
				</div>

				<div class="col">
					<label for="iTel02">Telefone Secundário (Opcional)</label>
					<input type="tel" id="iNome" name="nTel02" class="form-control" >
				</div>

				<div class="col">
					<label for="iTrab">Local de Trabalho (Opcional)</label>
					<input type="text" id="iTrab" name="nTrab" class="form-control" >
				</div>

			</div>

			<div class="row form-group">
				
				<div class="col">
					<label for="iSenha">Senha</label>
					<input type="password" id="iSenha" name="nSenha" class="form-control" >
				</div>

				<div class="col">
					<label for="iConf">Confirme a Senha</label>
					<input type="password" id="iConf" name="nConf" class="form-control" onkeyup="verificaSenha()" >
					<div id="verifica"> </div>
				</div>

			</div>

			<div class="row form-group">
				<div class="col">
					<input id="botao" type="submit" class="btn btn-success btn-block" value="Enviar Cadastro" disabled>		
				</div>
			</div>
			

		</form>
	</div>

	<footer>
		Desenvolvido por Carlos Alberto Sales
	</footer>
	
</body>
</html>