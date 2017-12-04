<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

 <header>
  <figure class="logo animated bounceInLeft pull-left">
    <img src="../img/publim.png" alt="PUBLIM" class="img-responsive">
  </figure>

  <nav class="pull-right animated bounceInLeft"> 
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>
</header>

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.421917638964!2d-93.17891988597934!3d16.705786988490427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9f928130d57%3A0xab38da7211a4919a!2sBlvd.+Bonanza%2C+Residencial+Bonanza%2C+29050+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1512426893660" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<section class="container" style="padding: 5% 0%;">
    <h2 class="text-center">FORMULARIO DE CONTACTO</h2> <br>
    <p class="text-center subtitc">Como sea que quieras contactarnos estamos dispuestos a darte la solución digital que necesita tu empresa.</p> <br><br>

    <div class="row">
        <div class="col-lg-5 ">
            <div class="card border-primary rounded-0">
                <div class="card-header ">
                    <div class=" text-center" style="padding: .5% 0%; background-color: #E94E1B; color: #fff;">
                        <h3><i class="fa fa-envelope"></i> ESCRIBENOS</h3>
                        <p class="m-0">PUBLICIDAD CREATIVA INTEGRAL PUBLIM</p>
                    </div>
                </div> <br>
                <div class="card-body">

                    <div class="form-group">
                        <label>Nombre</label>
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user "></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Escribe tu nombre completo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <div class="input-group mb-2 ">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope "></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Escribe tu correo completo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <div class="input-group mb-2 ">
                            <div class="input-group-addon bg-light"><i class="fa fa-phone prefix "></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Escribe tu teléfono completo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Comentario</label>
                        <div class="input-group mb-2 ">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil "></i></div>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-danger btn-lg btn-block">ENVIAR MENSAJE</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="">    
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <a class="rounded  d-inline-block"><i class="fa fa-map-marker  fa-5x"></i></a> <br><br>
                    <p>CDA. Bonanza #430<br> Col. Residencial Bonanza. <br> Tuxtla Gutierrez, Chiapas <br>
                    C.P. 29055</p>
                    
                </div>

                <div class="col-md-6">
                    <a class="rounded d-inline-block"><i class="fa fa-phone fa-5x"></i></a> <br><br>
                    <p>PENDIENTE</p>
                </div>
             </div> <br><br>
             <div class="row text-center">
                <div class="col-md-6">
                    <a class="rounded d-inline-block"><i class="fa fa-envelope fa-5x"></i></a> <br><br>
                    <p>info@creativospublim.com</p>
                </div>
                <div class="col-md-6">
                    <a class="rounded d-inline-block"><i class="fa fa-clock-o fa-5x"></i></a> <br><br>
                    <p> Lunes a Viernes de 9 am a 6 pm</p>
                </div>
            </div>

        </div>

    </div>

</section>


<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
