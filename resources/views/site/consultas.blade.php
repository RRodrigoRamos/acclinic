@extends('layout.template')
@section('title', 'SERVIÇOS:Consultas-Exames-Agendamentos')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  <span> <i class="fa fa-hospital-o fa-2x" aria-hidden="true"></i>  Funcionamos de </span> segunda à sexta: 7h às 18h e sábados de 7h às 12h.
						</div>
						<div class="col-sm-6 col-xs-12">
							<ul class="list-unstyled list-inline">
								<li><a href="mailto:sac@hemodiagnostico.com.br">
									<i class="fa fa-envelope-o"></i> sac@hemodiagnostico.com.br
								</a></li>
								<li><i class="fa fa-phone"></i> Fone: (96) 3217-0700 / 98801-3805</li>
							</ul>
						</div>
					</div>
				</div>
		<!-- Informações do Topo site Fim -->
@endsection
@section('Menu')
			<!-- Navbar Menu -Inicio -->
				<nav id="nav" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Navbar Header Starts -->
					<div class="navbar-header">
						<!-- Collapse Button Menu Mobile -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Navegação</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<!-- Collapse Button Menu Mobile Fim -->
							<!-- Logo  -->
							<a href="/inicio" class="navbar-brand">
								<img src="../images/fav/logo.png" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgLogo">
							</a>
						<!-- Logo Fim -->
					</div>
					<!-- Menu Infor Fim -->
						<!-- Navbar Header Ends -->
						<!-- Navbar Collapse Starts -->
							<div class="navbar-collapse collapse">					
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="/inicio"> <i class="fa fa-home" aria-hidden="true"></i> Início</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Institucional <i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="/pagina/institucional">Quem Somos</a>
											</li>
											<li>
												<a href="/pagina/equipe"> 
												Equipe</a>
											</li>
											<li>
												<a href="/pagina/medicos">
												Médicos</a>
											</li>
											<li>
												<a href="/pagina/unidades">Unidades</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/pagina/especialidades">Especialidades</a>
									</li>
									<li>
										<a href="/pagina/convenios">Convênios</a>
									</li>		
									<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Serviços 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li class="active">
												<a href="/servico/consultas">Consultas</a>
											</li>
											<li>
												<a href="/servico/exames">Exames</a>
											</li>
											<li>
												<a href="/servico/agendamentos">Agendamentos</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/pagina/contato"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li>
										<a href="/areaCliente" ><i class="fa fa-user"></i> Área do cliente</a>
									</li>
								</ul>
							</div>
						<!-- Navbar Collapse Ends -->
					</div>
		</nav>
			<!-- Navbar Menu Fim -->
			</div>
		<!-- Conteudo Inicial Fim -->
		</header>
	<!-- Topo Fim -->
	@endsection
@section('ConteudoPrincipal')
	<!-- Main Banner Starts -->
		<div class="main-banner servicoConsulta">
			<div class="container">
				<h2><span>Consultas Clínicas</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="/inicio">Início</a></li>
					<li>Serviço</li>
					<li class="active">Consultas</li>
				</ul>
			</div>
		</div>	
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
	<div class="container main-container">
			<h2 class="main-heading2 nomargin-top">Consultas</h2>
			<h3 class="main-heading3"> Mamografia </h3>
	</div>
<div class="container">
	<form name="form" id="form">
		Peso (em Kg)
		<br>
		<input type="Text" name="peso" size="15"> 
		<br>
		Altura (em Cm)
		<br>
		<input type="Text" name="alt" size="15"> 
		<br>
		<br>
		<input type="button" style="Padding: 9pt" value="Calcular IMC" onclick="calcularIMC()" name="button">
		<input type="reset" style="Padding:9pt" value="Limpar Valores">
		<br>
		<br>
		IMC
		<br>
		<input type="Text" name="massacor" id="massacor" size="18"> 
		<br>
		Avaliacao do IMC
		<br> 
		<input type="Text" name="comment" id="comment" size="18">
		<br>
		<br>
		<center>
		<span style="font-size: x-small;"><a href="http://www.emagrecerpravaler.com/dieta-dos-pontos-tabela-de-pontos/" target="”_blank”"></a></span></center>
		<center>
		<span style="font-size: x-small;"><a href="" target="?_blank?"></a></span></center>
	</form>
</div>
	@endsection