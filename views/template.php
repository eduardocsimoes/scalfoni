<html>
	<head>
		<title>Scalfoni</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatiple" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>

	<body>
		<div class="header">
			<div class="header-left">
				<div class="nav">
					<ul class="menu">
						<a href="<?php echo BASE_URL; ?>"><li>HOME</li></a>
						<a href=""><li>CATEGORIAS
							<ul class="submenu">
								<a href="<?php echo BASE_URL; ?>promocoes"><li>PROMOCOES</li></a>
								<a href="<?php echo BASE_URL; ?>lancamentos"><li>LANCAMENTOS</li></a>
								<a href="<?php echo BASE_URL; ?>camisetas"><li>CAMISETAS</li></a>
								<a href="<?php echo BASE_URL; ?>bones"><li>BONES</li></a>
								<a href="<?php echo BASE_URL; ?>acessorios"><li>ACESSORIOS</li></a>
								<a href="<?php echo BASE_URL; ?>quadros"><li>QUADROS</li></a>
							</ul>
						</li></a>
						<a href="<?php echo BASE_URL; ?>informacoes"><li>INFORMACOES</li></a>
						<a href="<?php echo BASE_URL; ?>quemsomos"><li>QUEM SOMOS?</li></a>
						<a href="<?php echo BASE_URL; ?>contato"><li>CONTATO</li></a>
					</ul>
				</div>				
			</div>
			<div class="header-center">
				<a href=""><img src="<?php echo BASE_URL; ?>assets/images/general/facebook.png"></a>
				<a href=""><img src="<?php echo BASE_URL; ?>assets/images/general/instagram.png"></a>
			</div>
			<div class="header-right">
				<a href="<?php echo BASE_URL; ?>home/clearcart">
					<span class="clearcart"><?php echo (isset($_SESSION['cart']['amount']) && !empty($_SESSION['cart']['amount'])) ? "Limpar" : ""; ?></span>
				</a>
				<a href="<?php echo BASE_URL; ?>home/logout">
					<span><?php echo (isset($_SESSION['name']) && !empty($_SESSION['name'])) ? "Sair" : ""; ?></span>
				</a>
				<a href="">
					<img src="<?php echo BASE_URL; ?>assets/images/general/cart.png">
					<span class="amountcart">R$ <?php echo (isset($_SESSION['cart']['amount']) && !empty($_SESSION['cart']['amount'])) ? str_replace(".", ",", $_SESSION['cart']['amount']) : "0,00"; ?></span>
				</a>
				<div class="call-user" id="user">
					<img src="<?php echo BASE_URL; ?>assets/images/general/user.png"> 
					<span id="login-name"><?php echo (isset($_SESSION['name']) && !empty($_SESSION['name'])) ? $_SESSION['name'] : "Entrar"; ?></span>
				</div>
			</div>
		</div>

		<div class="carousel slide carousel-fade" id="myCarousel" data-ride="carousel">		
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo BASE_URL; ?>assets/images/slides/banner1.jpg">
				</div>
				<div class="item">
					<img src="<?php echo BASE_URL; ?>assets/images/slides/banner2.jpg">
				</div>
				<div class="item">
					<img src="<?php echo BASE_URL; ?>assets/images/slides/banner3.jpg">
				</div>
				<div class="item">
					<img src="<?php echo BASE_URL; ?>assets/images/slides/banner4.jpg">
				</div>			
			</div>
	        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
		</div>

		<div class="nav-body">
			<div class="menu-left"></div>

			<?php $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER ['REQUEST_URI']; ?>
			<ul class="menu-body">
				<a href="<?php echo BASE_URL; ?>"><li <?php echo (($url == BASE_URL) || ($url == BASE_URL."home")) ? 'class="menu-active"' : '' ?>>TODOS</li></a>
				<a href="<?php echo BASE_URL; ?>promocoes"><li <?php echo ($url == BASE_URL."promocoes") ? 'class="menu-active"' : '' ?>>PROMOCOES</li></a>
				<a href="<?php echo BASE_URL; ?>lancamentos"><li <?php echo ($url == BASE_URL."lancamentos") ? 'class="menu-active"' : '' ?>>LANCAMENTOS</li></a>
				<a href="<?php echo BASE_URL; ?>camisetas"><li <?php echo ($url == BASE_URL."camisetas") ? 'class="menu-active"' : '' ?>>CAMISETAS</li></a>
				<a href="<?php echo BASE_URL; ?>bones"><li <?php echo ($url == BASE_URL."bones") ? 'class="menu-active"' : '' ?>>BONES</li></a>
				<a href="<?php echo BASE_URL; ?>acessorios"><li <?php echo ($url == BASE_URL."acessorios") ? 'class="menu-active"' : '' ?>>ACESSORIOS</li></a>
				<a href="<?php echo BASE_URL; ?>quadros"><li <?php echo ($url == BASE_URL."quadros") ? 'class="menu-active"' : '' ?>>QUADROS</li></a>
			</ul>

			<div class="menu-right"></div>
		</div>

		<div class="body">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>

			<div class="footer">
				<div class="footer-top">
					<div class="footer-left">
						<div class="contact">CONTATO</div>
						<div class="newsletter">
							<input type="email" name="email" placeholder="NEWSLETTER">
							<button>></button>
						</div>
						<div class="phone">
							<img src="<?php echo BASE_URL; ?>assets/images/general/phone.png">
							<span><small>+55 27 </small> 9999-9999</span>
						</div>
						<div class="email">
							<img src="<?php echo BASE_URL; ?>assets/images/general/email.png">
							<span>FALECONOSCO@SCALFONI.COM</span>
						</div>
					</div>
					<div class="footer-right">
						<div class="payment">
							<span>FORMAS DE PAGAMENTO</span>
							<img src="<?php echo BASE_URL; ?>assets/images/general/flags.png">
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="copyright">
						<span>SCALFONI - TODOS OS DIREITOS RESERVADOS</span>
					</div>
					<div class="development">
						<span>DESENVOLVIDO POR <a href="">EDUARDO SIMOES</a></span>
					</div>
				</div>
			</div>
		</div>

		<div class="modal-user">
			<div class="muser">
				<div class="login">
					<h3>Login</h3>
					<form method="POST">
						<input type="email" name="email" id="email" placeholder="EMAIL"><br>
						<input type="password" name="senha" id="senha" placeholder="SENHA"><br>
						<input type="submit" name="entrar" value="Entrar">
					</form>

					<div class="user-msg"></div>
				</div>
				<div class="cadastrar">
					<h3>Cadastrar</h3>
					<form method="POST">
						<input type="email" name="email" placeholder="EMAIL"><br>
						<input type="text" name="nome" placeholder="NOME"><br>
						<input type="text" name="sobrenome" placeholder="SOBRENOME"><br>
						<input type="password" name="senha" placeholder="SENHA"><br>
						<input type="password" name="confirmar" placeholder="CONFIRMAR SENHA"><br>
						<input type="submit" name="cadastrar" value="Cadastrar">
					</form>
				</div>
				<a id="fechar">X</a>
			</div>
		</div>
	</body>
</html>