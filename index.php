<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DevFolio Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="img/logo-website.png" width="250" alt=""></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">PORTAFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <?php 
      include('backend/scripts/cone.php');
      $foto_db = $conexion->query("SELECT nombre_foto, attr_active FROM foto_portada order by id_foto desc limit 3 ");
      $texto_db = $conexion->query("SELECT texto FROM texto_arriba order by id_texto desc  limit 1 ");
      $texto = $texto_db->fetch_assoc();
      $frases_db = $conexion->query("SELECT texto FROM textos_abajo order by id_texto desc ");
      $img_db = $conexion->query("SELECT * FROM acerca_img order by id_acerca desc ");
      $img= $img_db->fetch_assoc();
      $acerca_db = $conexion->query("SELECT * FROM acerca order by id_acerca desc ");
      $acerca= $acerca_db->fetch_assoc();
      $servicios_db = $conexion->query("SELECT * FROM servicios order by id_servicios desc ");
      $record_db = $conexion->query("SELECT * FROM record where id_record = 1 ");
      $record= $record_db->fetch_assoc();
      $trabajos_db = $conexion->query("SELECT * FROM trabajos order by id_trabajo desc ");
      $testimonios_db = $conexion->query("SELECT * FROM testimonios order by id_testimonio desc ");
      $contactos_db = $conexion->query("SELECT * FROM contacto order by id_contacto desc limit 1 ");
      $contacto= $contactos_db->fetch_assoc();
      
     
  ?>
<div class="intro route bg-image">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   
    <div class="carousel-inner" style="max-height: 650px;">
    <div style="width: 100%; height:650px; background-color: black; opacity:0.8; position:absolute; z-index:100;">.
        </div>
    <?php while($foto = $foto_db->fetch_assoc()){
      ?>
        <div class="carousel-item <?php if($foto['attr_active']!= '0'){ ?> active <?php }?> ">
          <img src="backend/img/<?php echo $foto["nombre_foto"]; ?>" class="d-block w-100" alt="...">
        </div>
      <?php
    } ?>
    
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <img src="backend/img/<?php echo $img['nombre']; ?>" width="450" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Nosotros
                    </h5>
                  </div>
                  <p>
                       <?php echo $acerca['texto_acerca']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Servicios
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
       <?php while($servicios= $servicios_db->fetch_assoc()){
          ?> 
            <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><img src="backend/img/<?php echo $servicios["imagen"]?>" style="margin-top:-20px;"  alt=""></span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $servicios["titulo"]?></h2>
              <p class="s-description text-center">
              <?php echo $servicios["descripcion"]?>
              </p>
            </div>
          </div>
        </div>
          <?php
       }  ?> 
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->
 
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-lg-4">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"><?php echo $record["completados"]?></p>
              <span class="counter-text">Trabajos completos</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"><?php echo $record["anos"]?></p>
              <span class="counter-text">Años de experiencia</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"><?php echo $record["clientes"];?></p>
              <span class="counter-text">Clientes</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">Portfolio</h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php  
          while($trabajos = $trabajos_db->fetch_assoc()){
            ?>  
                  <div class="col-md-4">
          <div class="work-box">
            <a href="backend/img/<?php echo $trabajos["imagen"];?>" data-lightbox="gallery-mf">
              <div class="work-img" style="max-height:300px;">
                <img src="backend/img/<?php echo $trabajos["imagen"];?>" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"> <?php echo $trabajos["empresa"];?></h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?php echo $trabajos["servicio"];?></span> 
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
              
            <?php  
          }
      ?>
        </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
      <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
      <?php  
         while($testimonios = $testimonios_db->fetch_assoc()){
          ?>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="backend/img/<?php echo $testimonios["imagen"];?>" width="150" height="150" alt="" class="rounded-circle b-shadow-a">
                <span class="author"><?php echo $testimonios["cliente"];?></span>
              </div>
              <div class="content-test">
                <p class="description lead">
                <?php echo $testimonios["testimonio"];?>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          <?php
         }
      ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Blog Star /-->

  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Comunícate con nosotros
                    </h5>
                  </div>
                  <div>
                      <form action="backend/scripts/correo.php" method="post" role="form" class="">
                      <div id="sendmessage">Tu mensaje ha sido enviado. Gracias                 !</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Enviar mensaje</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Contacto
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                    <?php echo $contacto["texto"]; ?>
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>  <?php echo $contacto["direccion"]; ?></li>
                      <li><span class="ion-ios-telephone"></span> <?php echo $contacto["telefono"]; ?></li>
                      <li><span class="ion-email"></span>  <?php echo $contacto["correo"]; ?></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/MateoSan%C3%B3-117474159657257"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/mateoysano/?hl=es-la"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>GARP</strong>. All Rights Reserved</p>
              
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
