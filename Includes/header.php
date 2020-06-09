<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo a Hyundai</title>
<link rel="stylesheet" type="text/css" href="css/texture12.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<head>
<body>
  <nav class=" menu1">
    <div class="row">
      <div class="col-md-6">
    
    </div>
      <div class="container col-md-6">
    <ul class="text-left">   
      <li><a href="">myHYUNDAI</a></li>
      <li><a href=""><i class="fas fa-shopping-cart"></i> Loja Hyundai</a></li>
      <li><a href=""><i class="fas fa-tags"></i> Oportunidades</a></li>
      <li><a href=""><i class="fas fa-tags"></i> Usados</a></li>
    </ul>
    </div>
    </div>
    
  </nav>
  <div  class="div-navbar "> <!--inicio do menu2 ou navbar2, onde está localizado o logotipo -->
  <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="" class="logo"><img src="imagens/logotipos/logotipo1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav nav ">
      <!-- menu 2 area do modelo  -->
      <li class="nav-item active">
        <div class="dropd d-block"> 
          <a href="#modelo" id="drop-menu-modelo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modelos</a>
          <div class="dropdown-menu drop-me-modelo " aria-labelledby="drop-menu-modelo">
              <?php 
              include_once 'Includes/modelo.php';
            ?>
          </div>
         </div>
      </li> <!-- menu 2 fim do modelo  -->
      <!-- menu 2 area das compras  -->
      <li class="nav-item">
        <div class=" dropd"> 
          <a href="#modelo" id="drop-menu-compras" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quero um Hyundai</a>
          <div class=" dropdown-menu dropdown-width" aria-labelledby="drop-menu-compras">
           <div class=" inside-drop">
            <div class="row">
              <div class="col-md-2">
                <a href="" class="dropdown-item" >Marcar Test-drive</a>
                <a href="" class="dropdown-item" >Pedir Proposta comercial</a>
                <a href="" class="dropdown-item" >Campanhas</a>
              </div>
               <div class="col-md-2">
                <a href="" class="dropdown-item" >Finance to Drive</a>
                <a href="" class="dropdown-item" >Oportunidades</a>
                <a href="" class="dropdown-item" >Usados</a>
              </div>
            </div>
          </div>
        </div>
         </div>
      </li>  <!-- menu 2 fim das compras  -->
       <!-- menu 2 area das campanhas  -->
      <li class="nav-item">
        <a href="#" >Campanhas</a>
      </li> <!-- menu 2 fim das campanhas  -->
      <!-- menu 2 area dos servicos -->
      <li class="nav-item"> 
         <div class="dropd"> 
          <a href="#modelo" id="drop-menu-servicos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
          <div class="dropdown-menu dropdown-width" aria-labelledby="drop-menu-servicos">
           <div class=" inside-drop">
            <div class="row">
              <div class="col-md-2">
                <a href="" class="dropdown-item" >Marcar Serviço</a>
                <a href="" class="dropdown-item" >Garantia</a>
                <a href="" class="dropdown-item" >Garantia Suplementar H+</a>
              </div>
               <div class="col-md-2">
                <a href="" class="dropdown-item" >Peças e Acessórios</a>
                <a href="" class="dropdown-item" >Assistência em viagem 24horas</a>
                <a href="" class="dropdown-item" >Serviço de Mobilidade</a>
              </div>
              <div class="col-md-2">
                <a href="" class="dropdown-item" >MyHyundai</a>
              </div>
            </div>
          </div>
          </div>
         </div>
      </li> <!-- menu 2 fim dos servicos  -->
      <!-- menu 2 area das empresas  -->
      <li class="nav-item">
         <div class="dropd"> 
          <a href="#modelo" id="drop-menu-empresa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresas</a>
          <div class="dropdown-menu dropdown-width" aria-labelledby="drop-menu-empresa">
           <div class=" inside-drop">
            <div class="row">
              <div class="col-md-2">
                <a href="" class="dropdown-item" >Hyundai Empresas</a>
                <a href="" class="dropdown-item" >Campanhas</a>
                <a href="" class="dropdown-item" >Benefícios Físicos</a>
              </div>
               <div class="col-md-2">
                <a href="" class="dropdown-item" >Resting</a>
                <a href="" class="dropdown-item" >Soluçoes de Financeamento</a>              
              </div>
            </div>
          </div>
          </div>
         </div>
      </li>    <!-- menu 2 fim da area das empresas  -->
      <!-- menu 2 area das Finanças  -->
      <li class="nav-item">
        <a href="#">Finance to Drive</a>
      </li> <!-- menu 2 fim da area das Finanças  -->
    </ul>
  </a>
  </div>
</nav>
</div>
<div id="accordion" class="button-acording">
</p>
<div class="collapse" id="navbarNav">
    <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-link d-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Modelo</a>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       <?php 
          include 'Includes/modelo.php';
        ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
       <a class="btn btn-link d-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Compras</a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
       <a class="btn btn-link d-block" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Servicos </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       <div class="row">
              <div class="col-md-2">
                <a href="" class="dropdown-item" >Marcar Serviço</a>
                <a href="" class="dropdown-item" >Garantia</a>
                <a href="" class="dropdown-item" >Garantia Suplementar H+</a>
              </div>
               <div class="col-md-2">
                <a href="" class="dropdown-item" >Peças e Acessórios</a>
                <a href="" class="dropdown-item" >Assistência em viagem 24horas</a>
                <a href="" class="dropdown-item" >Serviço de Mobilidade</a>
              </div>
              <div class="col-md-2">
                <a href="" class="dropdown-item" >MyHyundai</a>
              </div>
            </div>
      </div>
    </div>
  </div>
</div>


 
</div>
 <?php 

include_once 'Includes/carrousel.php';
  ?>
