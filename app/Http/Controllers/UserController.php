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

            // dados do agendamento
            $clinicaMedicos = $resquest->all();

            // dd($clinica_medicos);

            $insert = $this->ClinicaMedico->create($clinicaMedicos);

            if($insert)
                return 'sucesso';
            else
                return 'Erro! ';


            // $clinica_medicos = new ClinicaMedico();
            // $clinica_medicos->medicos_id = $request->get('medicos_id');
            // $clinica_medicos->clinica_id = $request->get('clinica_id');
            // $clinica_medicos->save();



            // $agendamento = new Agendamento();
            // $agendamentos->data_agenda = $request->get('data_agenda');
            // $agendamentos->hora_agenda = $request->get('hora_agenda');
            // $agendamentos->tipo_agenda = $request->get('tipo_agenda');
            // $agendamentos->agenda_de = $request->get('agenda_de');
            // $agendamentos->obs = $request->get('obs');
            // $agendamentos->users_id = $request->get('users_id');
            // $agendamentos->clinica_medicos_id = $clinica_medicos->id;
            // $agendamentos->status_id = $request->get('status_id');
            // $agendamentos->save();   
           
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
