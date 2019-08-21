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
  $query = "SELECT us.nome as nome,do.nome as arq,do.nome_do_arquivo as arqs,us.email as email FROM documento do JOIN usuario us ON us.email = do.proprietario 
  WHERE do.nome='doutorado' ORDER BY do.nome ASC,us.nome ASC;";
  $result = executar($conn,$query);
  ?>
  <table class="tabela" id="tbl">
        <thead>
          <tr>
              <th>Nome do proprietário</th>
              <th>Nome do arquivo</th>
              <th>Arquivo</th>
              <th>Email do proprietário</th>
          </tr>
        </thead>

        <tbody>
  <?php
  while ($row = mysqli_fetch_array($result)) { 
          echo "<tr>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . 'Doutorado' . "</td>";
          echo "<td><a target=\"_blank\" href= \"" .CAMINHO.$row['arqs']  . "\">" .$row['arqs'] . "</a></td>";
          echo "<td>" .$row['email'] . "</td>"; 
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








