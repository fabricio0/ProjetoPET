<?php
	require_once 'conexao.php';
	session_start();
	define('CAMINHO','C:\Users\fabricio\Desktop\projetopetiano\materialize\documentos\\');

	$nome1 =  $_POST['area1']; 
	$nome2 =  $_POST['area2']; 
	$arquivo1 =time() . $_FILES['arquivo1']['name']; 
	$arquivo2 = time() .$_FILES['arquivo2']['name']; 
	$tam1 =$_FILES['arquivo1']['size']; 
	$tam2 =$_FILES['arquivo2']['size']; 
	$server_temp1 = $_FILES['arquivo1']['tmp_name'];
	$server_temp2 = $_FILES['arquivo2']['tmp_name'];


	if (empty($nome1) && empty($nome2)) {

		header('Location:enviardocs.php?msg=campos_vazios');
		# code...
	}//61440
	else if(!(empty($nome1)) && !(empty($nome2))){
		$conn = connectar();
		$query1 = "INSERT INTO documento(nome,nome_do_arquivo,proprietario) VALUES('" .$nome1. "','". $arquivo1 ."','" . $_SESSION['email'] ."');";
		$query2 = "INSERT INTO documento(nome,nome_do_arquivo,proprietario) VALUES('" .$nome2. "','". $arquivo2 ."','" . $_SESSION['email'] ."');";
		$resul1 = executar($conn,$query1);
		$resul2 = executar($conn,$query2);
		move_uploaded_file($server_temp1, CAMINHO . $arquivo1);
		move_uploaded_file($server_temp2, CAMINHO . $arquivo2);
		fechar($conn);
		header('Location:principal.php?msg=sucesso_documento');

		/*
		$query1 = "SELECT nome FROM documento Where disponibilidade = 1 AND nome = '" . $nome1 ."' AND proprietario = '" . $_SESSION['email'] ."';";
		$query2 = "SELECT nome FROM documento Where disponibilidade = 1 AND nome = '" . $nome2 ."' AND proprietario = '" . $_SESSION['email'] ."';";
		$resul1 = executar($conn,$query1);
		$resul2 = executar($conn,$query2);
		$row1 = mysqli_fetch_array($resul1);
		$row2 = mysqli_fetch_array($resul2);

		if (mysqli_num_rows($resul1)  '0') {
			# code...
			echo $row1['nome'];
			echo "ola";

		}*/
	}

		else if (!(empty($nome1))) {
			# code...
		$conn = connectar();
		$query1 = "INSERT INTO documento(nome,nome_do_arquivo,proprietario) VALUES('" .$nome1. "','". $arquivo1 ."','" . $_SESSION['email'] ."');";
		$resul1 = executar($conn,$query1);
		move_uploaded_file($server_temp1, CAMINHO . $arquivo1);
		fechar($conn);
		header('Location:principal.php?msg=sucesso_documento');
		}
		else if (!(empty($nome2))) {
			# code...
		$conn = connectar();
		$query2 = "INSERT INTO documento(nome,nome_do_arquivo,proprietario) VALUES('" .$nome2. "','". $arquivo2 ."','" . $_SESSION['email'] ."');";
		$resul2 = executar($conn,$query2);
		move_uploaded_file($server_temp2, CAMINHO . $arquivo2);
		fechar($conn);
		header('Location:principal.php?msg=sucesso_documento');
		}
?>