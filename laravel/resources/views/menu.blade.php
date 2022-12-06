@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div class="btn-group col-12" role="group" aria-label="Basic example">
    <a href="/cadastropet"><button type="button" class="btn btn-primary">Cadastro Pet/Tutor</button></a>
    <a href="/cadastroprofissional"><button type="button" class="btn btn-primary">Cadastro Profissional</button></a>
    <a href="#"><button type="button" class="btn btn-primary">Agenda</button></a>
    <a href="#"><button type="button" class="btn btn-primary">Página Pet</button></a>
    <a href="#"><button type="button" class="btn btn-primary">Página Profissional</button></a>

</div>

@endsection