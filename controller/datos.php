<?php
	
        require "CnsDB.php";
        $Conexion = new CnsDB();
        $msg=$Conexion->ConectaDB();
        echo $msg;
        $rsC=$Conexion->insert();
        //$rsc=$Conexion->CnsSubs();
        //echo "<table><tr><td>DNI</td><td>Nombre</td><td>Apellido</td></tr><br>'.$rsc.'</table>";
        echo "<!DOCTYPE html>
        <html lang='en'>
        
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='description' content=''>
            <meta name='author' content=''>
            <script type='text/javascript' src='../events/jquery.min.js'></script>
            <script type='text/javascript' src='../events/evento.js'></script>
        
            <title>Policlínico San Sebastián</title>
            
            <!-- css -->
            <link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css'>
            <link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
            <link rel='stylesheet' type='text/css' href='plugins/cubeportfolio/css/cubeportfolio.min.css'>
            <link href='../css/nivo-lightbox.css' rel='stylesheet' />
            <link href='../css/nivo-lightbox-theme/default/default.css' rel='stylesheet' type='text/css' />
            <link href='../css/owl.carousel.css' rel='stylesheet' media='screen' />
            <link href='../css/owl.theme.css' rel='stylesheet' media='screen' />
            <link href='../css/animate.css' rel='stylesheet' />
            <link href='../css/style.css' rel='stylesheet'>
        
            <!-- boxed bg -->
            <link id='bodybg' href='../bodybg/bg1.css' rel='stylesheet' type='text/css' />
            <!-- template skin -->
            <link id='t-colors' href='../color/default.css' rel='stylesheet'>
        
        
        </head>
        
        <body id='page-top' data-spy='scroll' data-target='.navbar-custom'>
        
        <div id='wrapper'>
            
            <nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>
                <div class='top-area'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-sm-6 col-md-6'>
                            <p class='bold text-left'>Lunes - Sábado, 8am a 10pm </p>
                            </div>
                            <div class='col-sm-6 col-md-6'>
                            <p class='bold text-right'>Contáctenos ahora +51 548 65 001</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='container navigation'>
                
                    <div class='navbar-header page-scroll'>
                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'>
                            <i class='fa fa-bars'></i>
                        </button>
                        <a class='navbar-brand' href='../index.html'>
                            <img src='../img/logo.png' alt='' width='150' height='40' />
                        </a>
                    </div>
        
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>
                      <ul class='nav navbar-nav'>
                        <li class='active'><a href='../index.html'>Inicio</a></li>
                      </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
            
        
            <!-- Section: intro -->
            <section id='intro' class='intro'>
                <div class='intro-content'>
                    <div class='container'>
                        <div class='row'>
                            
                            <div class='col-lg-12'>
                                <div class='form-wrapper'>
                                <div class='wow fadeInRight' data-wow-duration='2s' data-wow-delay='0.2s'>
                                
                                    <div class='panel panel-skin'>
                                    <div class='panel-heading'>
                                            <h3 class='panel-title'><span class='fa fa-pencil-square-o'></span>".$msg.$rsC. "</h3>
                                            </div>
                                            <div class='panel-body'>
                                        </div>
                                    </div>				
                                
                                </div>
                                </div>
                            </div>					
                        </div>		
                    </div>
                </div>		
            </section>
            
            <!-- /Section: intro -->
        
        
                
        
        
            <footer>
            
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-6 col-md-4'>
                            <div class='wow fadeInDown' data-wow-delay='0.1s'>
                            <div class='widget'>
                                <h5>Sobre nosotros</h5>
                                <p>
                                por completar
                                </p>
                            </div>
                            </div>
                            
                        </div>
                        <div class='col-sm-6 col-md-4'>
                            <div class='wow fadeInDown' data-wow-delay='0.1s'>
                            <div class='widget'>
                                <h5>Centro Médico</h5>
                                <p>
                                por completar
                                </p>
                                <ul>
                                    <li>
                                        <span class='fa-stack fa-lg'>
                                            <i class='fa fa-circle fa-stack-2x'></i>
                                            <i class='fa fa-calendar-o fa-stack-1x fa-inverse'></i>
                                        </span> Lunes - Sábado, 8am to 10pm
                                    </li>
                                    <li>
                                        <span class='fa-stack fa-lg'>
                                            <i class='fa fa-circle fa-stack-2x'></i>
                                            <i class='fa fa-phone fa-stack-1x fa-inverse'></i>
                                        </span> +51 5408 904 711
                                    </li>
                                    <li>
                                        <span class='fa-stack fa-lg'>
                                            <i class='fa fa-circle fa-stack-2x'></i>
                                            <i class='fa fa-envelope-o fa-stack-1x fa-inverse'></i>
                                        </span> hola@sansebastian.com
                                    </li>
        
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class='col-sm-6 col-md-4'>
                            <div class='wow fadeInDown' data-wow-delay='0.1s'>
                            <div class='widget'>
                                <h5>Nos encontramos en</h5>
                                <p>Jirón Juan Crespo Y Castillo 2095, Comas</p>		
                                
                            </div>
                            </div>
                            <div class='wow fadeInDown' data-wow-delay='0.1s'>
                            <div class='widget'>
                                <h5>Síguenos en</h5>
                                <ul class='company-social'>
                                        <li class='social-facebook'><a href='#'><i class='fa fa-facebook'></i></a></li>
                                        <li class='social-twitter'><a href='#'><i class='fa fa-twitter'></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>	
                </div>
                <div class='sub-footer'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-6 col-md-6 col-lg-6'>
                            <div class='wow fadeInLeft' data-wow-delay='0.1s'>
                            <div class='text-left'>
                            <p>&copy;Copyright 2015 - SanSebastián. derechos reservados.</p>
                            </div>
                            </div>
                        </div>
                        <div class='col-sm-6 col-md-6 col-lg-6'>
                            <div class='wow fadeInRight' data-wow-delay='0.1s'>
                            <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                            -->
                            </div>
                        </div>
                    </div>	
                </div>
                </div>
            </footer>
        
        </div>
        <a href='../#' class='scrollup'><i class='fa fa-angle-up active'></i></a>
        
            <!-- Core JavaScript Files -->
            <script src='../js/jquery.min.js'></script>	 
            <script src='../js/bootstrap.min.js'></script>
            <script src='../js/jquery.easing.min.js'></script>
            <script src='../js/wow.min.js'></script>
            <script src='../js/jquery.scrollTo.js'></script>
            <script src='../js/jquery.appear.js'></script>
            <script src='../js/stellar.js'></script>
            <script src='../plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'></script>
            <script src='../js/owl.carousel.min.js'></script>
            <script src='../js/nivo-lightbox.min.js'></script>
            <script src='../js/custom.js'></script>
        
        
        </body>
        
        </html>"
           
?>