<?php 
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'intraifsp');

	function connectar(){
		$conn = mysqli_connect(SERVIDOR,USUARIO,SENHA,BD) or die('erro ao conectar com banco de dados');
		return $conn;
	}

	function executar($con,$query){
		$resul = mysqli_query($con,$query) or die('erro ao executar consulta');
		return $resul;
	}

	function fechar($con){
		mysqli_close($con) or die('erro ao desconectar com banco');
	}
	

?>