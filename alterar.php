<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" type="image/x-icon" href="imagem/logoif.jpg">
      <script type="text/javascript" src="jssair.js"></script>
      <title>Projeto pet</title>
      <form id="sair" action="sair.php" method="POST"></form>
    </head>




    <body>


  <div class="row">   
  <ul id="dropdown1" class="dropdown-content">
  <li><a class="modal-trigger" href="#modal4">Cadastrar-se</a></li>
  <li><a class="modal-trigger" href="#modal1">Entrar</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a class="modal-trigger" href="#modal10">Alterar</a></li>
  <li><a class="modal-trigger" href="#" onclick="sair()">Sair</a></li>
</ul>
<nav>
  <div class="nav-wrapper teal accent-4 z-depth-0">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">olá <?php session_start(); echo $_SESSION['nome']; ?>
<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="badges.html">Components</a></li>
      <!-- Dropdown Trigger -->

      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Entrar | Cadastrar-se<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
  <br />

	<div class="row">
		<div class="col s12 m12 l12 center">Alterar dados Pessoais</div>
	</div>

	<div class="row">
    <form>
      <div class="row">
        <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
          <input id="nome_altera" name="nome_altera" type="text" class="validate">
          <label for="nome_altera">Nome</label>
        </div>
        <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">email</label>
        </div>
        <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
          <input id="categoria" name="categoria" type="text" class="validate">
          <label for="categoria">categoria</label>
        </div>
        <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
          <input id="area" name="area" type="text" class="validate">
          <label for="area">area</label>
        </div>
        <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
          <input id="data" name="data" type="date" class="validate">
          <label for="data">data nascimento</label>
        </div>
        <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
          <button class="btn waves-effect waves-light right" type="submit" name="action">Entrar
               <i class="material-icons right">send</i>
           </button>
      </div>
      </div>
    </form>
  </div>

  <script type="text/javascript">
  	function preenche() {
  		document.getElementById('nome_altera').innerHTML = "Hello";
  	}
  </script>

</div>
</body>
</html>
