</head>

<body>
	<?php
  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'sucesso_documento') {
      # code...
      echo "<h1> Sucesso ao inserir documento !! </h1>";
    }
  }
?>

<form id="enviadocs" action="enviardocs.php" method="POST"></form>
<form id="enviaraca" action="enviaraca.php" method="POST"></form>
<form id="exibirgra" action="exibirgra.php" method="POST"></form>
<form id="exibirmes" action="exibirmes.php" method="POST"></form>
<form id="exibirdou" action="exibirdou.php" method="POST"></form>
<form id="exibirdad" action="exibirdad.php" method="POST"></form>
<form id="excluirdocs" action="excluirdocs.php" method="POST"></form>
<form id="excluiraca" action="excluiraca.php" method="POST"></form>

	<section class="sup-nav-bg">
		<div class="sup-nav">
			<ul>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Olá <?php session_start(); echo $_SESSION['nome']; ?></a></li>
        <li><a href="sair.php">Sair</a></li>
			</ul>
		</div>
	</section>
	<header class="nav-bg">
		<nav class="menu-nav">
			<img src="imagem\LogoIfsp.png" alt="logo ifsp">
			<div class="menu-nav-topico">
				<h1>IFSP Câmpus São Carlos</h1>
				<h2>Ministério da Educação</h2>
			</div>
		</nav>
	</header>
	<section class="sub-nav-bg">
			<div class="sub-nav">
				<ul>
					<li><a href="#">Contato e Localização</a></li>
					<li><a href="http://antigo.scl.ifsp.edu.br" target="_blank" rel="noopener noreferrer">Site antigo </a></li>
					<li><a href="https://www.ifsp.edu.br/" target="_blank" rel="noopener noreferrer">Site da reitoria </a></li>
					<li><a href="http://www2.ifsp.edu.br/acessoainformacao//" target="_blank" rel="noopener noreferrer">Acesso à Informação</a></li>
					<li><a href="http://www2.ifsp.edu.br/ouvidoria/" target="_blank" rel="noopener noreferrer">Ouvidoria</a></li>
				</ul>
			</div>
		</section>