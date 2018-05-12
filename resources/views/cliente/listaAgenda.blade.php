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
										<li class="active">
											<a href="/areaCliente/agendamento">
												<i class="fa fa-plus-square" aria-hidden="true"></i> Agendamento
											</a>
										</li>
										<li>
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
				<h2><span>Agendamentos</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Área Cliente</a>
					</li>
					<li>Agendamentos</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Agenda -->
<div class="container main">
<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Preencha os campos necessário para o AGENDAMENTO!</div>
        </div>
	</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <form class="form"  method="post" action="/areaCliente/listaAgenda">


    <fieldset>
          <legend>Dados do Paciente </legend>
          <div class="form-group col-sm-12 col-md-12 col-lg-6">
            <label for="name" class="control-label">Nome Completo<span class="obr">*</span></label>
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
<fieldset>
<legend>Fieldgroup example2</legend>

          <div class="form-group">
            <label for="address-number" class="control-label">Label for address number</label>
            <input type="text" class="form-control" id="address-number" placeholder="Street N.">
          </div>
          <div class="form-group">
            <label for="input-select" class="control-label">Bootstrap select</label>
            <select class="form-control" id="input-select">
              <option value="">-</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>

          <div class="form-group">
            <label for="job" class="control-label">Custom radio buttons</label>
            <div class="radio">
              <label>
                <input type="radio" name="job" value="designer" checked="checked" />
                <span>Designer</span>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="job" value="frontend" />
                <span>Front-end Developer</span>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="job" value="backend" />
                <span>Back-end Developer</span>
              </label>
            </div>
          </div>
</fieldset>
<br>
<fieldset>
	<legend>title or explanatory caption</legend>
          <div class="form-group">
            <label for="option" class="control-label">Radio buttons group</label>
            <div>
              <div class="btn-group radio-group" data-toggle="buttons">

                <label class="btn btn-default">
              <input type="radio" name="options" id="option1" checked> <span>Option 1</span>
            </label>
                <label class="btn btn-default">
              <input type="radio" name="options" id="option2"> <span>Option 2</span>
            </label>
                <label class="btn btn-default">
              <input type="radio" name="options" id="option3"> <span>Option 3</span>
            </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="countries" class="control-label">Select with search</label>
            <select id="countries" name="countries" class="form-control" data-live-search="true">
              <option value="" disabled="disabled">-</option>
              <option value="1">Afghanistan</option>
              <option value="2">Aland</option>
              <option value="3">Albania</option>
              <option value="4">Algeria</option>
              <option value="5">American Samoa</option>
              <option value="6">Andorra</option>
              <option value="7">Angola</option>
              <option value="8">Anguilla</option>
              <option value="9">Antarctic Territory</option>
              <option value="10">Antigua and Barbuda</option>
              <option value="11">Argentina</option>
              <option value="12">Armenia</option>
              <option value="13">Aruba</option>
              <option value="14">Ascension</option>
              <option value="15">Australia</option>
              <option value="16">Austria</option>
              <option value="17">Azerbaijan</option>
              <option value="18">Bahamas</option>
              <option value="19">Bahrain</option>
              <option value="20">Baker Island</option>
              <option value="21">Bangladesh</option>
              <option value="22">Barbados</option>
              <option value="23">Belarus</option>
              <option value="24">Belgium</option>
              <option value="25">Belize</option>
              <option value="26">Benin</option>
              <option value="27">Bermuda</option>
              <option value="28">Bhutan</option>
              <option value="29">Bolivia</option>
              <option value="30">Bosnia</option>
              <option value="31">Botswana</option>
              <option value="32">Bouvet Island</option>
              <option value="33">Brazil</option>
              <option value="34">British Indian Ocean Territory</option>
              <option value="35">British Sovereign Base Areas</option>
              <option value="36">British Virgin Islands</option>
              <option value="37">Brunel</option>
              <option value="38">Bulgaria</option>
              <option value="39">Burkina Faso</option>
              <option value="40">Burundi</option>
              <option value="41">Cambodia</option>
              <option value="42">Cameroon</option>
              <option value="43">Canada</option>
              <option value="44">Cape Verde</option>
              <option value="45">Cayman Islands</option>
              <option value="46">Central African Republic</option>
              <option value="47">Chad</option>
              <option value="48">Chile</option>
              <option value="49">China</option>
              <option value="50">China, Republic of (Taiwan)</option>
              <option value="51">Christmas Island</option>
              <option value="52">Cocos (Keeling) Islands</option>
              <option value="53">Colombia</option>
              <option value="54">Comoros</option>
              <option value="55">Cook Islands</option>
              <option value="56">Costa Rica</option>
              <option value="57">Cote d'Ivoire</option>
              <option value="58">Croatia</option>
              <option value="59">Cuba</option>
              <option value="60">Cyprus</option>
              <option value="61">Czech Republic</option>
              <option value="62">Democratic Republic of the Congo</option>
              <option value="63">Denmark</option>
              <option value="64">Djibouti</option>
              <option value="65">Dominica</option>
              <option value="66">Dominican Republic</option>
              <option value="67">Ecuador</option>
              <option value="68">Egypt</option>
              <option value="69">El Salvador</option>
              <option value="70">Equatorial Guinea</option>
              <option value="71">Eritrea</option>
              <option value="72">Estonia</option>
              <option value="73">Ethiopia</option>
              <option value="74">Falkland Islands (Islas Malvinas)</option>
              <option value="75">Faroe Islands</option>
              <option value="76">Fiji</option>
              <option value="77">Finland</option>
              <option value="78">France</option>
              <option value="79">French Guiana</option>
              <option value="80">French Polynesia</option>
              <option value="81">French Southern and Antarctic Lands</option>
              <option value="82">Gabon</option>
              <option value="83">Gambia</option>
              <option value="84">Georgia</option>
              <option value="85">Germany</option>
              <option value="86">Ghana</option>
              <option value="87">Gibraltar</option>
              <option value="88">Greece</option>
              <option value="89">Greenland</option>
              <option value="90">Grenada</option>
              <option value="91">Guadeloupe</option>
              <option value="92">Guam</option>
              <option value="93">Guatemala</option>
              <option value="94">Guernsey</option>
              <option value="95">Guinea</option>
              <option value="96">Guinea-Bissau</option>
              <option value="97">Guyana</option>
              <option value="98">Haiti</option>
              <option value="99">Heard Island and McDonald Islands</option>
              <option value="100">Honduras</option>
              <option value="101">Hong Kong</option>
              <option value="102">Hungary</option>
              <option value="103">Iceland</option>
              <option value="104">India</option>
              <option value="105">Indonesia</option>
              <option value="106">Iran</option>
              <option value="107">Iraq</option>
              <option value="108">Ireland</option>
              <option value="109">Isle of Man</option>
              <option value="110">Israel</option>
              <option value="111" selected="selected">Italia</option>
              <option value="112">Jamaica</option>
              <option value="113">Japan</option>
              <option value="114">Jersey</option>
              <option value="115">Jordan</option>
              <option value="116">Kazakhstan</option>
              <option value="117">Kenya</option>
              <option value="118">Kiribati</option>
              <option value="119">Korea, North</option>
              <option value="120">Korea, South</option>
              <option value="121">Kuwait</option>
              <option value="122">Kyrgyzstan</option>
              <option value="123">Laos</option>
              <option value="124">Latvia</option>
              <option value="125">Lebanon</option>
              <option value="126">Lesotho</option>
              <option value="127">Liberia</option>
            </select>
          </div>

          <div class="form-group">
            <label for="lorem" class="control-label">Checkboxes</label>
            <label for="signin" class="checkbox">
              <input type="checkbox" name="signin">
              <span>Lorem ipsum dolor sit amet, consectetur</span>
            </label>
            <label for="signin" class="checkbox">
              <input type="checkbox" name="signin">
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </label>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit data</button>
          </div>
        </fieldset>


      </form>
    </div>
  </div>
	<!-- Conteudo Agenda Fim -->
@endsection