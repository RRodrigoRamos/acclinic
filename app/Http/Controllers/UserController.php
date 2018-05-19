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
            $clinicamedicos->medicos_id = $dadosAgenda->get('medicos_id');
            $clinicamedicos->clinica_id = $dadosAgenda->get('clinica_id');
            $clinicamedicos_id = $dadosAgenda->id;
            $clinicamedicos->save();

            $agendamento = new Agendamento($clinicamedicos);
            $agendamentos->data_agenda = $dadosAgenda->get('data_agenda');
            $agendamentos->hora_agenda = $dadosAgenda->get('hora_agenda');
            $agendamentos->tipo_agenda = $dadosAgenda->get('tipo_agenda');
            $agendamentos->agenda_de = $dadosAgenda->get('agenda_de');
            $agendamentos->obs = $dadosAgenda->get('obs');
            $agendamentos->clinica_medicos_id = $clinicamedicos_id;
            $agendamentos->users_id = $dadosAgenda->get('users_id');
            $agendamentos->status_id = $dadosAgenda->get('status_id');
            $agendamentos->save();   
           
            return redirect('cliente.listaAgenda');
    }

    public function listaAgenda()
    {

        $clinica = Clinica::select('*')->get();


        // ,compact('clinica')
        return view('cliente.listaAgenda');
    }

    
    public function pacienteDados()
    {
    	// Painel do Cliente
        return view('cliente.pacienteDados');
    }

	

    public function pacienteConv()
    {
        // lista Convênio de Paciênte
        return view('cliente.pacienteConv');
    }

    public function pacienteConvCad()
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
