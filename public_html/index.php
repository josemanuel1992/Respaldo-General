<?php
    require_once("lib/connection.php");
    require_once("lib/functions.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SoftCaribe</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logos/SoftCaribe.png" class="navbar-Logo" alt="SoftCaribe"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Experiencia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Conócenos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contácto</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://tienda.softcaribe.com.mx">Tienda</a>
                    </li>
                    <li style="padding-left:15px;">
                      <a class="nav-lang selected" href="#">ES</a><span class="nav-lang">&nbsp/&nbsp</span><a class="nav-lang" href="en-US/index.php">EN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido A Nuestro Estudio!</div>
                <div class="intro-heading">Encantado De Conocerte</div>
                <a href="#services" class="page-scroll btn btn-xl">Dime Más</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted">¡Ofrecemos todo para satisfacer las necesidades más exigentes!</h3>
                </div>
            </div>
            <?php
                $c = 0;
                $width = 4;
                $Services = getServices(1);
                $numRows = mysql_num_rows($Services);
                $magicNum = ($numRows - ($numRows % 3));
                while($Row = mysql_fetch_array($Services)){
                  if($c == $magicNum){
                    $width = 12 / ($numRows % 3);
                  }
            ?>
            <?php if($c % 3 == 0){ ?>
            <div class="row text-center">
            <?php } ?>
                <div class="col-md-<?php echo $width; ?>">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa <?php echo $Row['Icon']; ?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $Row['Title']; ?></h4>
                    <p class="text-muted service-text-size"><?php echo $Row['Description']; ?></p>
                </div>
            <?php
              $c++;
              if($c%3 == 0 || $c == $numRows){
            ?>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Experiencia</h2>
                    <h3 class="section-subheading text-muted">¡Parece que alguien ha hecho un buen trabajo!</h3>
                </div>
            </div>
            <?php
                $c = 0;
                $Portfolio = getPortfolio(1);
                while($Row = mysql_fetch_array($Portfolio)){
            ?>
            <?php if(c%3 == 0){ ?>
            <div class="row">
            <?php } ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?php echo $c + 1; ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/<?php echo $Row['Portfolio_Image']; ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $Row['Company']; ?></h4>
                        <p class="text-muted"><?php echo $Row['Category']; ?></p>
                    </div>
                </div>
            <?php
              $c++;
              if($c%3 == 0 || $c == $numRows){
            ?>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Conócenos</h2>
                    <h3 class="section-subheading text-muted">Somos profesionales y ¡Te lo podemos demostrar!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Abril 2017</h4>
                                    <h4 class="subheading">Nuestros Humildes Comienzos</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Todo comenzó como un proyecto universitario, pero mientras se desarrollaba recibimos mensajes, por lo que decidimos hacerlo realidad!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mayo 2017</h4>
                                    <h4 class="subheading">Nacio Una Agencia</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Nuestra misión es proporcionar nuevas y mejores tecnologías de calidad a medida de las necesidades de nuestros clientes, con el objetivo primordial de incrementar la rentabilidad, competitividad y productividad de la empresa.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Se Parte
                                    <br>De Nuestra
                                    <br>Historia!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestro Increible Equipo</h2>
                    <h3 class="section-subheading text-muted">¿Que hariamos sin ellos?</h3>
                </div>
            </div>
            <?php
                $c = 0;
                $width = 4;
                $Team = getTeam();
                $numRows = mysql_num_rows($Team);
                $magicNum = ($numRows - ($numRows % 3));
                while($Row = mysql_fetch_array($Team)){
                  if($c == $magicNum){
                    $width = 12 / ($numRows % 3);
                  }
            ?>
            <?php if($c % 3 == 0){ ?>
            <div class="row">
            <?php } ?>
                <div class="col-sm-<?php echo $width; ?>">
                    <div class="team-member">
                        <img src="img/team/<?php echo $Row['Foto']; ?>" class="img-responsive img-circle img-team" alt="">
                        <h4><?php echo $Row['Name'] ?></h4>
                        <p class="text-muted"><?php echo $Row['Area']; ?></p>
                    </div>
                </div>
            <?php
              $c++;
              if($c%3 == 0 || $c == $numRows){
            ?>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <h3 class="section-subheading text-muted">¡Le contestaremos lo antes posible!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electronico *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefono *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SoftCaribe 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a target="_blank" href="https://twitter.com/Softcaribe07"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.facebook.com/softcaribe/"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a target="_blank" href="pdf/Aviso_de_Privacidad.pdf">Politicas de Privacidad</a>
                        </li>
                        <li><a target="_blank" href="pdf/Terminos_y_Condiciones_de_Uso.pdf">Terminos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <?php
        $c = 0;
        while($Row = mysql_fetch_array($Portfolio)){
    ?>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $Row['Project']; ?></h2>
                                <img class="img-responsive img-centered" src="img/portfolio/<?php echo $Row['Description_Image']; ?>" alt="">
                                <p><?php echo $Row['Description']; ?></p>
                                <p><a href="<?php echo $Row['URL']; ?>">Ver Proyecto</a></p>
                                <ul class="list-inline">
                                    <li>Fecha: <?php echo $Row['Project_Date']; ?></li>
                                    <li>Cliente: <?php echo $Row['Company']; ?></li>
                                    <li>Categoria: <?php echo $Row['Category']; ?>/li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
