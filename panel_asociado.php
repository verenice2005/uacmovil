<!DOCTYPE html>
<html>
<head>
	<title>Asociado - Panel de Control</title>
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
      <a href="#" class="brand-logo">UACMovil</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Ingresar</a></li>
        <li><a href="badges.html">Registrarse</a></li>
        <li><a href="collapsible.html">Rutas</a></li>
      </ul>
    </div>
  </nav>

  <center><h3>Panel de control</h3></center>
        


 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6 m6 l6"><a class="active" href="#rutas">Tus Rutas</a></li>
        <li class="tab col s6 m6 l6 disabled"><a href="#ingresos">Estadisticas e Ingresos</a></li>
      </ul>
    </div>
    <div id="rutas" class="col s12">
    	<div class="container">
  	<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Ruta - Indios Verdes: <span class="green-text right-align"> &nbsp 2 Lugares disponibles</span></div>
      <div class="collapsible-body">
      	<span>

      		<div class="right-align"><a class="waves-effect waves-light btn red">Eliminar ruta</a></div>



      	</span>
      </div>
    </li>
    <li class="active">
      <div class="collapsible-header"><i class="material-icons">place</i>Ruta Politecnico: <span class="red-text">&nbsp VIAJE LLENO</span></div>
      <div class="collapsible-body">
      	<span>

      		<table>
        <thead>
          <tr>
              <th>NOMBRE</th>
              <th>CARRERA</th>
              <th>MATRICULA</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Jesús Alejandro Plancarte Navarro</td>
            <td>Ingenieria de Software</td>
            <td>090110589</td>
          </tr>
          <tr>
            <td>Verenice Martinez Sosa</td>
            <td>Ingenieria de Software</td>
            <td>140110678</td>
          </tr>
          <tr>
            <td>Ruben Omar Cordova Mondragon</td>
            <td>Ingenieria en Telecomunicaciones</td>
            <td>090110235</td>
          </tr>
        </tbody>
      </table>
      		<br>
      		<div class="right-align"><a class="waves-effect waves-light btn red">Eliminar ruta</a></div>
      	</span>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Ruta - La Raza: <span class="green-text">&nbsp 4 lugares disponibles</span></div>
      <div class="collapsible-body">
      	<span>

      		<div class="right-align"><a class="waves-effect waves-light btn red">Eliminar ruta</a></div>
      	</span>
      </div>
    </li>
  </ul>
  <div class="right-align"><a class="waves-effect waves-light btn green">Crear ruta</a></div>
  </div>
  <br>




    </div>
    <div id="ingresos" class="col s12">
    	



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