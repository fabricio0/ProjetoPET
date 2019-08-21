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
  $query = "select nome, email,aprovado from usuario WHERE aprovado = 0;";
  $result = executar($conn,$query);
  ?>
<form id="deletardados" action="aprovarUser.php" method="POST">
<h4>Aprovar Solicitações</h4>
<table class="tabela" id="tbl">
        <thead>
          <tr>
              <th>Nome do solicitante</th>
              <th>Email</th>
              <th>Aprovar</th>
          </tr>
        </thead>

        <tbody>
  <?php
  while ($row = mysqli_fetch_array($result)) {
    ?>
    <?php
        # code...
          echo "<tr>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>
          <input type='checkbox' value='".$row['email']. "' name='toaprova[]'/>
          </td>";
          echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  fechar($conn);
?>
<div class="enviar-pessoais">
    	<button type="submit" name="action">Aprovar</button>
  </div>  
</form>
 </div>
 </section>    
<script type="text/javascript" src="js/cmps.js"></script>
</body>
</html>