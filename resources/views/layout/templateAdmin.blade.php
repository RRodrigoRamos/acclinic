<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ACClinic - Sistema de Monitoriramente de horários e atendimento de agendamento online de consultas clinicas, com o objetivo de aproximar o cliente a clinica">
        <meta name="keywords" content="Agendamento, Consulta, Agenda Consulta, consulta, Clínica Médica, especialidades, exames, procedimentos, laboratorios, lab, analise clinicas, consultas, analise e diagnostico, diagnosticos, dicas saúde, doutores, doutor, serviços lab, serviços exames.">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="author" content="Rodrigo Ramos, Leandro lima, Anderson Sanches">
        <title>::ACClinic:: @yield('title') </title>
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="../css/bootstrap-responsive.min" rel="stylesheet"> -->
        <!-- Template CSS Files  -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link href="../font-awesome/css/font-awesome.css" rel="stylesheet"> -->
        <link href="../js/plugins/camera/css/camera.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/fav/favIcon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/fav/favIcon.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/fav/favIcon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/fav/favIcon.png">
        <link rel="shortcut icon" href="../images/fav/favIcon.png">
    </head>
    <body>
    @section('principal')
    @show 
        <!-- Topo -->
        <header class="main-header">
        <!-- Conteudo inicial  -->
        <div class="container">
    @yield('topoInfor')
    @yield('localizacaoSite')
    @yield('Menu')
    @yield('ConteudoPrincipal')
    @yield('ConteudoSecundario')
        </div>
    <!-- Footer Starts -->
        <footer class="main-footer">
            <div class="footer-area">
            <!-- Area Footer Site -->
                <div class="container-fluid">
                    <div class="row">
                    <!-- Informações Clinica -->
                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <h4><img src="../images/fav/logo.png" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgRodape"> </h4>
                            <p>
                                Sistema de Agendamentos de Consultas Clinicas e Exames, para clientes conveniados e atendimento particular.
                            </p>
                            <ul class="list-unstyled address-list">
                                <li class="clearfix address">
                                    <i class="fa fa-hospital-o fa-2x" aria-hidden="true"></i>
                                    Av. Coaracy Nunes, 892 - Centro, Macapá - AP, 68900-010
                                </li>
                                <li class="clearfix">
                                    <i class="fa fa-phone-square fa-2x"></i>
                                    (96) 3217 - 0700
                                </li>
                                <li class="clearfix">
                                    <i class="fa fa-phone fa-2x"></i>
                                    (96) 98801 - 3805
                                </li>
                                <li class="clearfix">
                                    <i class="fa fa-envelope-o fa-2x"></i>
                                    <a href="mailto:sac@hemodiagnostico.com.br">sac@hemodiagnostico.com.br</a>
                                </li>
                                <li class="clearfix">
                                    <i class="fa fa-clock-o fa-2x"></i>
                                    Funcionamos de segunda à sexta: 7h às 18h e sábados de 7h às 12h.
                                </li>
                            </ul>
                        </div>
                    <!-- Informações Clinica Fim -->
                    <!-- Informações Services -->
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                            <h4><i class="fa fa-map-o" aria-hidden="true"></i>  &nbsp;  Mapa do Site  </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/inicio">
                                        <i class="fa fa-angle-right"></i> 
                                        Início
                                    </a> 
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-angle-right"></i> 
                                        Institucional
                                    </a>
                                    <ul>
                                        <li>
                                        <a href="/pagina/institucional">
                                            <i class="fa fa-angle-right"></i> 
                                        Quem Somos
                                        </a>
                                        </li>
                                        <li>
                                        <a href="/pagina/equipe">
                                            <i class="fa fa-angle-right"></i> 
                                        Equipe
                                        </a>
                                        </li>                                       
                                        <li>
                                        <a href="/pagina/medicos">
                                            <i class="fa fa-angle-right"></i> 
                                        Médicos
                                        </a>
                                        </li>
                                        <li>
                                        <a href="/pagina/unidades">
                                            <i class="fa fa-angle-right"></i> 
                                        Unidades
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <!-- Informações Services-->
            <!-- Area Footer Site Fim -->
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                            <h4><i class="fa fa-info" aria-hidden="true"></i>  &nbsp;  Ajuda <i class="fa fa-question-circle" aria-hidden="true"></i>  </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/inicio">
                                        <i class="fa fa-angle-right"></i> 
                                        Início
                                    </a> 
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-angle-right"></i> 
                                        Institucional
                                    </a>
                                    <ul>
                                        <li>
                                        <a href="/pagina/institucional">
                                            <i class="fa fa-angle-right"></i> 
                                        Quem Somos
                                        </a>
                                        </li>
                                        <li>
                                        <a href="/pagina/equipe">
                                            <i class="fa fa-angle-right"></i> 
                                        Equipe
                                        </a>
                                        </li>                                       
                                        <li>
                                        <a href="/pagina/medicos">
                                            <i class="fa fa-angle-right"></i> 
                                        Médicos
                                        </a>
                                        </li>
                                        <li>
                                        <a href="/pagina/unidades">
                                            <i class="fa fa-angle-right"></i> 
                                        Unidades
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <!-- Informações Services-->
                    </div>
                </div>
            <!-- Area Footer Site Fim -->
            </div>
        </footer>

        <!-- Copyright Starts -->
            <div class="copyright">
                <div class="container clearfix">
                    <p class="pull-left">
                        <i class="fa fa-copyright fa-2x" aria-hidden="true"></i> equipe de Desenvolvimento - <a href="http://www.meta.edu.br/faculdade/"> Faculdade Meta </a></span>
                    </p>
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="https://github.com/RRodrigoRamos/acclinic"> <i class="fa fa-github fa-2x" aria-hidden="true"></i> Repositório Github.com</a></li>
                    </ul>
                </div>
            </div>
        <!-- Copyright Ends -->
        <!-- link ancora suba -->
        <a href="#topo" class="to-top">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
        </a>
    </footer>
    <!-- Footer Ends -->
    <!-- Template JS Files -->
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/jquery-migrate-1.2.1.min.js"></script>   
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/camera/js/jquery.mobile.customized.min.js"></script>
    <script src="../js/plugins/camera/js/jquery.easing.1.3.js"></script>
    <script src="../js/plugins/camera/js/camera.min.js"></script>   
    <script src="../js/plugins/camera/js/shuffle/jquery.shuffle.modernizr.min.js"></script>
    <script src="../js/custom.js"></script>
    </body>
</html>