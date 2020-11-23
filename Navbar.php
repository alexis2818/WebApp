
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css.fontello.css">
  <title>Barra de navegacion</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark lighten-1">
    <a class="navbar-brand " href="#">AlexisGaspar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-targe="#navbarSupportContent" arial-controls="navbarSupportedContent"
  aria-expande="false" aria-laber="Toggle navigarion">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="callapse navbar-collapse" id="navbaSupportedContent">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item active">
  <a class="nav-link" href="#">Inicio</a>
  <span class="sr-only">(current)</span>
</li>
<li class="nav-item active">
<a class="nav-link" href="#">Acerda de</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="icon-coffe">Productos</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item"href="#">Bebidas</a>
       <a class="dropdown-item"href="#">Frituras</a>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item"href="#">Mas Productos</a>
    </div>
  </li>
</ul>
 <ul class="navbar-nav ml-auto nav-flex-icons">
   <li class="nav-item avatar">
     <a class="nav-link p-0 rounded-circle z-depth-0" href="#"><span class="icon-user-1"></span></a>
   </li>
   <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="icon-coffe">Usuario</span>
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item"href="#">Perfil</a>
          <a class="dropdown-item"href="#">Configuracion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"href="#">Cerrar Sesion</a>
        </div>
      </li>
  </ul>
 </div>
 </nav>
 <div class="modal fade" id="ModalCenter" tabinex="1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-centent">
       <div class="modal-header">
         <h5 class="modal-title" id="ModalCenterTitle">CerrarSesion</h5>
           <button type="button" class="close" data-dismiss="modal" arial-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
        <div class="modal-body">¿Deceas cerrar tu sesion?</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">CerrarSesion</button>
      </div>
      </div>
   </div>
  </div>
 <section>
<div class="contaier">
  <div class="row">
    <div class="col-sm">
      <div class="card mb-3" style="max-width: 380px">
        <div class="row no-gutters">
          <div class="cold-md-4">
            <img src="img/img1.png" class="card-img" alt="Producto1">
          </div>
          <div class="cold-md-8">
            <div class="card-body">
              <h5 class="card-title">Nombre del juego</h5>
              <p class="card-text">Descripcion</p>
              <p class="card-text"><small class="text-muted">Precion:</small></p>
              <button type="button" name="btn-jugar" class="btn btn-success nav-link">Jugar</button>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Categoria:
        </div>
      </div>
    </div>
  </div>
</div>
</section>

       <script src="js/bootstrap.js"></script>
       <script type="js/jquery-3.5.1.min.js"></script>
 </body>
 </html>
