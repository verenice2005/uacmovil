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
<body style="background-color:teal;">
 
  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">UACMovil</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="ingresar.php">Ingresar</a></li>
        <li><a href="registrarse.php">Registrarse</a></li>
        <li><a href="rutas.php">Rutas</a></li>
      </ul>
    </div>
  </nav>
<!--contenido de conductores y rutas-->
 <div class="slider">
    <ul class="slides">
      <!--ruta 1-->
      <li>
        <img src="images/w.jpg"> <!-- random image -->
        <div class="caption right-align">
     <h2 class="light black-text text-lighten-3">
          <br>Ruta - Walmart.</h2>
        <button class="btn waves-effect waves-light" type="submit" name="action">Información
        <i class="material-icons right">send</i>
       </button>

        </div>
      </li>

<!--ruta 2-->
      <li>
        <img src="images/p.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h2 class="light black-text text-lighten-3">Ruta - Progreso.</h2>
          <button class="btn waves-effect waves-light" type="submit" name="action">Información
        <i class="material-icons right">send</i>
       </button>
        </div>
      </li>
      <!--ruta 3-->
      <li>
        <img src="images/po.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h2 class="light black-text text-lighten-3"><br>Ruta - Politecnico.</h2>
          <button class="btn waves-effect left-light" type="submit" name="action">Información
        <i class="material-icons right">send</i>
       </button>
        </div>
      </li>
      <!--ruta 4-->
      <li>
        <img src="images/R.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2 class="light black-text text-lighten-3">Ruta - La Raza.</h2>
          <button class="btn waves-effect waves-light" type="submit" name="action">Información
        <i class="material-icons right">send</i>
       </button>
        </div>
      </li>
    </ul>
  </div>
   
  
 <!--cierra contenido de conductores y rutas--> 

<!--pie de pagina-->
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