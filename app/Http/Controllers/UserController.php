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


    public function agendaSalva(request $resquest)
    {
        // $agendaform = $request->all();
        // $dadosagenda = Agendamento::create($agendaform);
        // $agendaform['users_id'] = $dadosagenda->id;
        // statusAgenda::create($agendaform);
        // $agendaform['users_id'] = $dadosagenda->id;
        // Clinica_Medico::create($agendaform);

// public function enviar(QuestionarioRequest $request){
//     $filler = $request->all();
//     $questionario = Questionario::create($filler);   
//     $filler['questionario_id'] = $questionario->id;
//     Enunciado::create($filler);
// return redirect()->action('ControllerPrincipal@index');
        return view('cliente.listaAgenda');
    }

    
    public function pacienteDados()
    {
    	// Painel do Cliente
        return view('cliente.pacienteDados');
    }

	
	public function pacienteForm()
    {
    	// Cadastro de Paciente
        return view('cliente.pacienteForm');
    }

    public function cadastroConvenio()
    {
        // Cadastro de Convenio
        return view('cliente.pacienteConv');
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
