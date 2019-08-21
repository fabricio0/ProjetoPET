<?php
	require_once 'conexao.php';
	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	//se ja estiver logado
	if ((isset($_SESSION['email']) || isset($_SESSION['senha'])) && $_SESSION['aprovado'] > '0') {
		header('Location:principal.php');
	}
	else if(!(empty($email)) && !(empty($senha))){

		$conn = connectar();
		$query = "SELECT * FROM USUARIO WHERE email = '".$email."' AND aprovado > 0";
		$result = executar($conn,$query);
		$row = mysqli_fetch_array($result);

		if ($email == $row['email'] && $senha == $row['senha']) {
			# code...
		$_SESSION['nome'] = $row['nome'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['senha'] = $row['senha'];
		$_SESSION['categoria'] = $row['categoria'];
		$_SESSION['area'] = $row['area'];
		$_SESSION['data'] = $row['data_nascimento'];
		$_SESSION['aprovado'] = $row['aprovado'];
		if($row['categoria'] === "2"){
			header('Location:admin.php');
		}
		else{
		header('Location:principal.php');
		}
		}
		else{
			session_destroy();
			header('Location:index.php?msg=usuario_nao_encontrado');
		}

	}
	else{
		session_destroy();
		header('Location:index.php?msg=login_vazio');
	}
?>