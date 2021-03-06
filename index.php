<?php 
    session_start(); 

    if(isset($_SESSION['usuarioNome']) && isset($_SESSION['usuarioCidade'])){
        header('Location: /adv');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>:: NEWJUD ::</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#service">Serviços</a></li>
                            <li><a href="#clients">Clientes</a></li>
                            <li><a href="#price">PLANOS</a></li>
                            <li><a href="#contact">Contato</a></li>
                            <li><a href="/login/">Painel</a></li>
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
                        <h2 class="fittext2">NEWJUD</h2>
                        <h4>UM NOVO CONCEITO EM ADVOCACIA</h4>
                        <p>Todos as suas consultas na palma da mão. Agendamentos, listas e prazos. O seu negócio funcionando 24Hrs.</p>
                        <a href="#" class="da-link button" align="center">VEJA NOSSOS PLANOS</a>  
                        <div class="da-img">
                            <img src="images/Slider01.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
 
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
                <!-- Start title section -->
                <div class="title">
                    <h1>NOSSOS SERVIÇOS</h1>
                    <!-- Section's title goes here -->
                    <p>Veja algumas áreas na qual atuamos.</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service1.png" alt="service 1">
                            </div>
                            <h3>JURIDICA</h3>
                        <!--
                            <p>We Create Modern And Clean Theme For Your Business Company.</p>
                        -->
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service2.png" alt="service 2" />
                            </div>
                            <h3>CALL CENTER</h3>
                        <!--
                            <p>We Create Modern And Powerful Theme With Lots Animation And Features</p>
                        -->
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service3.png" alt="service 3">
                            </div>
                            <h3>IMOBILIÁRIA</h3>
                        <!--
                            <p>We Create Modern And Powerful Html5 And CSS3 Code Easy For Read And Customize.</p>
                        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">UM NOVO CONCEITO EM ADVOCACIA.</p>
                <a href="#" class="button">CONHEÇA UM POUCO MAIS</a>
            </div>
        </div>
        <!-- Client section start -->
        <!-- Client section start -->
        <div id="clients">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1>ALGUNS DEPOIMENTOS DE NOSSOS PARCEIROS</h1>
                        <p>Dê o seu depoimento.</p>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="testimonial">
                                <p>Newjud é o melhor lugar para fazer pesquisa de resultados. Toda equipe e administração estão de parabéns.</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/Client1.png" class="centered" alt="client 1">
                                    <strong>Nome Cliente
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>Newjud é o melhor lugar para fazer pesquisa de resultados. Toda equipe e administração estão de parabéns.</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/Client2.png" class="centered" alt="client 2">
                                    <strong>Nome Cliente
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>Newjud é o melhor lugar para fazer pesquisa de resultados. Toda equipe e administração estão de parabéns.</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/Client3.png" class="centered" alt="client 3">
                                    <strong>Nome Cliente
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--
                    <p class="testimonial-text">
                        "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
                    </p>
                -->
                </div>
            </div>
        </div>
        <div class="section third-section">
            <div class="container centered">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Clientes e Parceiros</h3>
                        </div>
                        <ul class="client-nav pull-right">
                            <li id="client-prev"></li>
                            <li id="client-next"></li>
                        </ul>
                    </div>
                    <ul class="row client-slider" id="clint-slider">
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo01.png" alt="client logo 1">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo02.png" alt="client logo 2">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo03.png" alt="client logo 3">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo04.png" alt="client logo 4">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo05.png" alt="client logo 5">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo02.png" alt="client logo 6">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo04.png" alt="client logo 7">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Price section start -->
        <div id="price" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Planos</h1>
                    <p>Conheça os planos e valores do nosso carro chefe.</p>
                </div>
                <div class="price-table row-fluid">
                    <div class="span4 price-column">
                        <h3>Basico</h3>
                        <ul class="list">
                            <li class="price">R$19,99</li>
                            <li><strong>Consulta</strong> Web</li>
                            <li><strong>24/7</strong> Suporte</li>
                            <li><strong>5 </strong> Consultas</li>
                        </ul>
                        <a href="#" class="button button-ps">COMPRAR</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Pro</h3>
                        <ul class="list">
                            <li class="price">R$39,99</li>
                            <li><strong>Consulta</strong> Web</li>
                            <li><strong>24/7</strong> Suporte</li>
                            <li><strong>25 </strong> Consultas</li>
                        </ul>
                        <a href="#" class="button button-ps">COMPRAR</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>GOLD</h3>
                        <ul class="list">
                            <li class="price">R$79,99</li>
                            <li><strong>Consulta</strong> Web</li>
                            <li><strong>24/7</strong> Suporte</li>
                            <li><strong>50 </strong> Consultas</li>
                        </ul>
                        <a href="#" class="button button-ps">COMPRAR</a>
                    </div>
                </div>
                <div class="centered">
                    <p class="price-text">ENTRE EM CONTATO AGORA MESMO.</p>
                    <a href="#contact" class="button">ENTRAR EM CONTATO</a>
                </div>
            </div>
        </div>
        <!-- Price section end -->
        <!-- Newsletter section start -->
        <div class="section third-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Newsletter</h3>
                        </div>
                    </div>
                </div>
                <div id="success-subscribe" class="alert alert-success invisible">
                    <strong>Well done!</strong>You successfully subscribet to our newsletter.</div>
                <div class="row-fluid">
                    <div class="span5">
                        <p>Fique por dentro das novidades sobre nossas ferramentas e solucoes para o seu escritorio.</p>
                    </div>
                    <div class="span7">
                        <form class="inline-form">
                            <input type="email" name="email" id="nlmail" class="span8" placeholder="Digite o seu email" required />
                            <button id="subscribe" class="button button-sp">ENVIAR</button>
                        </form>
                        <div id="err-subscribe" class="error centered">Please provide valid email address.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contato</h1>
                        <p>Conheca nossas formas de contato</p>
                    </div>
                </div>
                    <div class="container">
                            <div>
                                <div class="container" aligh="center">
                                    <div class="span9 center contact-form">
                                        <br />
                                        <br />
                                        <p class="info-mail">ENDEREÇO:</p>
                                        <p>Av. Sete de Setembro, Centro, Bauru.</p>
                                        <p class="info-mail">E-mail:</p>
                                        <p>contato@newjud.com</p>
                                        <p class="info-mail">Telefones:</p>
                                        <p>(14) 0000-0000</p>
                                        <p>(14) 0000-0000</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                        <div class="title">
                            <h3>Redes Sociais</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                            <!--
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; <a href="http://newjud.com">www.NEWJUD.com</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
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
