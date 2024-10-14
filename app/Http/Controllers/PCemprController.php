<?php

namespace App\Http\Controllers;

use App\Models\PCempr;
use Illuminate\Http\Request;

class PCemprController extends Controller
{
    public function index(){

        return view('index');

    }

    public function ValidarLogin(Request $request)
    {

        $username = strtoupper($request->input('nome'));
        $password = strtoupper($request->input('password'));

        $user = PCempr::where('usuariobd', $username)
        ->whereRaw("DECRYPT(senhabd, usuariobd) = ?", [$password])
        ->whereRaw("situacao = ?",['A'])
        ->first();


        if (!empty($user)) {
            // Login bem-sucedido,
            return redirect()->route('dashboard')->with('nome',$user->nome);

        } else {
            // Login falhou
            return redirect()->back()->with('error', 'Usuário ou senha incorretos.');
        }
    }
}
