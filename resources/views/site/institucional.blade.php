@extends('layout.template')
@section('title', 'INSTITUCIONAL')

@section('Menu')
 <!-- Navbar Menu -Inicio -->
				<nav id="nav" class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
					<!-- Menu Infor  -->
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
							<a href="/home" class="navbar-brand">
								<img src="../images/fav/logo.png" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgLogo">
							</a>
						<!-- Logo Fim -->
						</div>
					<!-- Menu Infor Fim -->
					<!-- Menu Collapse -->
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html"> 
								Inicial</a></li>
								<li class="active"><a href="about.html">Institucional</a></li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Médicos
									</a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="doctors.html">Médicos</a></li>
										<li><a href="doctor-profile.html">Perfis</a></li>
									</ul>
								</li>								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Serviços
									</a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="services.html">Todos os Serviços</a></li>
										<li><a href="#">a</a></li>
										<li><a href="#">b</a></li>
										<li><a href="#">c</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Unidades
									</a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="news.html">Macapá</a></li>
										<li><a href="news-single.html">Santana</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contato</a></li>
								<li class="btn btn-md"><a href="login.html">Entrar </a></li>
							</ul>
						</div>
					<!-- Menu Collapse Fim -->
					</div>
				</nav>
			<!-- Navbar Menu Fim -->
			</div>
		<!-- Conteudo Inicial Fim -->
		</header>
	<!-- Topo Fim -->
@endsection
@section('ConteudoPrincipal')
 Conteudo da Pagina Institucional
@endsection
@section('ConteudoSecundario')
Conteudo Secundario Pagina Institucional
@endsection