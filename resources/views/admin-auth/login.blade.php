@extends('layout.template')
@section('title', 'LOGIN - USUÁRIO')

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
        <div class="main-banner paginaLogin">
            <div class="container">
                <h2><span>Login / Entrar </span></h2>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a href="/inicio">Inicio</a>
                    </li>
                    <li class="active">Area do Cliente</li>
                </ul>
            </div>
        </div>
<!-- Banner Cliente Fim-->
<!-- <div class="container form_user">
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-8 col-xs-12">
            <br>
                <fieldset>
                        <legend>Login</legend>
                    <form id="formLoginUser" method="POST" action="{{ route('admin.login') }}">
                        @csrf
                    
                        <div class="form-group row">
                        <label for="email" class="col-sm-12 col-form-label text-md-right">
                            {{ __('E-Mail @') }}
                        </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-sm-12 col-xs-12 col-form-label text-md-right" placehold="teste">{{ __('Senha') }}</label>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar minha senha!') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENTRAR') }}
                                </button>
                                <a class="btn btn-success" href="{{ route('admin.register') }}">
                                    CADASTRA-SE
                                </a>
                                <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                    {{ __('Esqueceu sua Senha?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <a href="/admin/login"> Area Administrativa. </a>
        </div>
    </div>
</div> -->
<br>
 <div class="container form_user">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form id="formLoginUser" method="POST" action="{{ route('admin.login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">
                            {{ __('E-Mail @') }}
                        </label>
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Digite Seu Email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-sm-6 col-xs-12 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Digite Senha" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar minha senha!') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENTRAR') }}
                                </button>
                                <a class="btn btn-success" href="{{ route('admin.register') }}">
                                    CADASTRA-SE
                                </a>
                                <a class="btn btn-link" href="{{ route('admin.password.reset') }}">
                                    {{ __('Esqueceu sua Senha?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection