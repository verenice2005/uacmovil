<!DOCTYPE html>
<html>
<head>
	<title>UACMovil</title>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
 
  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">UACMovil-Registro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="ingresar.php">Ingresar</a></li>
        <li><a href="#!">Registrarse</a></li>
        <li><a href="rutas.php">Rutas</a></li>
      </ul>
    </div>
  </nav>
<!--asociados-->
  <div class="container"> 
       
       <div class="row">
          <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-image" style="height: 220px;">
                <img src="images/conductor.jpg">
                <span class="card-title">ASOCIADOS</span>
              </div>
              <div class="card-content">
                <p>Conviertete en socio y de esta manera ten una fuente de ingresos sin dejar tus estudios.</p>
              </div>
              <div class="card-action  center-align">
               

  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Registro de Asociados</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>REGISTRO DE ASOCIADOS</h4>
      <p>                    
        <div class="row">
        <div class="input-field col s12 m12 l12">
          <input placeholder="INGRESA NOMBRE(S)" id="nombre" type="text" class="validate">
          <label for="nombre">NOMBRE(S)</label>
        </div>
        </div>
       <div class="row">
         <div class="input-field col s12 m6 l6">
          <input placeholder="INGRESA APELLIDO" id="apaterno" type="text" class="validate">
          <label for="apaterno">APELLIDO PATERNO</label>
        </div>

         <div class="input-field col s12 m6 l6">
          <input placeholder="INGRESA APELLIDO" id="amaterno" type="text" class="validate">
          <label for="amaterno">APELLIDO MATERNO </label>
        </div>
      </div>
         <div class="row">
        <div class="input-field col s12 m12 l12">
          <input placeholder="INGRESA TU MATRICULA ESCOLAR" id="matricula" type="text" class="validate">
          <label for="matricula">MATRICULA</label>
        </div>
        </div>
         <div class="row">

           <div class="input-field col s12 m12 l12">
          <input placeholder="DIRECCIÓN" id="direccion" type="text" class="validate">
          <label for="direccion">DIRECCIÓN</label>
        </div>

         </div>

          <div class="row">

           <div class="input-field col s12 m12 l12">
          <input placeholder="TELÉFONO" id="telefono" type="text" class="validate">
          <label for="telefono">TELÉFONO</label>
        </div>

         </div>
        
        <div class="row">
          <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">CORREO ELECTRONICO</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">CONTRASEÑA</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
          <input id="rpassword" type="password" class="validate">
          <label for="rpassword">CONFIRMAR CONTRASEÑA</label>
        </div>
      </div>


      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="waves-effect waves-green btn green">REGISTRAR</a>
      <a href="#!" class="modal-close waves-effect waves-green red btn">CANCELAR</a>
    </div>
  </div>
          

              </div>
            </div>
          </div>
<!--cierra asociados-->

          <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-image" style="height: 220px;">
                <img src="images/usuario.png" style="height: 225px;">
                <span class="card-title">USUARIOS</span>
              </div>
              <div class="card-content">
                <p>Conviertete en usuario y podrás gozar de un servicio digno, seguro y a precio accesible.</p>
              </div>
              <div class="card-action center-align">
                
                  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Registro de Usuarios</a>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4> REGISTRO DE USUARIOS</h4>
      <p>                   
        <div class="row">
        <div class="input-field col s12 m12 l12">
          <input placeholder="INGRESA NOMBRE(S)" id="nombreu" type="text" class="validate">
          <label for="nombreu">NOMBRE(S)</label>
        </div>
        </div>
       <div class="row">
         <div class="input-field col s12 m6 l6">
          <input placeholder="INGRESA APELLIDO" id="apaternou" type="text" class="validate">
          <label for="apaternou">APELLIDO PATERNO</label>
        </div>

         <div class="input-field col s12 m6 l6">
          <input placeholder="INGRESA APELLIDO" id="amaternou" type="text" class="validate">
          <label for="amaternou">APELLIDO MATERNO </label>
        </div>
      </div>
     <div class="row">
            <div class="input-field col s12 m12 l12">
              <input placeholder="INGRESA TU MATRICULA ESCOLAR" id="matriculau" type="text" class="validate">
              <label for="matriculau">MATRICULA</label>
            </div>
            </div>
       <div class="row">

           <div class="input-field col s12 m12 l12">
          <input placeholder="TELÉFONO" id="telefonou" type="text" class="validate">
          <label for="telefonou">TELÉFONO</label>
        </div>

         </div>


      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="waves-effect waves-green btn green">REGISTRAR</a>
      <a href="#!" class="modal-close waves-effect waves-green red btn">CANCELAR</a>
    </div>
  </div>
         


              </div>
            </div>
          </div>
        </div>


  </div>





  </div>
        


        <footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 UACM. Todos los derechos reservados.
            </div>
          </div>
        </footer>

 <!--JavaScript at end of body for optimized loading-->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script type="text/javascript" src="materialize/js/scripts.js"></script>
</body>
</html>