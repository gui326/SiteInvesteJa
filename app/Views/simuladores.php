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
    <br><br>
    
    <?php if(isset($total)) { ?>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="container p-3 my-3 bg-danger text-white">
                    Capital: R$ <?= $capital ?><br>
                    Lucro: R$ <?= $lucro ?><br>
                    Total: R$ <?= $total ?>
                </div>
            </div>
            <div class="col"></div>
        </div>
    <?php } ?>
    
    <br><br>
    
    
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="<?= base_url('public/simuladores/simular') ?>" method="post">
            <label>Escolha qual o investimento:</label><br>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="radio1" value="option1" checked>CDB/LC
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="radio1" value="option2">LCI/LCA
              </label>
            </div>
            <br><br><label>É pré fixado ou pós fixado?</label><br>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio3">
                <input type="radio" class="form-check-input" id="radio3" name="radio2" value="option1" checked>Pré
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio4">
                <input type="radio" class="form-check-input" id="radio4" name="radio2" value="option2">Pós
              </label>
            </div>
            <br><br>
            <label>Valor Investido:</label>
            <br><input type="text" name="valor" class="form-control" placeholder="Valor do investimento">
            <br><label>Prazo:</label>
            <br><input type="text" name="prazo" class="form-control" placeholder="Prazo">Meses<br>
            <br><label>Taxa:</label>
            <br><input type="text" name="taxa" class="form-control" placeholder="Taxa">Mensal
        
            <br><br><input type="submit" class="form-control">
            </form>
        </div>
        <div class="col"></div>
    </div>
    
    
    
    
    

   
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
