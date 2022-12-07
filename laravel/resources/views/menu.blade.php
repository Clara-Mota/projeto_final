@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div class="btn-group col-12" role="group">
    <a href="/cadastros/cadastropet"><button type="button" class="btn btn-primary" id="btn_menu1">Cadastro Pet/Tutor</button></a>
    <a href="/cadastros/cadastroprofissional"><button type="button" class="btn btn-primary" id="btn_menu2">Cadastro Profissional</button></a>
    <a href="/agenda"><button type="button" class="btn btn-primary" id="btn_menu1">Agenda</button></a>
    <a href="#"><button type="button" class="btn btn-primary" id="btn_menu2">Página Pet</button></a>
    <a href="#"><button type="button" class="btn btn-primary" id="btn_menu1">Página Profissional</button></a>

</div>

@endsection