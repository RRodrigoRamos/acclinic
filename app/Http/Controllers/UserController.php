<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use acclinic\Agendamento;
use acclinic\Clinica;
use acclinic\User;
use acclinic\Medico;
use acclinic\ClinicaMedico;
use acclinic\Especialidade;
use acclinic\statusAgenda;
use acclinic\Triagen;
use acclinic\Convenio;
use acclinic\Endereco;
use acclinic\Bairro;
use acclinic\Cidade;
use acclinic\Estado;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Painel do Cliente
        return view('cliente.painel');
    }

    public function agendamentoForm()
    {
        $especialidades = Medico::select('*')
            ->join('especialidades','medicos.especialidade_id', '=', 'especialidades.id' )
            ->get();

        $clinica = Clinica::select('*')->get();
        
        return view('cliente.agendamentoForm',compact('especialidades','clinica'));
    }


    public function agendaSalva(Request $resquest)
    {


            // // dados do agendamento
            $dadosAgenda = $resquest->all();

            $clinicamedicos = new ClinicaMedico();
            $clinicamedicos->medicos_id = $dadosAgenda['medicos_id'];
            $clinicamedicos->clinica_id = $dadosAgenda['clinica_id'];
            $clinicamedicos->save();

            // dd($dadosAgenda);
            $agendamento = new Agendamento();
            $agendamento->clinica_medicos_id = $clinicamedicos['id'];
            $agendamento->data_agenda = $dadosAgenda['data_agenda'];
            $agendamento->hora_agenda = $dadosAgenda['hora_agenda'];
            $agendamento->tipo_agenda = $dadosAgenda['tipo_agenda'];
            $agendamento->agenda_de = $dadosAgenda['agenda_de'];
            $agendamento->users_id = $dadosAgenda['users_id'];
            $agendamento->status_id = $dadosAgenda['status_id'];
            $agendamento->save();          
           
            return redirect('/areaCliente/listaAgenda');
    }

    public function listaAgenda()
    {
            // recupera o usuario logado
            $usuario = auth()->user()->id; 

            // busca o registro
            // $medico = Medico::find(1);

            // lista os campos da minha lista Agenda
        $agendamentosP = Agendamento::select(['agendamentos.tipo_agenda','agendamentos.data_agenda','agendamentos.hora_agenda','medicos.name as nome_medico','especialidades.campo as especialidade','clinicas.nome as clinica_medica','users.name as nome_paciente','status_agendas.descricao as status_agenda'])
            ->join('users','agendamentos.users_id', '=', 'users.id')
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('users.id', '=', $usuario)
            ->orderBy('agendamentos.data_agenda', 'asc')
            ->get();

        $agendamentosR = Agendamento::select(['agendamentos.tipo_agenda','agendamentos.data_agenda','agendamentos.hora_agenda','medicos.name as nome_medico','especialidades.campo as especialidade','clinicas.nome as clinica_medica','users.name as nome_paciente','status_agendas.descricao as status_agenda'])
            ->join('users','agendamentos.users_id', '=', 'users.id')
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('users.id', '=', $usuario)
            ->where('status_agendas.id', '=','7' )
            ->orderBy('agendamentos.id', 'asc')
            ->get();

        return view('cliente.listaAgenda',compact('agendamentosP','agendamentosR'));
    }

    
    public function pacienteForm()
    {
        // recupera o usuario logado
        $usuario = auth()->user()->id; 

        $dados = User::select(['users.name','users.name_social','users.email'])
            ->join('users','agendamentos.users_id', '=', 'users.id')
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('users.id', '=', $usuario)
            ->get();

        $bairros = Bairro::select('*')->get();


        return view('cliente.pacienteForm',compact('bairros','dados'));
    }

    public function pacienteDados()
    {
    	$triagens = new Triagen();
            $triagens->altura = $request->get('altura');
            $triagens->peso = $request->get('peso');
            $triagens->obs = $request->get('obs');
            $triagens->save();
            $triagem_id= $triagens->id;

            $endereco = new Endereco();
            $endereco->cep = $request->get('cep');
            $endereco->tipo_local = $request->get('tipo_local');
            $endereco->endereco = $request->get('endereco');
            $endereco->numero = $request->get('numero');
            $endereco->complement = $request->get('complement');
            $endereco->bairro_id = $request->get('bairro_id');
            $endereco->id = $request->get('id');
            $endereco->save();

            $paciente = new User();
            $paciente->name = $request->get('name');
            $paciente->name_social = $request->get('name_social');
            $paciente->email = $request->get('email');
            $paciente->password = bcrypt($request->get('password'));
            $paciente->sexo = $request->get('sexo');
            $paciente->data_nasc = $request->get('data_nasc');
            $paciente->telefone = $request->get('telefone');
            $paciente->cpf = $request->get('cpf');
            $paciente->triagem_id = $triagem_id;
            $paciente->convenio_id = $request->get('convenio_id');
            $paciente->endereco_id = $endereco->id;
            $paciente->save();     

            \Auth::login($paciente);

            return redirect('/areaCliente');


        return view('cliente.pacienteForm');
    }

	

    public function pacienteConv()
    {
        
        return view('cliente.pacienteConv');
    }

    public function pacienteConvCad()
    {
        // Cadastro de Convenio
        return view('cliente.pacienteConvForm');
    }

     public function deleteConven($id)
    {
        User::destroy($id);

    return redirect('cliente.pacienteConvForm');
    }

    public function pacienteInfor()
    {
        // informações ao Usuario/Paciente
        return view('cliente.pacienteInfor');
    }
    
    public function pacienteContat()
    {
    	// informações contato com a Clinica.
        return view('cliente.pacienteContat');
    }
}
