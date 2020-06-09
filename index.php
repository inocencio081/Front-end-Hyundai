<?php 
  include_once 'Includes/header.php';
 ?>

  <div class="corpo" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
<!-- inicio da area de modelos     -->
  <div id="modelos">
   <div class="modelos-drop"><h1> Modelos</h1></div>
    <?php 
          include_once 'Includes/modeloIndex.php';
       ?>
         <div class="container text-center">
      <button class="btn btn-primary  btn-alter">
            Ver Mais
          </button>
    </div>
    <div class="container text-center">  
          <div class="modelos-drop-box">
             <a href="#"><i class="far fa-bookmark icon-modelo"></i>
             <span class="text-model">Marcar um teste drive</span></a>
          </div>
         <div class="modelos-drop-box">
             <a href="#"><i class=" fa fa-book icon-modelo"></i>
             <span class="text-model">Pedir um Catalogo</span></a>
          </div>
          <div class="modelos-drop-box">
             <a href="#"><i class=" far fa-calendar-alt icon-modelo"></i>
             <span class="text-model">Marcar um Serviço</span></a>
          </div>
         <div class="modelos-drop-box">
             <a href="#"><i class=" far fa-comment icon-modelo"></i>
             <span class="text-model">Entrar em Contacto</span></a>
          </div>
    </div> 
</div>
<!-- fim da area de modelos -->
<!-- inicio do section centro  -->
<section class="centro">
  <div class=" img-centro">
    <img class="img-fluid" src="imagens/P_Banner_desktop.jpg">
  <div class="container text-center">
     <button class=" btn btn-primary  btn-alter btn-img-center">
            Saiba mais
          </button>
  </div>
    
    <div class="container mt-5">
      <h3>Receba as novidades da Hyundai em primeira mão.</h3>
    <form>
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
            <input class="form-control" type="text" name="" placeholder="Nome">
         </div>
       </div>
       <div class="col-md-6">
           <div class="form-group">
            <input class="form-control" type="text" name="" placeholder="email">
         </div>
       </div>
     
      </div>
      <div class="row">
       <div class="col-md-12">
           <div class="form-group">
            <input  type="checkbox" name=""> Li e aceito a <a href="">Política de privacidade</a>.<span class="texto-azul">*</span><br><br>
             <button class="btn btn-primary text-center btn-alter">Subscrever
         </div>
       </div>
      </div>
    </form>
    </div>
</section>
<!-- inicio do menu fixo a direita -->
<div class="menufixo-direita">
  <ul class="list-inline">
    <li>
        <div class="dropdown1"> 
           <a href=""> <i class="far fa-bookmark icon-menu"></i></a> 
              <div class="dropdown-content2">
                <a href="#" data-toggle="tooltip" data-placement="top" title="bla!"><a href="">Teste-drive</a></div>
          </div>   
      </li>
    <li>
       <div class="dropdown1"> 
           <a href=""><i class=" fa fa-book icon-menu"></i></a>
              <div class="dropdown-content2">
                <a href="#" data-toggle="tooltip" data-placement="top" title="bla!"><a href=""></a> Catálogo</div>
          </div>  
         </li>
  <li>
     <div class="dropdown1"> 
        <i class=" far fa-calendar-alt icon-menu"></i></a>
        <div class="dropdown-content2">
         <a href="#" data-toggle="tooltip" data-placement="top" title="bla!"><a href="">Concessionário</a>
       </div>
     </div>  
  </li>
    <li>
       <div class="dropdown1"> 
           <a href=""><i class=" far fa-comment icon-menu"></i></a>
              <div class="dropdown-content2">
                <a href="#" data-toggle="tooltip" data-placement="top" title="bla!"><a href="">Pedidos de Info</a></div>
          </div>  
         </li>
  </ul>
</div>
<!-- fim do section centro  -->
      <?php 
          include_once 'Includes/noticias.php';
       ?>
        <?php 
          include_once 'Includes/sobre.php';
       ?>
<!-- area da assistente virtual -->
<div class="assistente-virtual">

<button class="open-button" onclick="openForm()"><i class="fas fa-comments"></i></button>
<div class="chat-popup" id="myForm">
   <div class="assistent-header"> 
    <div class="img-assistente"><img src="imagens/clara.png"></div> 
   
   <div class="assistente-text">
      <span style="color: #fff; font-size: 16;" class="font-weight-bold">Clara</span><br>
      <span style="color: #fff; font-size: 12;"> Assistente Digital da Hyundai </span>
    </div>
      <a href="" class="btn btn-outline-dark" onclick="closeForm()"><i class="fas fa-window-close"></i></a>
    </div>
  <form action="/action_page.php" class="form-container">
<div class="container row">
  <div class="col-md-10 form-group">  
    <input type="text" name="" class="form-control" placeholder="Type message.." name="msg" required> 
 </div>
 <div class="col-md-2"> 
  <button type="button" class=" btn btn-success btn-lg"><i class="far fa-paper-plane"></i></button> 
 </div>
</div>   
  </form>
</div>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<!-- fim da assistente virtual -->
<footer>
 <div class="container">
   <a href="library.php" class="logo-footer"><img src="imagens/logotipos/logotipo2.png"></a>
      <a href="">Notícias</a>
      <a href="">Contacte-nos</a>
      <a href="">políticas de Privacidade</a>
      <a href=""> Políticas de Cookies</a> 
      <br>
      <h6>© 2020 Hyundai</h6>
      <br>
 </div>
</footer>


<script src="js/all.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

