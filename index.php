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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

		<div id="bg">
			<div class="box">
				<img src="image/lume.png">	
				<a href="#trabalhos" id="close">&times;</a>			
			</div>			
		</div>

		<div class="trabalhos" id="trabalhos">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">


			    <div class="carousel-item active"  style="height: 500px; background-image: url(image/trabalho1.png); background-position: top; background-size: cover;">
			    	<a href="#bg">
				      <div class="mascara" style="background-color: rgba(0,0,0,0.6);"></div>
				      <div class="carousel-caption">
				        <h3>Trabalhos</h3>
				        <p>Site da Liga Universitária Maranhense de e-Sports.</p>
				      </div> 
			      	</a>  
			    </div>

			    <div class="carousel-item" style="height: 500px; background-image: url(image/lume.png); background-position: center; background-size: cover;">
			    	<a href="#">
				      <div class="mascara" style="background-color: rgba(0,0,0,0.3);"></div>
				      <div class="carousel-caption">
				        <h3>Trabalhos</h3>
				        <p>Site do ArraiáDaMira desenvolvido durante o estágio na TV Mirante.</p>
				      </div> 
				    </a>  
			    </div>
			    <div class="carousel-item"  style="height: 500px; background-image: url(image/lume.png); background-position: center; background-size: cover;">
			    	<a href="#">
				      <div class="mascara" style="background-color: rgba(0,0,0,0.3);"></div>
				      <div class="carousel-caption">
				        <h3>Trabalhos</h3>
				        <p>Sistema de apoio ao suporte do processo Judicial Eletrônico (PJe) desenvolvido durante o estágio no TJ-MA.</p>
				      </div>
				    </a>   
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
		<div class="quemsou" id="quemsou">
			<div class="mascara">
				<h2>QUEM SOU</h2>
				<p>Nascido e criado em São Luís do Maranhão, bacharel em Ciência da Computação e desenvolvedor com foco nas linguagens PHP e Java, possuindo um bom conhecimento em HTML, CSS e banco de dados MySql.</p>
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