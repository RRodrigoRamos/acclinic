<?php

namespace acclinic\Http\Controllers\Auth;

use acclinic\User;
use acclinic\Triagen;
use acclinic\Convenio;
use acclinic\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/areaCliente';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'rg' => 'required|string|max:9|unique:users',
            'cpf' => 'required|string|max:15|unique:users',
        ]);
    }

    // ;
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \acclinic\User
     */
    protected function create(array $data)
    {
        return User::create([
            'foto' => $data['foto'],
            'name' => $data['name'],
            'name_social' => $data['name_social'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sexo' => $data['sexo'],
            'data_nasc' => $data['data_nasc'],
            // 'data_nasc' => $data['data_nasc'],
        ]);
    }


    

        
    
}
