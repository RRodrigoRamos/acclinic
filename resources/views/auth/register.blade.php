@extends('layout.template')
@section('title', 'LOGIN - REGISTRO')
@section('topoInfor')
            <!-- Informações do Topo site -->
                <div class="top-bar hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                              Bem vindo area de CADASTRO DE USUARIO.
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
                                    <li class="active">
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
        <div class="main-banner paginaRegistro">
            <div class="container">
                <h2><span>Cadastro </span></h2>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a href="/inicio">Inicio</a>
                    </li>
                    <li class="active">Cadastro</li>
                </ul>
            </div>
        </div>
<!-- Banner Cliente Fim-->
<div class="container main">
    <br>
<div class="col-md-6 col-sm-6 col-xs-6">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x "></i> &nbsp; Preencha os campos necessário para o CADASTRO</div>
        </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <form class="form"  method="post" action="{{ route('register') }}">
        @csrf
    <fieldset>
          <legend>Dados de Paciente</legend>
          <div class="row">
            <div class="form-group col-sm-12 col-md-12 col-lg-2">
                <label for="foto" class="control-label">Foto</label>
                    <input type="file" class="form-group">
            </div>
            </div>
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="name" class="control-label">Nome <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="name" id="name" required autofocus>
              </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="name_social" class="control-label">Nome Social</label>
                <input type="txt" class="form-control" name="name_social" id="name_social">
                <span class="verd">* Como deseja ser chamado</span>
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="email" class="control-label">Email <span class="obr">*</span></label>
                <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="password" class="control-label">Senha <span class="obr">*</span></label><input type="password" class="form-control" id="password" name="password" required> <span class="verd">* Minino 6 digitos</span>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="password_confirmation" class="control-label">Confirme Senha <span class="obr">*</span></label><input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required> <span class="verd">* Confirme Senha </span>
          </div>
          <div class="row">
          <div class="form-group col-sm-3 col-md-3 col-lg-4">
                <label for="email" class="control-labe">Sexo <span class="obr">*</span></label>
            <div class="row inline">    
            <input class="radio-inline" type="radio" name="genero" value="Masc" checked> Masculino<br>
                <input class="radio-inline" type="radio" name="gendero" value="Fem"> Feminino<br>
            </div>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-4">
                <label for="data_nasc" class="control-label">Data Nascimento: </label><input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-4">
                <label for="telefone" class="control-label">Telefone: <span class="obr">*</span></label><input type="text" class="form-control" id="telefone" name="telefone" required>
          </div>
      </div>
      <div class="row">
          <div class="form-group col-sm-12 col-md-12 col-lg-4"">
                    <label for="rg" class="control-label">RG:<span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="rg" id="rg" required >
              </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-4"">
                <label for="cpf" class="control-label">CPF: <span class="obr">*</span> </label>
                <input type="txt" class="form-control" name="cpf" id="cpf" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-4"">
                <label for="profissao" class="control-label">Profissão:</label>
                <input type="txt" class="form-control" name="profissao" id="profissao">
          </div>
        </div>
    </fieldset>
    <br>
    <fieldset>
          <legend>Dados de Convênio</legend>
          <div class="row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="nome_convenio" class="control-label">Nome do Convênio</label>
                    <input type="text" class="form-control" name="nome_convenio" id="nome_convenio">
            </div>
        </div>
        <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-4">
                    <label for="tipo_plano" class="control-label">Tipo de Convênio </label>
                    <input type="txt" class="form-control" name="tipo_plano" id="tipo_plano">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-4">
                    <label for="n_registro" class="control-label">Nº de Registro </label>
                    <input type="txt" class="form-control" name="n_registro" id="n_registro">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-4">
                    <label for="validade" class="control-label">Validade</label>
                    <input type="txt" class="form-control" name="validade" id="validade">
              </div>
            </div>
    </fieldset>
    <br>
     <fieldset>
          <legend> Dados de Triagem </legend>
        <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-4">
                    <label for="altura" class="control-label"> Altura Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="altura" id="altura" required autofocus>
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-4">
                    <label for="n_registro" class="control-label"> Peso Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="n_registro" id="n_registro" required autofocus>
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-4">
                    <label for="obs" class="control-label">Observação <span class="obr">*</span></label>
                    <input type="txtarea" class="form-control" name="obs" id="obs" required autofocus>
              </div>
            </div>
    </fieldset>
    <br>
    <fieldset>
          <legend>Dados de Endereço</legend>
          <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-6">
                    <label for="endereco" class="control-label">Endereço: </label>
                    <input type="txt" class="form-control" name="endereco" id="endereco">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">Número: </label>
                    <input type="txt" class="form-control" name="numero" id="numero">
              </div>            
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="tipo_local" class="control-label">Tipo Local: </label>
                    <input type="txt" class="form-control" name="tipo_local" id="tipo_local">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="cep" class="control-label">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep">
            </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="bairro" class="control-label">Bairro: </label>
                    <input type="txt" class="form-control" name="bairro" id="bairro">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="cidade" class="control-label">Cidade: </label>
                    <input type="txt" class="form-control" name="cidade" id="cidade">
              </div>
                <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="estado" class="control-label">Estado: </label>
                    <input type="txt" class="form-control" name="estado" id="estado">
              </div>
          </div>
          <div class="row">
              
              <div class="form-group col-sm-12 col-md-12 col-lg-8">
                    <label for="complement" class="control-label">Complemento: </label>
                    <input type="txt" class="form-control" name="complement" id="complement">
              </div>
          </div>
    </fieldset>
    <br>
  <div class="form-group col-sm-6 col-md-6 col-lg-6 col-lg-6">
            <button type="submit" class="btn btn-primary form-control agendar"> 
            Cadastrar Usúario </button>
        
      </div>
  <br>
  </form>
</div>
</div>
@endsection
