<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

    public function agendamento()
    {
    	// Painel do Cliente
        return view('cliente.agendamento');
    }


    public function listaPaciente()
    {
        // Painel do Cliente
        return view('cliente.listaPaciente');
    }
    public function dadosCliente()
    {
    	// Painel do Cliente
        return view('cliente.listaPaciente');
    }

    public function listaMedicos()
    {
    	// Painel do Cliente
        return view('cliente.listaPaciente');
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
