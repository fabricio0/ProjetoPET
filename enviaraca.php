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
		<form enctype="multipart/form-data" method="POST" action="docpessoais.php">
  	<input type="hidden" name="MAX_FILE_SIZE" value="61440">
  
  	<fieldset class="dados-pessoais">
  		<h4>Inserir Documentos Acadêmicos</h4>
  		<label>Escolha a escolaridade</label>  
    		<select name="area1">
      			<option value="" disabled selected>Escolha sua opção</option>
						<option value="GRADUACAO">Graduação</option>
            <option value="MESTRADO">Mestrado</option>
            <option value="DOUTORADO">Doutorado</option>
    		</select>
        <span>File</span>
        <input type="file" name="arquivo1">
  </fieldset>
  <br />
  <fieldset class="dados-pessoais especial">
  	<h4>Inserir Documentos Acadêmicos</h4>
  	<label>Escolha a escolaridade</label>  
        <select name="area2">
            <option value="" disabled selected>Escolha sua opção</option>
            <option value="GRADUACAO">Graduação</option>
            <option value="MESTRADO">Mestrado</option>
            <option value="DOUTORADO">Doutorado</option>
        </select>
       
        <span>File</span>
        <input type="file" name="arquivo2">
  </fieldset>
  

  <div style="margin-top: 30px;" class="enviar-pessoais">
    	<button type="submit" name="action">Enviar</button>
	</div>  
  	</form>
			</div>
		</section>		
	

<script type="text/javascript" src="js/cmps.js"></script>
</body>
</html>