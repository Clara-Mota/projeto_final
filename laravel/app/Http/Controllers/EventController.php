<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profissional;

class EventController extends Controller
{
    public function index() {

        $professionals = Profissional::all();

        return view('agenda',['professionals' => $professionals]);

    }

    public function cadastroprofissional(){
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

        $profissional->nome = $request->nome;
        $profissional->especializacao = $request->especializacao;
        $profissional->cpf = $request->cpf;

        $profissional->save();

        return redirect('/menu');

    }

}
