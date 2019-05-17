<?php 
session_start();
include_once "conexao.php";

if(isset($_GET['logout'])){

	session_destroy();

	header('location:index.php');

}else if(isset($_GET['op'])){

	if ($_GET['op']=='1') {
		
		try{
			$stmt = $conn->prepare("INSERT INTO usuario (nome, sobrenome, email, nick, senha, telefone01, telefone02, local_trabalho) VALUES ( '".$_POST['nNome']."', '".$_POST['nSobre']."', '".$_POST['nEmail']."', '".$_POST['nUser']."', md5('".$_POST['nSenha']."'), '".$_POST['nTel01']."', '".$_POST['nTel02']."', '".$_POST['nTrab']."' )");
			
			if ($stmt->execute()) {
				$_SESSION['nome'] = $_POST['nNome'];
				$_SESSION['sobre'] = $_POST['nSobre'];
				$_SESSION['nick'] = $_POST['nUser'];
				$_SESSION['email'] = $_POST['nEmail'];
				$_SESSION['tel01'] = $_POST['nTel01'];
				$_SESSION['tel02'] = $_POST['nTel02'];
				$_SESSION['trabalho'] = $_POST['nTrab'];

				echo "<script>alert('Cadastro efetuado com sucesso! =)')</script>";

				header('location:paginainicial.php'); 
			}

		}catch(PDOExeption $e){
			echo "ERROR: " . $e->getMessage();
		}		


	}else if($_GET['op']==2){

		try{
			$stmt = $conn->prepare("DELETE FROM usuario WHERE idUser = '".$_SESSION['id']."' ");

			if ($stmt->execute()) {
				session_destroy();
				header('location:index.php');
			}else{
				echo "<script>alert('Algo deu errado')</script>";
			}
		}catch(PDOExeption $e){
			echo "ERROR: " . $e->getMessage();
		}	

	}else{
		header('location:index.php');
	}

} else {

	try{

		$user = $_POST['nUser'];
		$senha = $_POST['nSenha'];

		$stmt = $conn->prepare("SELECT * FROM usuario WHERE nick = :vuser and senha = md5(:vsenha)");
		$stmt->bindValue(':vuser', $user);
		$stmt->bindValue(':vsenha', $senha);

		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if($result['idUser'] >= 1){
			$_SESSION['id'] = $result['idUser'];
			$_SESSION['nome'] = $result['nome'];
			$_SESSION['sobre'] = $result['sobrenome'];
			$_SESSION['nick'] = $result['nick'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['tel01'] = $result['telefone01'];
			$_SESSION['tel02'] = $result['telefone02'];
			$_SESSION['trabalho'] = $result['local_trabalho'];

			header('location:paginainicial.php'); 
		} else{
			header('location:index.php?erro=1');
		}


	} catch(PDOExeption $e){
		echo "ERROR: " . $e->getMessage();
	}
}


 ?>