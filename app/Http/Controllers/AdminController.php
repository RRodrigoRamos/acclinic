<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    	//$this->middleware('auth');
    }

    public function index()
   	{
   		return view('admin.index');
   	}

   	public function login()
   	{
   		return view('auth.login-admin');
   	}

   	public function postLogin(Request $resquest)
   	{
      $validator = validator($resquest->all(),[
        'email' => 'required|min:10|max:100',
        'password' => 'required|min:3|max:50',
      ]);

      if($validator->fails()) {
        return redirect('/areaAdmin/login')
            ->withErros($validator)
            ->withInput();
      }

      return view('admin.index');
   	}
}
