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
where (do.nome='GRADUACAO' or do.nome='MESTRADO' or do.nome='DOUTORADO')  and do.proprietario='" . $_SESSION['email'] . "' order by do.nome asc,us.nome asc;";

  $result = executar($conn,$query);

  ?>
  <section class="tabela">
  <table class="tabela" id="tbl">
          <tr>
              <th>Nome do proprietário</th>
              <th>Nome do arquivo</th>
              <th>Arquivo</th>
              <th>Deletar</th>
          </tr>
  <?php
  while ($row = mysqli_fetch_array($result)) {


    ?>

<script type="text/javascript">
  function deletardados(){
    document.getElementById('deletardados').submit();
  }
</script>
<form id="deletardados" action="excluiracad.php" method="POST">
  <input type="" name="deletes" value="<?php echo $row['arqs'] ?>" id="deletardad" placeholder="<?php echo $row['arqs'] ?>">
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
  echo "</table>";
  fechar($conn);

?>
</section>
      </div>
    </section>    

<script type="text/javascript" src="js/cmps.js"></script>
</body>
</html>