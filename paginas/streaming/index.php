

<!-- INCLUDE -->
  <?php
    include ("../../app/config.php");
  ?>
<!-- ///INCLUDE -->

<!--        HEAD             -->
  <!DOCTYPE html>
  <html lang="es">
  <head>
  <title>Streaming |  Servicios disponibles</title>
  <meta charset="utf-8">
  <meta name="viewport" 
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="<?php echo $URL;?>/layout/inicio/styles/layout.css" 
        rel="stylesheet" type="text/css" media="all">
  <link href="<?php echo $URL;?>/layout/streaming/styles/layout.css" 
        rel="stylesheet" type="text/css" media="all">
  <link href="<?php echo $URL;?>/layout/streaming/styles/styles.css" 
        rel="stylesheet" type="text/css" media="all">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" 
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" 
  href="<?php echo $URL;?>/layout/inicio/styles/fontawesome-free/css/all.min.css">
 
       
  </head>
<!--       //// HEAD             -->

<!-- Google tag (gtag.js) -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7Z319NRQMT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7Z319NRQMT');
  </script>
<!-- Google tag (gtag.js) -->

<!--        HEADER              -->
  <!--       HEADER ARRIBA IZQUIERDO  DERECHO // ABAJO IZQUIERDO  DERECHO HEADER // TITULO DE PAGINA Y LOGO             -->
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
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/disney.php">Disney</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/amazon.php">Amazon</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/hbo.php">Hbo</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/star.php">Star</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/paramount.php">Paramount</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/youtube.php">Youtube</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/combos.php">combos</a></li>
              </ul>
            </nav>
          <!--/// HEADER ABAJO DERECHO -->
        </header>
    <!--      ////   HEADER ABAJO IZQUIERDO Y DERECHO              -->
    <!--      HEADER TITULO DE LA PAGINA Y LOGO -->
        <div class="row">
          <div style="background-color: white;">
            <center>
              <h3 style="color: red;">Streaming - Netflix</h3>
              <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="">
            </center>
          </div>
        </div>
    <!--     /// HEADER TITULO DE LA PAGINA Y LOGO -->
      </div> 
  <!--    // HEADER ARRIBA IZQUIERDO  DERECHO // ABAJO IZQUIERDO  DERECHO HEADER // TITULO DE PAGINA Y LOGO           -->
<!--       /// HEADER              -->

<!--        BODY              -->
  <!--        FOTO DE PRODUCTO PRINCIPAL             -->
    <section>
      <div class="row" >
        <div style="background-color: black;">
          <center>
            <img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" alt="">
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
                  <li><a href="#netflix+amazon">Netflix + Amazon</a></li>
                  <li><a href="#netflix+hbo">Netflix + Hbo</a></li>
                  <li><a href="#netflix+star">Netflix + Star</a></li>
                  <li><a href="#netflix+paramount">Netflix + Paramount</a></li>
                  <li><a href="#netflix+youtube">Netflix + Youtube</a></li>
                </ul>
              </nav>
            <!--//// PLANES  -->
            <!-- PRODUCTO MAS VENDIDO  -->
              <div class="sdb_holder">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="color: red;">Producto mas vendido</h4>
                    <p class="card-subtitle "><h2>Netflix * 3 meses</h2></p>
                    <img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" class="card-img-top" alt="...">
                    <p class="card-text"><h4>Precio:36000</h4></p>
                    <p class="card-text"><h3>Ahorra:9000</h3></p>
                    <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
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
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/hbo.php">Hbo Max</a></li>
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/star.php">Star Plus</a></li>
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/paramount.php">Paramount</a></li>
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/youtube.php">Youtube</a></li>
                  <li><a href="<?php echo $URL;?>/paginas/streaming/paginas/combos.php">combos</a></li>
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
            
          <!-- PLANES -->
            <!-- PLANES NETFLIX*1-->  
              <!-- PLANES NETFLIX -->
                <div id="netflix1" style="border-style: solid ; border-color:red ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto1"></a>
                                <br>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:15000</h4></p>
                              <br>
                              <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto1"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:28000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto1"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:36000</h4></p>
                              <p class="card-text"><h3>Ahorra:9000</h3></p>
                              <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX-->
              <br>
              <!-- PLANES NETFLIX+DISNEY -->
                <div id="netflix+disney" style="border-style: solid ; border-color:blue ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix + disney plus</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" 
                                alt="fotodisney"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:21000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" 
                                alt="fotodisney"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:40000</h4></p>
                              <p class="card-text"><h3>Ahorra:6000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotodisney.jpg" 
                                alt="fotodisney"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:57000</h4></p>
                              <p class="card-text"><h3>Ahorra:12000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX+DISNEY-->
              <br>
              <!-- PLANES NETFLIX+AMAZON -->
                <div id="netflix+disney" style="border-style: solid ; border-color:red ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix + amazon prime</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoamazon.jpg" 
                                alt="fotodisney"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:21000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: red ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoamazon.jpg" 
                                alt="fotodisney"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:40000</h4></p>
                              <p class="card-text"><h3>Ahorra:6000</h3></p>
                              <a href="#" class="btn" style="background-color: red ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoamazon.jpg" 
                                alt="fotodisney"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:57000</h4></p>
                              <p class="card-text"><h3>Ahorra:12000</h3></p>
                              <a href="#" class="btn" style="background-color: red ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX+AMAZON-->
              <br>
              <!-- PLANES NETFLIX+HBO -->
                <div id="netflix+hbo" style="border-style: solid ; border-color:blue ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix + hbo max</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotohbo.jpg" 
                                alt="foto-hbo"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:21000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotohbo.jpg" 
                                alt="foto-hbo"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:40000</h4></p>
                              <p class="card-text"><h3>Ahorra:6000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotohbo.jpg" 
                                alt="foto-hbo"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:57000</h4></p>
                              <p class="card-text"><h3>Ahorra:12000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX+HBO-->
              <br>
              <!-- PLANES NETFLIX+STAR -->
                <div id="netflix+star" style="border-style: solid ; border-color:red ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix + star plus</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotostar.jpg" 
                                alt="foto-star"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:21000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: red ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotostar.jpg" 
                                alt="foto-star"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:40000</h4></p>
                              <p class="card-text"><h3>Ahorra:6000</h3></p>
                              <a href="#" class="btn" style="background-color: red ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotostar.jpg" 
                                alt="foto-star"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:57000</h4></p>
                              <p class="card-text"><h3>Ahorra:12000</h3></p>
                              <a href="#" class="btn" style="background-color: red ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX+STAR-->
              <br>
              <!-- PLANES NETFLIX+PARAMOUNT -->
                <div id="netflix+paramount" style="border-style: solid ; border-color:blue ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix + paramount</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="fotonetflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoparamount.png" 
                                alt="foto-hbo"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:21000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoparamount.png" 
                                alt="foto-paramount"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:40000</h4></p>
                              <p class="card-text"><h3>Ahorra:6000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoparamount.png" 
                                alt="foto-paramount"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:57000</h4></p>
                              <p class="card-text"><h3>Ahorra:12000</h3></p>
                              <a href="#" class="btn" style="background-color: blue ; border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX+PARAMOUNT-->
              <br>
              <!-- PLANES NETFLIX+YOUTUBE -->
                <div id="netflix+youtube" style="border-style: solid ; border-color:red ; padding:10px ; border-radius: 10px;">
                  <figure>
                    <header class="heading center">Netflix + youtube</header>
                    <div>
                      <ul  class="nospace clear" style="color: white;">
                        <!-- PLAN POR UN MES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 1 mes</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoyoutube.jpg" 
                                alt="foto-youtube"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:21000</h4></p>
                              <p class="card-text"><h3>Ahorra:2000</h3></p>
                              <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR UN MES -->
                        <!-- PLAN POR DOS MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 2 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoyoutube.jpg" 
                                alt="foto-youtube"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:40000</h4></p>
                              <p class="card-text"><h3>Ahorra:6000</h3></p>
                              <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR DOS MESES -->
                        <!-- PLAN POR TRES MESES -->
                          <li class="one_quarter" style="border-style: solid ; border-color:black ; border-radius: 10px ; background-color: darkgrey;">
                            <center>
                              <div class="card center" style="width: 10rem;">
                              <br>
                              <h2 class="card-title">1 Pantalla<br> 3 meses</h2>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotonetflix.jpg" 
                                alt="foto-netflix"></a>
                              <a href="#"><img src="<?php echo $URL;?>/public/images/streaming/fotoyoutube.jpg" 
                                alt="foto-youtube"></a>
                                <br>
                                <br>
                              <p class="card-text"><h4>Precio:57000</h4></p>
                              <p class="card-text"><h3>Ahorra:12000</h3></p>
                              <a href="#" class="btn" style="background-color: red;border-style: solid ; border-color:black ; border-radius: 10px ;" >Pide la tuya</a>
                            </center>
                            <br>
                          </li>
                        <!-- PLAN POR TRES MESES -->
                      </ul>
                    </div>
                  </figure>
                </div>
              <!-- PLANES NETFLIX+YOUTUBE-->
              <br>
            <!-- /////PLANES NETFLIX*1-->  
          <!-- ///PLANES -->
          </div>
        <!-- ////LADO DERECHO -->
        <div class="clear"></div>
      </main>
    </div>
  <!--        ///LADO IZQUIERDO Y DERECHO -->
<!--        BODY              -->

<!-- FOOTER  -->
  <div class="wrapper row4" >
    <footer id="footer" class="hoc clear">
      <!-- FOOTER COLUMNAS -->  
        <div class="group"> 
          <!-- FOOTER COLUMNA 1 - UBICACION -->
            <div class="one_quarter first">
              <h6 class="heading">Ubicacion</h6>
              <ul class="nospace btmspace-30 linklist contact">
                <li><i class="fas fa-map-marker-alt"></i>
                  <address>
                  Colombia
                  </address>
                </li>
                <li><i class="fas fa-phone"></i> +57 323 530 3818</li>
                <li><i class="far fa-envelope"></i>disponiblesservicios@gmail.com</li>
              </ul>
            </div>
          <!--// FOOTER COLUMNA 1 - UBICACION -->
          <!-- FOOTER COLUMNA 2 - NUESTRAS PAGINAS-->
            <div class="one_quarter">
              <h6 class="heading">Paginas</h6>
              <ul class="nospace linklist">
                <li><a href="<?php echo $URL;?>/index.php">Servicios Disponibles</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Servicio Streaming</a></li>
                <li><a href="<?php echo $URL;?>/paginas/web/index.php">Servicio Web</a></li>
              </ul>
            </div>
          <!-- ///FOOTER COLUMNA 2 - NUESTRAS PAGINAS -->
          <!-- ///FOOTER COLUMNA 3 - PROXIMAMENTE -->
            <div class="one_quarter">
              <h6 class="heading">Proximamente</h6>
              <ul class="nospace linklist">
                <li><a href="<?php echo $URL;?>/paginas/hogar/index.php">Servicio Hogar</a></li>
                <li><a href="<?php echo $URL;?>/paginas/tienda/index.php">Servicios Tienda</a></li>
                <li><a href="<?php echo $URL;?>/paginas/personal/index.php">Servicios Personal</a></li>
              </ul>
            </div>
          <!-- ///FOOTER COLUMNA 3 - PROXIMAMENTE -->
          <!-- ///FOOTER COLUMNA 4 - HORARIO DE ATENCION -->
            <div class="one_quarter">
              <h6 class="heading">Horario</h6>
              <ul class="nospace btmspace-30 linklist contact">
                <li><i class="fas fa-clock"></i> Lunes - Viernes<br>
                  06.00am - 10.00pm</li>
                <li><i class="fas fa-clock"></i> Sabados <br>
                  06.00am - 06.00pm</li>
                <li><i class="fas fa-clock"></i> Domingos y Festivos<br>
                  10.00am - 06.00pm</li>
              </ul>
            </div>
          <!-- ///FOOTER COLUMNA 4 - HORARIO DE ATENCION -->
        </div>
      <!--/// FOOTER COLUMNAS -->
      <hr class="btmspace-30">
      <!-- REDES -->
        <div class="center btmspace-10"> 
          <h6 class="heading">Nuestras Redes</h6>
          <ul class="faico clear">
            <li><a class="faicon-google-plus" href="#"><i class="fab fa-whatsapp"></i></a></li>
            <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="faicon-dribble" href="#"><i class="fab fa-instagram"></i></a></li>
          </ul> 
        </div>
      <!-- ///REDES  -->
    </footer>
  </div>
<!-- ///FOOTER  -->

<!-- COPYRIGHT Y DESPEDIDA  -->
    <div class="wrapper row5">
      <div id="copyright" class="hoc clear"> 
        <p class="fl_left">Copyright&copy;ServiciosDisponibles todos los derechos reservados</p>
        <p class="fl_right">Gracias <a target="_blank" href="" title="Free Website Templates">Por Tu Visita</a></p>
      </div>
    </div>
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- ///COPYRIGHT Y DESPEDIDA  -->

<!-- JAVASCRIPTS -->
  
  <script src="<?php echo $URL;?>/layout/streaming/scripts/jquery.min.js"></script>
  <script src="<?php echo $URL;?>/layout/streaming/scripts/jquery.backtotop.js"></script>
  <script src="<?php echo $URL;?>/layout/streaming/scripts/jquery.mobilemenu.js"></script>
  </body>
  </html>