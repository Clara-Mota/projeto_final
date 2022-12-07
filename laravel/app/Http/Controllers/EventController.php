<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profissional;

class EventController extends Controller
{
    public function index(){

        $profissional = Profissional::all();

        return view('menu',['profissional'=> $profissional]);

    }

    public function cadastroprofissional() {
        return view('cadastros.cadastroprofissional');

    }

    public function cadastropet() {
        return view('cadastros.cadastropet');

    }

    public function agendamento() {
        return view('cadastros.agendamento');

    }

    public function store(Request $request){

        $profissional = new Profissional;

        $profissional->idprof = $request->idprof;
        $profissional->nome_profissional = $request->nome_profissional;
        $profissional->especializacao = $request->especializacao;
        $profissional->tipo = $request->tipo;

        $profissional->save();

        return redirect('/menu');
    }

}
