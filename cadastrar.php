<?php
	require_once 'conexao.php';
	session_start();
	//OBTENÇÃO DE DADOS DO FORMULÁRIO
	$nome = $_POST['first_nome'];
	$ultimo_nome = $_POST['ultimo_nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmar_senha = $_POST['confirmar_senha'];
	$data = $_POST['data'];
	$data_final = str_replace('-', '/', $data);
	$area = $_POST['area'];
	$categoria = $_POST['categoria'];

	/* verificar se estão corretos
	echo "$nome \n";
	echo "$ultimo_nome \n";
	echo "$email \n";
	echo "$senha \n";
	echo "$confirmar_senha \n";
	echo "$data \n";
	echo "$categoria \n";
	echo "$area";
	*/
	//verifica se existe campo vazio 
	if (!(empty($nome)) && !(empty($ultimo_nome)) && !(empty($email)) && !(empty($senha)) && !(empty($confirmar_senha)) && !(empty($data)) && !(empty($area)) && !(empty($categoria))) {
	//verifica se a senha são iguais
		if ($senha == $confirmar_senha) {
			# code...
			//pesquisar no bd e verificar se existe usuario com mesmo email
			$conn = connectar();
			$query = "SELECT nome,email,senha,categoria,area,data_nascimento FROM usuario where'" . $email . "'= email";
			$result = executar($conn,$query);
			
			$row = mysqli_fetch_array($result);
						
			
			if($row['email'] != $email){
				/*
				echo $_SESSION['nome'];
				echo $_SESSION['email'];
				echo $_SESSION['senha'];
				echo $_SESSION['categoria'];
				echo $_SESSION['area'];
				echo $_SESSION['data'];
				echo $_SESSION['aprovado'];
				*/

				$query_inserir = "INSERT INTO usuario(aprovado,nome,email,senha,categoria,area,data_nascimento)
				values(". '0' . ",'". $nome .
				"','". $email ."','" . $senha . "','". $categoria ."','". $area  ."','" . $data_final . "');";

				executar($conn,$query_inserir);

				header('Location:index.php?msg=aguardando_aprovação');
				fechar($conn);
				
			}
			else{
				fechar($conn);
				session_destroy();
				header('Location:index.php?msg=email_existente');
			}
		


		}
		else{
			fechar($conn);
			session_destroy();
			header('Location:index.php?msg=senhas_diferentes');
		}
		
	}
	else{
		session_destroy();
		header('Location:index.php?msg=campo_vazio');
	}
?>