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
	
	public function cadastroPaciente()
    {
    	// Cadastro de Paciente
        return view('cliente.pacienteForm');
    }

    public function deletePaciente($id)
  	{
    	User::destroy($id);

    return redirect('lista-usuarios');
  	}

    public function cadastroConvenio()
    {
        // Cadastro de Convenio
        return view('cliente.pacienteConv');
    }

    public function pacienteInfor()
    {
    	// informações ao Usuario/Paciente
        return view('cliente.pacienteInfor');
    }
	
	

    
}
