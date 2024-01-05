<!-- INCLUDE -->
<?php
  include ("../../../app/config.php");
?>
<!-- ///INCLUDE -->

<!DOCTYPE html>
<html lang="es">

<!--        HEAD             -->
  <head>
  <title>Disney | Streaming | Paginas | Servicios disponibles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="<?php echo $URL;?>/layout/streaming/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  </head>
<!--       //// HEAD             -->

<!--        HEADER              -->
  <!--         HEADER ARRIBA IZQUIERDO Y DERECHO             -->
  <!--         HEADER ABAJO IZQUIERDO Y DERECHO             -->
  <!--         HEADER TITULO DE PAGINA Y LOGO             -->
    <body id="top">
    <!--         HEADER ARRIBA IZQUIERDO Y DERECHO              -->  
      <div class="wrapper row0">
        <div id="topbar" class="hoc clear"> 
          <!-- HEADER ARRIBA IZQUIERDO -->
            <div class="fl_left">
              <ul class="nospace">
                <li><i class="fa fa-phone"></i> +57 3235303818</li>
                <li><i class="fa fa-envelope-o"></i> disponiblesservicios@gmail.com</li>
              </ul>
            </div>
          <!--/// HEADER ARRIBA IZQUIERDO -->
          <!-- HEADER ARRIBA DERECHO -->
            <div class="fl_right">
              <ul class="nospace">
                <li><a href="<?php echo $URL;?>/index.php">Inicio</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Streaming</a></li>
                <li><a href="<?php echo $URL;?>/paginas/web/index.php">Web</a></li>
              </ul>
            </div>
          <!-- ////HEADER ARRIBA DERECHO -->
        </div>
      </div>
    <!--       /////  HEADER ARRIBA IZQUIERDO Y DERECHO              -->
    <!--         HEADER ABAJO IZQUIERDO Y DERECHO              -->
      <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
          <!-- HEADER ABAJO IZQUIERDO -->
            <div id="logo" class="fl_left">
              <h1><a href="<?php echo $URL;?>/index.php">Servicios Disponibles</a></h1>
            </div>
          <!--/// HEADER ABAJO IZQUIERDO -->
          <!-- HEADER ABAJO DERECHO -->
            <nav id="mainav" class="fl_right">
              <ul class="clear">
                <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Netflix</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/disney.php">Amazon</a></li>
                <li><a href="#">Hbo</a></li>
                <li><a href="#">Disney</a></li>
                <li><a href="#">Amazon</a></li>
                <li><a href="#">Hbo</a></li>
              </ul>
            </nav>
          <!--/// HEADER ABAJO DERECHO -->
        </header>
    <!--      ////   HEADER ABAJO IZQUIERDO Y DERECHO              -->
    <!--      HEADER TITULO DE LA PAGINA Y LOGO -->
        <div class="row">
          <div style="background-color: white;">
            <center>
              <h3 style="color: blue;">Streaming - Disney Plus</h3>
              <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="">
            </center>
          </div>
        </div>
    <!--     /// HEADER TITULO DE LA PAGINA Y LOGO -->
      </div> 
  <!--         HEADER ARRIBA IZQUIERDO Y DERECHO             -->
  <!--         HEADER ABAJO IZQUIERDO Y DERECHO             -->
  <!--         HEADER TITULO DE PAGINA Y LOGO             -->
<!--       /// HEADER              -->

<!--        BODY              -->
  <!--        FOTO DE PRODUCTO PRINCIPAL             -->
    <section>
      <div class="row" >
        <div style="background-color: black;">
          <center>
            <img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" alt="">
          </center>
        </div>
      </div>
    </section>
  <!--        ////FOTO DE PRODUCTO PRINCIPAL             -->
  <!--        LADO IZQUIERDO Y DERECHO -->
    <div class="wrapper row3">
      <main class="hoc container clear">
        <!-- LADO IZQUIERDO -->
          <div class="sidebar one_quarter first"> 
            <!-- PLANES  -->
              <h6 style="color: red;">Planes</h6>
              <nav class="sdb_holder">
                <ul>
                  <li><a href="#netflix">Netflix</a></li>
                  <li><a href="#netflix+disney">Netflix + Disney</a></li>
                </ul>
              </nav>
            <!--//// PLANES  -->
            <!-- PRODUCTO MAS VENDIDO  -->
              <div class="sdb_holder">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="color: red;">Producto mas vendido</h4>
                    <center>
                      <p class="card-subtitle ">Netflix * 3 meses</p>
                      <img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" class="card-img-top" alt="...">
                      <p class="card-text">Precio : 39.000</p>
                      <p class="card-text"><h4>Ahorra : 6.000</h4></p>
                      <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                    </center>
                    
                  </div>
                </div>
              </div>
            <!-- PRODUCTO MAS VENDIDO  -->
            <!-- OTRAS PLATAFORMAS  -->
              <h6 style="color: red;">Otras Plataformas</h6>
              <nav class="sdb_holder">
                <ul>
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/disney.php">Disney Plus</a></li>
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/amazon.php">Amazon Prime</a></li>
                </ul>
              </nav>
            <!-- /////OTRAS PLATAFORMAS -->
          </div>
        <!-- ////LADO IZQUIERDO -->
        <!-- LADO DERECHO -->
          <div class="content three_quarter"> 
            <!-- ACERCA DE -->
              <div class="card">
                <div class="card-header">
                  <h2 style="color: red;">Acerca de Netflix</h2>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">

                    <p>Netflix es un servicio de streaming de entretenimiento en línea que ofrece una amplia 
                      variedad de programas de televisión, películas, documentales y contenido original..
                    </p>

                    <p><span style="color: red;">Lanzamiento:</span> Netflix fue fundado en 1997 por 
                        Reed Hastings y Marc Randolph como un servicio de alquiler de DVD por correo. 
                        La plataforma de transmisión en línea se lanzó en 2007.
                    </p>

                    <p><span style="color: red;">Modelo de Negocio:</span>Netflix opera en un modelo de
                      suscripción mensual. Los suscriptores pagan una tarifa mensual para acceder a una 
                      biblioteca completa de contenido en streaming sin anuncios. 
                      El servicio está disponible en más de 190 países.
                    </p>

                    <p><span style="color: red;">Contenido:</span> Programas de Televisión: Series originales 
                      de Netflix, así como programas de televisión de otras cadenas y productoras. <br>
                      <b>Películas:</b> Una extensa biblioteca de películas de varios géneros, que incluye 
                      tanto títulos clásicos como estrenos recientes.<br>
                      <b>Documentales:</b>Ofrece una variedad de documentales que abarcan temas desde 
                      ciencia y tecnología hasta crímenes reales y acontecimientos históricos.<br>
                      <b>Contenido Original:</b>Netflix ha invertido significativamente en la producción de 
                      contenido original, incluyendo películas, series y programas de televisión exclusivos.
                    </p>

                    <footer class="blockquote-footer">Elige tu plan</footer>
                  </blockquote>
                </div>
              </div>
            <!-- ////ACERCA DE -->
            <br>
            <br>
            <hr>
            <br>
            <!-- PLANES -->
            <!-- PLANES NETFLIX -->
              <div id="netflix" class="center">
                <figure>
                  <header class="heading center">Netflix</header>
                  <br>
                    <ul class="nospace clear" style="color: white;">
                      <!-- PLAN POR UN MES -->
                        <li class="one_quarter first" style="background-color: darkgrey;">
                          <center>
                            <div class="card center" style="width: 11rem;">
                            <br>
                            <h5 class="card-title">1 Pantalla por 1 mes</h5>
                            <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                              alt="foto1"></a>
                              <br>
                              <br>
                              <p class="card-text">Precio : 15.000</p>
                              <br>
                              <br>
                            <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                           </center>
                           <br>
                        </li>
                      <!-- PLAN POR UN MES --> 
                      <!-- PLAN POR DOS MESES -->
                        <li class="one_quarter" style="background-color: darkgrey;">
                          <center>
                            <div class="card center" style="width: 11rem;">
                            <br>
                            <h5 class="card-title">1 Pantalla por 2 meses</h5>
                            <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                              alt="foto1"></a>
                              <br>
                              <br>
                            <p class="card-text">Precio : 27.000</p>
                            <p class="card-text"><h4>Ahorra : 3.000</h4></p>
                            <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                          </center>
                          <br>
                        </li>
                      <!-- PLAN POR DOS MESES -->
                      <!-- PLAN POR TRES MESES -->
                        <li class="one_quarter" style="background-color: darkgrey;">
                          <center>
                            <div class="card center" style="width: 11rem;">
                            <br>
                            <h5 class="card-title">1 Pantalla por 3 meses</h5>
                            <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                              alt="foto1"></a>
                              <br>
                              <br>
                            <p class="card-text">Precio : 39.000</p>
                            <p class="card-text"><h4>Ahorra : 6.000</h4></p>
                            <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                          </center>
                          <br>
                        </li>
                      <!-- PLAN POR TRES MESES -->
                    </ul>
                </figure>
              </div>
            <!-- PLANES NETFLIX-->
              <br>
              <br>
              <hr>
              <br>
            <!-- PLANES NETFLIX+DISNEY-->
              <div id="netflix+disney" >
                <figure>
                  <header class="heading center">Netflix + Disney</header>
                    <ul class="nospace clear" style="color: white;">
                      <li class="one_quarter first" style="background-color: darkgrey;">
                        <center>
                          <div class="card center" style="width: 11rem;">
                          <br>
                          <h5 class="card-title">1 Pantalla por 1 mes</h5>
                          <img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                          alt="foto1">
                          <img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" 
                          alt="foto1">
                          <p class="card-text">Precio:21.000</p>
                          <p class="card-text"><h4>Ahorra:2.000</h4></p>
                          <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                        </center>
                        <br>
                      </li>
                      <li class="one_quarter" style="background-color: darkgrey;">
                      <center>
                          <div class="card center" style="width: 11rem;">
                          <br>
                          <h5 class="card-title">1 Pantalla por 2 mes</h5>
                          <img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                          alt="foto1">
                          <img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" 
                          alt="foto1">
                          <p class="card-text">Precio:40.000</p>
                          <p class="card-text"><h4>Ahorra:6.000</h4></p>
                          <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                        </center>
                        <br>
                      </li>
                      <li class="one_quarter" style="background-color: darkgrey;">
                      <center>
                          <div class="card center" style="width: 11rem;">
                          <br>
                          <h5 class="card-title">1 Pantalla por 3 mes</h5>
                          <img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                          alt="foto1">
                          <img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" 
                          alt="foto1">
                          <p class="card-text">Precio:57.000</p>
                          <p class="card-text"><h4>Ahorra:12.000</h4></p>
                          <a href="#" class="btn" style="background-color: red;" >Pide la tuya</a>
                        </center>
                        <br>
                    </li>
                  </ul>
                </figure>
              </div>
            <!-- PLANES NETFLIX+DISNEY-->
              <br>
              <br>
              <hr>
              <br>
            <!-- ///PLANES -->
          </div>
        <!-- ////LADO DERECHO -->
        <div class="clear"></div>
      </main>
    </div>
  <!--        ///LADO IZQUIERDO Y DERECHO -->
<!--        BODY              -->

<!--            FOOTER            -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Risus lacus ut lectus</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Massa consequat tellus</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Non efficitur lacus elit</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Metus mauris luctus lacinia posuere aenean nec cursus mi nunc ornare interdum [&hellip;]</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Ut ipsum vestibulum et fringilla</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Nunc vitae porttitor ipsum in hac habitasse platea dictumst in quis arcu ac [&hellip;]</p>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Praesent porttitor pulvinar</h6>
      <p class="nospace btmspace-30">Ligula euismod lacinia eget hendrerit nunc mauris ultrices mauris vel.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo $URL;?>/layout/streaming/scripts/jquery.min.js"></script>
<script src="<?php echo $URL;?>/layout/streaming/scripts/jquery.backtotop.js"></script>
<script src="<?php echo $URL;?>/layout/streaming/scripts/jquery.mobilemenu.js"></script>
</body>
</html>