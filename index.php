<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Consulta Pacientes</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
      
    
</head>
<body>
  <nav class="#1b5e20 green darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="img/logo_menor.png">Cartão Nacional</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Menu 0</a></li>
        <li><a class="white-text" href="#">Menu 1</a></li>

      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Menu 0</a></li>
        <li><a href="#">Menu 1 </a></li>


      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center blue-text">Consulta Paciente</h1>
      <div class="row center">
    

      <h5 class="yeloow-text">Verifique o paciente digitando o cartão nacional abaixo</h5>
      </div>
      <div class="row center">
        
             

<center>
  <article>
         
    



       

        <?php 

        $today = date("20y");                         
      

       ?>
      
        
    
      <div id="contentLoading">
				<div id="loading"></div>
			</div>
			<section class="jumbotron">
				<div id="MostraPesq"></div>
			</section>
		</article>
	</center>
    </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">

          <img class="responsive-img" src="img/c3.jfif">

          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">

          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">

            <img class="responsive-img" src="img/logo2.png">
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

 

  <footer class="#1b5e20 green darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">x</h5>
          <p class="grey-text text-lighten-4"> @ <?php echo $today; ?>.</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <img class="responsive-img" src="img/logo2.png">

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Conecta</h5>
          <ul>
            <li><a class="white-text" href="https://www.saude.sc.gov.br/">SES</a></li>
            <li><a class="white-text" href="http://importacartao.eletivassc.com.br/">Importa Cartão</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container"><h6 class="header center blue-text">Secretaria de Estado da Saúde 
    @ <?php echo $today; ?> <a class="orange-text text-lighten-3" href="http://materializecss.com"></a></h6>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

