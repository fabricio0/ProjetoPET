<?php
require_once('conexao.php');
$aprova = $_POST['toaprova'];
if(!empty($aprova )){
  $con = connectar();
  foreach($_POST['toaprova'] as $apr){
    $apr = "'".$apr."'";
    $query = " UPDATE usuario SET aprovado = 1 where email =
    $apr ";
    executar($con,$query);
  }
  fechar($con);
  header('Location:admin.php');
}
else{
    header('Location:admin.php');
}
?>

