@extends('layout.templateAdmin')
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
<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x "></i> &nbsp; Preencha os campos necessário para o CADASTRO <span class="obr">( * ) Campos obrigatórios<span></div>
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
            <div class="row">
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="name" class="control-label">Nome <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="name" id="name" placeholder="Nome Completo" required autofocus>
              </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="name_social" class="control-label">Nome Social</label>
                <input type="txt" class="form-control" name="name_social" id="name_social" placeholder="Fulano(a) de Tal">
                <span class="verd">* Como deseja ser chamado</span>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="email" class="control-label">Email <span class="obr">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="exemplo_email@gmail.com" required>
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3">
                <label for="password" class="control-label">Senha <span class="obr">*</span></label><input type="password" class="form-control" id="password" name="password" placeholder="***Senha***" required> <span class="verd">* Minino 6 digitos</span>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="password_confirmation" class="control-label">Confirme Senha <span class="obr">*</span></label><input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="***Senha***"required> <span class="verd">* Confirme Senha </span>
          </div>
      </div>
      <div class="row">
          <div class="form-group col-sm-6 col-md-6 col-lg-3">
                <label class="control-label">Sexo</label> <span class="obr">*</span>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="Masc" value="Masc"> 
                <label class="form-check-label" for="Masc">
                    Masculino
                </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="Fem" value="Fem">
                <label class="form-check-label" for="Fem">
                    Feminino
                <br>
            </label>
            </div>
        </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-4">
                <label for="data_nasc" class="control-label">Data Nascimento: </label><input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-4">
                <label for="telefone" class="control-label">Telefone: <span class="obr">*</span></label><input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15" placeholder="(96) 00000 - 0000">
          </div>
      </div>
      <div class="row">
          <div class="form-group col-sm-12 col-md-12 col-lg-4"">
                    <label for="rg" class="control-label">RG:<span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="rg" id="rg" maxlength="9" OnKeyPress="formatar('######-##', this)" placeholder="000000-AP"required >
              </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-4"">
                <label for="cpf" class="control-label">CPF: <span class="obr">*</span> </label>
                <input type="txt" class="form-control" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="000.000.000-00" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-4"">
                <label for="profissao" class="control-label">Profissão:</label>
                <input type="txt" class="form-control" name="profissao" id="profissao" placeholder="Ex.: Autonomo">
          </div>
        </div>
    </fieldset>
    <br>
    <fieldset>
          <legend>Dados de Convênio</legend>
          <div class="row">
           <div class="form-group col-sm-12 col-md-6 col-lg-3">
            <label for="nome_convenio" class="control-label">Nome do Convênio</label>
                <div class="form-group">
              <select id="nome_convenio" name="nome_convenio" class="form-control" data-live-search="true">
                  <option value="" disabled="disabled">Selecione</option>
                  <option value="Convênio">Sulmericano</option>
                  <option value="Particular" selected="selected">SUS</option>
                  <option value="Retorno">Amprev</option>
              </select>
            </div>
          </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="tipo_plano" class="control-label">Tipo de Convênio </label>
                    <input type="txt" class="form-control" name="tipo_plano" id="tipo_plano" placeholder="Ex.: Básico, Empresarial, Especial II.">
              </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="n_registro" class="control-label">Nº de Registro </label>
                    <input type="txt" class="form-control" name="n_registro" id="n_registro" placeholder="0x0x0x0x0x0x0x0x0x0x0">
              </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="validade" class="control-label">Validade</label>
                    <input type="txt" class="form-control" name="validade" id="validade" maxlength="10" OnKeyPress="formatar('##/##/####', this)" placeholder="dd/mm/aaaa">
              </div>
            </div>
    </fieldset>
    <br>
     <fieldset>
          <legend> Dados de Triagem </legend>
        <div class="row">
              <div class="form-group col-sm-12 col-md-4 col-lg-3">
                    <label for="altura" class="control-label"> Altura Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="altura" id="altura" maxlength="4" OnKeyPress="formatar('#.##', this)" placeholder="Ex.: 1.70" required>
              </div>
              <div class="form-group col-sm-12 col-md-4 col-lg-3">
                    <label for="n_registro" class="control-label"> Peso Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="n_registro" id="n_registro" maxlength="4" OnKeyPress="formatar('##.#', this)" placeholder="Ex.: 80.0" required>
              </div>
              <div class="form-group col-sm-12 col-md-4 col-lg-6">
                    <label for="obs" class="control-label">Observação</label>
                    <input type="txtarea" class="form-control" name="obs" id="obs" placeholder="Ex.: Pressão Alta, Alergias, etc..." >
              </div>
            </div>
    </fieldset>
    <br>
    <fieldset>
          <legend>Dados de Endereço</legend>
          <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-6">
                    <label for="endereco" class="control-label">Endereço: </label>
                    <input type="txt" class="form-control" name="endereco" id="endereco" placeholder="Ex.: Rua.: Av.: Travessa, Etc...">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">Número: </label>
                    <input type="txt" class="form-control" name="numero" id="numero"  placeholder="Ex.: 1313A, Apt14... " maxlength="10">
              </div>            
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="tipo_local" class="control-label">Tipo Local: </label>
                    <input type="txt" class="form-control" name="tipo_local" id="tipo_local" placeholder="Prédio, Casa Própria, KitNet...">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="cep" class="control-label">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" OnKeyPress="formatar('##.###-###', this)" maxlength="10" placeholder="68.900-00">
            </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="bairro" class="control-label">Bairro: </label>
                    <input type="txt" class="form-control" name="bairro" id="bairro" placeholder="Novo Horizonte, Alvorada...">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="cidade" class="control-label">Cidade: </label>
                    <input type="txt" class="form-control" name="cidade" id="cidade" placeholder="Macapá, Mazagão, Santana">
              </div>
                <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="estado" class="control-label">Estado: </label>
                    <input type="txt" class="form-control" name="estado" id="estado" placeholder="Amapá-AP, Pará-PA...">
              </div>
          </div>
          <div class="row">
              
              <div class="form-group col-sm-12 col-md-12 col-lg-8">
                    <label for="complement" class="control-label">Complemento: </label>
                    <input type="txt" class="form-control" name="complement" id="complement" placeholder="Proximo de, Esquina com, Ponto Comercial...">
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
