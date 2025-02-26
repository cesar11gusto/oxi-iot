<!DOCTYPE html>


<html lang="port">
    
	<head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="codigocss/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="codigocss/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="codigocss/style.css" />
        <link rel="stylesheet" type="text/css" href="codigocss/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="codigocss/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="codigocss/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="codigocss/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images\Logotipo_IFET.svg.png"><!--icone dabarra de pesquisa-->
    </head>
    
    <body id="index">
        <div class="navbar">
            <div class="navbar-inner"> 
                <div class="container">
                    <a href="#" >
                        <img src="images\1.png" width="180" height="60" alt="Logo" /><!--LOGO-->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                   
         
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li><a href="index.php">Página Inicial</a></li>
                            <li><a href="Quemsomos.php">Quem somos</a></li>
                            <li><a href="Contatos.php">Contatos</a></li>
                            <a href="index.php"> <img src="images\LOGO.png" width="120" height="15" ></a>

                       </ul>

                    </div>
                


                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">

                     <!-- Start first slide -->
                	<div class="da-slide">
                        <h2>QUEM SOMOS</h2>
                       
                        <p>O OX-IOT É UM PROJETO CRIADO POR ESTUDANTES E DOCENTES DO IFSP - CAMPUS BIRIGUI, COM O INTUITO DE SE DESENVOLVER  OXÍMETRO BASEADO EM IOT FOCADO NO CUIDADO À SAÚDE PARA AUXÍLIO AO ENFRENTAMENTO NO COMBATE AO COVID-19
                        </p>
                    </n>
                    </n>
                        <a href="quemsomos.PHP" class="da-link button">Ler mais</a>
                        <div class="da-img">
                            <img src="images/LOGO.png" alt="image01" width="420">
                        </div>
                    </div>
                   
                    <!-- End first slide -->
                    <!-- Start second slide -->
                     <div class="da-slide">
                        <h2 class="fittext2">CONTATOS</h2>
                        
                        <p>O PROJETO OX-IOT TAMBÉM ESTÁ NAS REDES SOCIAIS, CLIQUE NO BOTÃO VER CONTATOS PARA SSABER MAIS 
                        </p>
                        <a href="Contatos.php" class="da-link button">Ver contatos</a>
                        <div class="da-img">
                            <img src="images/contatos.png" alt="image01" width="500">
                        </div>
                    </div>
                    <!-- End second slide -->

                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <br>
                <br>
            </div>
        </div>

                

    
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>