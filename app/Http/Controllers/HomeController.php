<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserContatos;
use \Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $contatos = UserContatos::where(['user_id' => $user->id])->paginate(5);
        return view('home')->with(['contatos' => $contatos]);
    }

    public function cadastro()
    {
        return view('contatos.cadastro');
    }

    public function store(Request $request)
    {

        $userId = $request->user()->id;
    
        $request = $request->all();
    
        $userContato = new UserContatos();
        $userContato->fill($request);
        $userContato->user_id = $userId;
        $userContato->save();

        return redirect('home')->withSuccess("Contato Cadastrado com sucesso!");
    }
}
