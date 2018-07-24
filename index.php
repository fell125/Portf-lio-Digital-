<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Felipe Lima | Programador - Portfólio Digital</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>  	

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/script.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">

	<script type="text/javascript">
		$(window).on('scroll', function(){
			if ($(window).scrollTop()){
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
		})
	</script>

	<script>
		$(document).ready(function() {

			$('.linkTopo').click(function() {
				$('html, body').animate({
				scrollTop: $('#topo').offset().top
				}, 1000);
			});

			$('.linkTrabalhos').click(function() {
				$('html, body').animate({
				scrollTop: $('#trabalhos').offset().top
				}, 1000);
			});

			$('.linkQuemsou').click(function() {
				$('html, body').animate({
				scrollTop: $('#quemsou').offset().top
				}, 1000);
			});

			$('.linkContato').click(function() {
				$('html, body').animate({
				scrollTop: $('#contato').offset().top
				}, 1000);
			});

		});
	</script>

</head>
<body>
	<div class="col-md-12">
		<nav >
			<div class="logo"><a class="linkTopo" href="#"> Felipe Lima</a></div>
			<ul>
				<li><a class="linkTrabalhos" href="#">Trabalhos</a></li>
				<li><a class="linkQuemsou" href="#">Quem sou?</a></li>				
				<li><a class="linkContato" href="#">Entre em contato</a></li>
			</ul>
		</nav>
		<div class="cabecalho" id="topo">
		
		</div>

		<div class="trabalhos" id="trabalhos">
			<div class="content trabalhos-inside">
				<h2>Trabalhos</h2>
				<div class="row">
					<div class="bloco-trabalho">
						 <ul class="gallery clearfix">
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"><div class="trabalhos-fotos" style="background-image: url(image/LUME.png);"></div></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>		
						</ul> 
						<h3>Site da Liga Universitária Maranhense de e-Sports.</h3>
					</div>
					<div class="bloco-trabalho">
						 <ul class="gallery clearfix">
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"><div class="trabalhos-fotos"  style="background-image: url(image/arraia.png);"></div></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>		
						</ul> 
						<h3>Site do ArraiáDaMira 2017 desenvolvido durante o estágio na TV Mirante.</h3>
					</div>
					<div class="bloco-trabalho">
					 <ul class="gallery clearfix">
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"><div class="trabalhos-fotos"  style="background-image: url(image/tj.jpg);"></div></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>
							<li><a href="image/trabalho1.png" rel="prettyPhoto[gallery]"></a></li>		
						</ul> 
						<h3>Sistema de apoio ao suporte do processo Judicial Eletrônico (PJe) desenvolvido durante o estágio no TJ-MA.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="quemsou" id="quemsou">
			<div class="content">
				<?php 
					
				    $data = '21/06/1995';				   
				    
				    list($dia, $mes, $ano) = explode('/', $data);			   
				    
				    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
				    
				    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
				  
				    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
				    
				?>	
				<h2>QUEM SOU</h2>
				<p>Nascido e criado em São Luís do Maranhão, <?php echo $idade; ?> anos, bacharel em Ciência da Computação e desenvolvedor com foco nas linguagens PHP e Java.</p>
			</div>
		</div>
		<div class="contato" id="contato">
			<div class="col-md-7 formulario">
				<h1>ENTRE EM CONTATO</h1>
				<h2><i class="fa fa-whatsapp"></i>  98 98256.8262</h2>
				<h2><i class="material-icons">email</i> limamr.felipe@gmail.com</h2>
				<form method="POST" name="form_contato" action="func/enviar.php">
				  <div class="form-group">	
				 	<input type="text" class="form-control" name="nome" placeholder="Nome" required style="background-color: #111; color: white;">			   
				    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" required style="background-color: #111; color: white;">
				    <input id="telefone" type="text" class="form-control" name="telefone" placeholder="Telefone" required maxlength="13" style="background-color: #111; color: white;">

				    <script>
				    	jQuery("input#telefone")
				        .mask("(99) 9999-9999?9")
				        .focusout(function (event) {  
				            var target, phone, element;  
				            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
				            phone = target.value.replace(/\D/g, '');
				            element = $(target);  
				            element.unmask();  
				            if(phone.length > 10) {  
				                element.mask("(99) 99999-999?9");  
				            } else {  
				                element.mask("(99) 9999-9999?9");  
				            }  
				        });
				    </script>

				    <textarea type="text" class="form-control" name="msg" placeholder="Mensagem" rows="5" required style="background-color: #111; color: white;"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
		 <div class="push"></div>
		 
	</div>

	<footer class="footer">
		<ul>
			<li>©Felipe Lima</li>
			<li>98 98256.8262</li>
			<li>limamr.felipe@gmail.com</li>
			<li>LinkedIn</li>
			<li>GitHub</li>
		</ul>
	</footer>
</body>
</html>