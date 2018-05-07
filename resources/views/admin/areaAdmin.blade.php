@extends('layout.template')
@section('title', 'ADMINNISTRAÇÃO')
@section('topoInfor')
	<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  <span> <i class="fa fa-hospital-o fa-2x" aria-hidden="true"></i>  Seja Bem vindo </span> Area de Administração do Site ACCLINIC - Sistema de Agendamentos de Consultas Online.
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
							<a href="/home" class="navbar-brand">
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
										<a href="/admin/agendamentos">Lista de Agendamentos</a>
									</li>
									<li>
										<a href="/admin/cadatro"> Médicos Cadastrado </a>
									</li>		
									<li>
										<a href="/admin/cadastro"> Pacientes Cadastrados </a>
									</li>
								</ul>
								<ul>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user() }} 
												
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                		</li>
										</ul>
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

	<br>
	<br><br>
	 Conteudo da Pagina PAGINA ADMINISTRAÇÃO - UserAdmin
 	<br><br>
@endsection
@section('ConteudoSecundario')
	Conteudo Secundario PAGINA ADMINISTRAÇÃO - UserAdmin
@endsection