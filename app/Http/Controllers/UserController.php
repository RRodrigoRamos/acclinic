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
