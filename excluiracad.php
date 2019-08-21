<?php
	require_once 'conexao.php';
	session_start();
  $conn = connectar();
  $query = "DELETE FROM documento where proprietario = '". $_SESSION['email'] . "' AND nome_do_arquivo = '" . $_POST['deletes'] . "' ;";
  executar($conn,$query); 
  fechar($conn);
  header('Location:principal.php?msg=sucesso_dadoacad');
?>