<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Investe Já</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/44f3e84769.js" crossorigin="anonymous"></script>
    
    
</head>
<body>

<nav class="navbar navcor navbar-expand-md navbar-light navgui">
<div class="logo">
  <a href="<?= base_url('public') ?>"><img class="imagemlogo" src="<?= base_url('images/logo.png') ?>"></a>
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul style="margin-left:auto;" class="navbar-nav">
        <a href="<?= base_url('public/Simuladores') ?>">
            <li class="nav-item">
                Simuladores
            </li>
        </a>
        <a href="#">
      <li class="nav-item">
        Contato
      </li> 
            </a>
    </ul>
  </div> 
</nav>
    
    
<div class="container-fluid">
    

    
    <br>

    
    
    <div  class="row">
        <div class="col-sm-1"></div>
    </div>
    
    <script>
        function myFunction(valor) {
            if (valor == 1){
                window.location.href = "<?= base_url('public/investimentos') ?>";
            }
            else
                window.location.href = "<?= base_url('public/perfil') ?>";
        }
    </script>
    
    <br><br>
    
  
  <div class="row">
    <div class="col-sm-2"></div>
      
        <div class="col-sm-8"><h1><span id="aumento">Olá, bem vindo.</span><br><br> Aqui você descobre onde e como investir da melhor forma.</h1><br>
            <span style="text-align: center;">
                <h1>Então Vamos iniciar</h1><br>
                <h2>Você ja conhece seu perfil de investimentos? </h2><br>
                <div>
                    <button id="botoes" style="margin: 10px;" type="button" class="btn btn-info" onclick="myFunction(1)" >Sim</button>
                    <button id="botoes" type="button" class="btn btn-info" onclick="myFunction(2)" >Não</button>
                </div>
                
            </span>
        </div>
    <div class="col-sm-2"></div>
  </div>
    

    
    
    <br><br>
    
    <!-- Footer -->
	<section id="footer">
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/tiago.sousa.58511276" target=”_blank”><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=5516988582756&text=sua%20mensagem" target=”_blank”><i class="fa fa-whatsapp"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/tg.sousa/" target=”_blank”><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<h1>Tiago Sousa</h1>
					<p class="h6">© All right Reversed. Guilherme</p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
    
    
    
    
    
    
</div>

</body>
</html>
