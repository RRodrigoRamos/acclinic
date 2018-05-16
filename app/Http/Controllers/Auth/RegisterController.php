<?php

namespace acclinic\Http\Controllers\Auth;

use acclinic\User;
use acclinic\Triagen;
use acclinic\Convenio;
use acclinic\Endereco;
use acclinic\Bairro;
use acclinic\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected function validator(Resquest $resquest)
    {
        return Validator::make($request, [
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
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'foto' => $data['foto'],
    //         'name' => $data['name'],
    //         'name_social' => $data['name_social'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'sexo' => $data['sexo'],
    //         'data_nasc' => $data['data_nasc'],
    //         // 'data_nasc' => $data['data_nasc'],
    //     ]);
    // }

    public function showRegistrationForm()
    {


    $bairros = Bairro::select('*')->get();
    $name_social = $request->input('name_social','$name');
        // Verifica se foi adicionado nome social caso não colocar valor padrão
        
        // , compact('name_social')

//         // Declara a data! :P
// $data = '29/08/2008';

// // Separa em dia, mês e ano
// list($dia, $mes, $ano) = explode('/', $data);

// // Descobre que dia é hoje e retorna a unix timestamp
// $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
// // Descobre a unix timestamp da data de nascimento do fulano
// $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

// // Depois apenas fazemos o cálculo já citado :)
// $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

// print $idade;

// Outro metodo para calcular idaded
//         $date = new DateTime( '1901-10-11' ); // data de nascimento
// $interval = $date->diff( new DateTime( '2011-12-14' ) ); // data definida

// echo $interval->format( '%Y Anos, %m Meses e %d Dias' ); // 110 Anos, 2 Meses e 2 Dias


        return view('auth.register',compact('bairros'));
    }


        // Funcionou com esse 
    protected function register(Request $request)
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
            $endereco->save();
            $endereco_id = $triagem_id;

            $paciente = new User();
            $paciente->name = $request->get('name');
            $paciente->name_social = $request->get('name_social');
            $paciente->email = $request->get('email');
            $paciente->password = $request->get('password');
            $paciente->sexo = $request->get('sexo');
            $paciente->data_nasc = $request->get('data_nasc');
            $paciente->telefone = $request->get('telefone');
            $paciente->cpf = $request->get('cpf');
            $paciente->convenio_id = $request->get('convenio_id');
            $paciente->endereco_id = $endereco_id;
            $paciente->save();
            
          

            return redirect('/areaCliente');
           
            
                // $a = new A() ;
                // $a->nome = 'Teste' ;
                // $a->save() ;

                // $b = new B() ;
                // $b->a_id = $a->id;
                // $b->teste = Request::get('teste');
                // $b->save() ;

        // return redirect('/areaCliente');
    }
        
}