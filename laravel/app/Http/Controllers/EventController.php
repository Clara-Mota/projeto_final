<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profissional;

class EventController extends Controller
{
    public function index(){

        $profissionais = Profissional::all();

        return view('agenda',['profissionais' => $profissionais]);

    }

    public function create(){
            return view('profissionais.create');

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

}
