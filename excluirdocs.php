<?php
	require_once('init.php');
?>
	<?php
		require_once('headerLog.php');
	?>
<?php
	require_once('lateral.php');
?>   
          
 <div class="largura-pessoais">
  

    <?php
  require_once 'conexao.php';

  define('CAMINHO','/documentos/');


  $conn = connectar();
  $query = "SELECT us.nome as nome,do.nome as arq,do.nome_do_arquivo as arqs,us.email as email FROM documento do JOIN usuario us on us.email = do.proprietario 
where (do.nome='rg' or do.nome='cpf' or do.nome='comprovante de endereço')  and do.proprietario='" . $_SESSION['email'] . "' order by do.nome asc,us.nome asc;";

  $result = executar($conn,$query);

  ?>

<table class="tabela" id="tbl">
        <thead>
          <tr>
              <th>Nome do proprietário</th>
              <th>Nome do arquivo</th>
              <th>Arquivo</th>
              <th>Deletar</th>
          </tr>
        </thead>

        <tbody>
  <?php
  while ($row = mysqli_fetch_array($result)) {
    ?>
<script type="text/javascript">
  function deletardados(){
    document.getElementById('deletardados').submit();
  }
</script>
<form id="deletardados" action="excluirpes.php" method="POST">
</form>
    <?php
        # code...
          echo "<tr>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['arq'] . "</td>";
          echo "<td><a href= \"" .CAMINHO.$row['arqs']  . "\" download>" .$row['arqs'] . "</a></td>";
          echo "<td value='".$row['arqs']. "'><a href='#' onclick='deletardados()'>" . 'Deletar' . "</a></td>"; 
          echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  fechar($conn);

?>
 </div>
 </section>    
<script type="text/javascript" src="js/cmps.js"></script>
</body>
</html>