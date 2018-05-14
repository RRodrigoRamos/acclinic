@extends('layout.templateAdmin')
@section('title', 'Area Cliente')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo {{ Auth::user()->name }} a sua pagina de Area do Cliente.
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
							<a href="/areaCliente" class="navbar-brand">
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
										<a href="/areaCliente">Início</a>
									</li>
									<li>
										<a href="/areaCliente/pacienteContat"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaCliente/agendamento">
												<i class="fa fa-plus-square" aria-hidden="true"></i> Agendamento
											</a>
										</li>
										<li class="active">
											<a href="/areaCliente/listaAgenda">
												Minha Agenda
											</a>
										</li>
										<li>
											<a href="/areaCliente/pacienteConv">
												Meus Convenios
											</a>
										</li>
										<li>
											<a href="/areaCliente/meus_dados">
												 Meus Dados <i class="fa fa-user" aria-hidden="true"></i>	
											</a>
										</li>
										<li>
											<a href="/areaCliente/altera_senha">
												 Alterar Senha <i class="fa fa-cogs" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/areaCliente/infor">
												 Informativo <i class="fa fa-info-circle" aria-hidden="true"></i>
											</a>
										</li>
										<li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} <i class="fa fa-sign-out" aria-hidden="true"></i>
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
<!-- Banner Cliente -->
		<div class="main-banner clienteAgenda">
			<div class="container">
				<h2><span>Lista Agenda</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Área Cliente</a>
					</li>
					<li>Meus Agendamentos</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Agenda -->
<div class="container main">
<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Dados de Agendamentos Realizados </div>
        </div>
	</div>



    <fieldset>
          <legend>Meus Agendamentos </legend>
          <div class="form-group col-sm-12 col-md-12 col-lg-6">
            <label for="name" class="control-label">Paciente<span class="obr">*</span></label>
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" id="name" placeholder="Digite seu nome">
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3"">
            <label for="data_nasc" class="control-label">Data Nascimento</label>
            <input type="date" class="form-control" id="data_nasc" placeholder="dd/mm/yyyy">
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3"">
            <label for="data_nasc" class="control-label">Idade</label>
            <input type="date" class="form-control" id="data_nasc" placeholder="dd/mm/yyyy">
          </div>
          <div class="form-group">
            <label for="input-money" class="control-label">Money input (€)</label>
            <input type="text" class="form-control mask-money" id="input-money" placeholder="0,00">
          </div>
          <div class="form-group">
            <label for="address" class="control-label">Label for address input</label>
            <input type="text" class="form-control" id="address" placeholder="Address street">
          </div>
</fieldset>
<br>
        </fieldset>


      </form>
    </div>
  </div>
	<!-- Conteudo Agenda Fim -->
@endsection