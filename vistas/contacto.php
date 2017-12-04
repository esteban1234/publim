<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

 <nav id="navtop">
        <div class="container-fluid">
      <!--header navbar top left -->
              <ul class="nav navbar-nav" id="nav-left">
                <li><a style="color: #b8b8b8 !important;" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>EVENTOS</a>
                </li>
                <li><a style="color: #b8b8b8 !important;" href="#">
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>ESPECTACULOS</a>
                </li>
                <li><a style="color: #b8b8b8 !important;" href="#">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i>MARKETING</a>
                </li>
              </ul>
      <!--header navbar top right -->
              <ul class="nav navbar-nav nav-pills" id="nav-right">
                <li>
                  <a style="color: #b8b8b8 !important;" href="#">
                        <i class="fa fa-users" aria-hidden="true"></i>SOCIAL</a>
                </li>
                <li>
                  <a style="color: #b8b8b8 !important;" href="#">
                        <i class="fa fa-suser-secret" aria-hidden="true"></i>ARTISTAS</a>
                </li>

                <li>
                  <a style="color: #b8b8b8 !important;" href="#">
                        <i class="fa fa-comments" aria-hidden="true"></i>ACTIVIDADES</a>
                </li>
              </ul>

          </div>
        </nav>
      <!--header navbar LOGO -->
        <div class="text-center" id="logo">
              <a href="#" ><img src="../img/peninsulak.png" class="img-responsive" alt="logo" /></a>
        </div>
      <!-- TOOGLE MAIN NAVIGATION -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

      <!--  MAIN NAVIGATION -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <div class="container">

          <ul class="nav nav-justified nav-pills">
              <li><a href="../index.php">INICIO</a></li>
              <li><a href="nosotros.php">NOSOTROS</a></li>
              <li><a href="servicios.php">SERVICIOS</a></li>
              <li class="active"><a href="contacto.php">CONTACTO</a></li>
          </ul>
          </div>
        </div>
        <br>

<div class="section tit">
  <div class="container outerpadding">
    <div class="row">
    <h2 class="tit-inicial-contacto">Contacta con nosotros si tienes alguna duda.</h2> <br><br>

      <div class="col-sm-6 col-md-6 col-lg-3 bor">
         <div class="panel">
            <div class="panel-heading" style="background-color:#713160;color:#fff;"><strong>Horario</strong></div>
            <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #713160 inset;"><br>
              <p class="pull-left">Lunes a Viernes de 9 am a 6 pm<br></p>
            </div>
         </div>
      </div>

      <div class="col-sm-6 col-md-6 col-lg-3 bor">
         <div class="panel">
            <div class="panel-heading" style="background-color:#713160;color:#fff;"><strong>Teléfono</strong></div>
            <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #713160 inset;"><br>
              <p class="pull-left">Pendiente<br></p>
            </div>
         </div>
      </div>

      <div class="col-sm-6 col-md-6 col-lg-3 bor">
         <div class="panel">
            <div class="panel-heading" style="background-color:#713160;color:#fff;"><strong>Correo</strong></div>
            <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #713160 inset;"><br>
              <p class="pull-left">info@peninsulak.com<br></p>
            </div>
         </div>
      </div>

      <div class="col-sm-6 col-md-6 col-lg-3 bor">
         <div class="panel">
            <div class="panel-heading" style="background-color:#713160;color:#fff;"><strong>Dirección</strong></div>
            <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #713160 inset;"><br>
              <p class="pull-left">C. 11 #335-A por C. 60 y C. 38. Col. Fracc. del Norte, Mérida, Yucatán. C.P. 97120<br></p>
            </div>
         </div>
      </div>

     </div>
  </div>
</div>
 <br><br>

<div class="contacto1">
<div class="container">
	<div class="row">
      <div class="col-md-12">
          <form class="form-horizontal" onSubmit="return false">
          <fieldset>
            <legend style="padding-bottom: 2%;" class="text-center text-form-contacto">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</legend> <br>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nombre Completo</label>
              <div class="col-md-9">
                <input id="txtNOMBRE" name="name" type="text" placeholder="Escribenos tu nombre Completo" class="form-control">
              </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="txtCORREO" name="email" type="text" placeholder="Escribenos tu E-mail Completo" class="form-control">
              </div>
            </div>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Teléfono</label>
              <div class="col-md-9">
                <input id="txtTELEFONO" name="name" type="text" placeholder="Escribenos tu Número de Teléfono Completo" class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Comentario</label>
              <div class="col-md-9">
                <textarea class="form-control" id="txtCOMENTARIO" name="message" placeholder="Escribenos tu mensaje aqui..." rows="5"></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group"><br>
              <div class="col-xs-12 col-sm-12">
                <div id="_AJAX_PRE_"></div>
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-danger btn-lg" onclick="sendCORREO()">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
      </div>
	</div>
</div>
</div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
