@extends('layout.template')
@section('title', 'CONVÊNIOS')
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
									<li class="active">
										<a href="/pagina/convenios">Convênios</a>
									</li>		
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Serviços 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li>
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
<!-- Banner Cliente -->
		<div class="main-banner paginaConvenio">
			<div class="container">
				<h2><span>Convênios</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/inicio">Inicio</a>
					</li>
					<li class="active">Convênios</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Main Container Starts -->
	<div class="container main">
		<br>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/aspeb.jpg" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<div class="caption">
  						<p>texto opcional ahsh kuhsk ahskj has</p>
 					</div>
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/amil.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<div class="caption">
  						<p>texto opcional ojhkajhskj kasjh kasjh kasjh </p>
 					</div>
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/assefaz.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<div class="caption">
  						<p>texto opcional ajkshk jhksaj hkasjh s</p>
 					</div>
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/bradesco.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<div class="caption">
  						<p>texto opcionaksjh kjhsak jhask jahs al</p>
 					</div>
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/capesesp.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<div class="caption">
  						<p>texto opcionasopi apo psoi apsoi aal</p>
 					</div>
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/teste.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<div class="caption">
  						<p>texto opcional kajsn kjaskj sak </p>
 					</div>
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/casaembrapa.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/caixa.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/cassi.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/correios.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/evida.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/gama.jpg" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/geap.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sao-camilo.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sulamerica.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/unimed-seguro.png" alt="Imagem Convênio ACCLINIC" title="Mensagem aqui! Ao passar o mouse"/>
 					<!-- <div class="caption">
  						<p>texto opcional</p>
 					</div> -->
 				</div>
			</div>
		</div>
	
	</div>
	<!-- Main Container Ends -->

@endsection