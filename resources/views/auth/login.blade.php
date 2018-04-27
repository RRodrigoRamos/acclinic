@extends('layout.template')
@section('title', 'LOGIN - USUÁRIO')

@section('Menu')
 <!-- Navbar Menu -Inicio -->
                <nav id="nav" class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                    <!-- Menu Infor  -->
                        <div class="navbar-header">
                        <!-- Collapse Button Menu Mobile -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <!-- <span class="sr-only">Toggle navigation</span> -->
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">
                            {{ __('E-Mail Address') }}
                        </label>
                            <div class="col-md-6">
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
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