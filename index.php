<?php
require_once('init.php');
?>
<?php
require_once('header.php');
?>
<?php
require_once('subHeader.php');
?>
<section class="contato">
<?php
		require_once('contatoLocal.php');
?>
			
		
	<section class="container-modal" data-modal="container">
	<div class="modal">
    <h4>Entrar</h4>
    <form method="POST" action="login.php">
    		<button>x</button>
            <label for="email">Email</label>
            <input  name="email" id="email" type="email">
           <label for="senha">Senha</label>
            <input  name="senha" id="senha" type="password">
           
      		<h6 class="center">Ou</h6>  
      		<label for="codigo">Codigo</label>
            <input  name="codigo" id="codigo" type="email">
             <label for="senha2">Senha</label>
            <input  name="senha2" id="senha2" type="password">
           
          <button class="btn-if" type="submit" name="action">Entrar</button>
    </form>		
</div>
	</section>

<section class="modal-cadastro">
	<div class="modal">
	   <button class="btn-fechar">x</button>
      <h4>Dados Cadastrais</h4>
    <form class="col s12" method="POST" action="cadastrar.php">
			<div class="flex-gd">
			<div class="first-gd">
          <label for="first_nome">Primeiro Nome</label>
          <input id="first_nome" name="first_nome" type="text" required>
          <label for="ultimo_nome">Último Nome</label>
          <input id="ultimo_nome" name="ultimo_nome" type="text" required>
          <label for="emails">Email</label>
          <input  name="email" id="emails" type="email" required>
          <label for="data">Data nascimento</label> 
					<input type="date" name="data" id="data" required>
					</div>
					<div class="second-gd">
          <label for="senhas">Senha</label>
          <input id="senhas" name="senha" type="password" required>
          <label for="confirmar_senha">Confirmar Senha</label>
          <input  name="confirmar_senha" id="confirmar_senha" type="password" required>
    	  <label for="cate">Escolha uma categoria</label>        
   		  <select id="cate" name="categoria" required>
		      <option value="" disabled selected>Escolha uma categoria</option>
		      <option value="1">Professor</option>
		      <option value="2">Administrativo</option>
		      <option value="3">Terceirizados</option>
		  </select>     
		 <label for="areaa">Escolha uma Área</label>	      
	    <select id="areaa" name="area" required>
	      <option value="" disabled selected>Escolha uma Área</option>
	      <option value="1">Informática</option>
	      <option value="2">Gestão</option>
	      <option value="3">Aeronave</option>
			</select>
			</div>
			</div>
  	<button type="submit" class="btn-ifs" name="action">Cadastrar</button>
	</form>
</div>
</section>

<script type="text/javascript" src="js/cmp.js"></script>
</body>
</html>