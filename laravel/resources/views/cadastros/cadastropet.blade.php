@extends('layouts.main')

@section('title', 'Cadastro Pet')

@section('content')
<header id=hd-cadastropet><h1>Cadastro Pet</h1></header>
<form class="row g-6" action="" id="form_cadastropet">
    <div class="col-md-6">
        <h2>Tutor</h2>
    </div>
    <div class="col-md-6">
        <h2>Pet</h2>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" id="nome_tutor" placeholder="Nome" required>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" id="nome_pet" placeholder="Nome" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="numero" placeholder="Número" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="raca" placeholder="Raça" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="cpf" placeholder="CPF" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="pet_data" placeholder="Data de Nascimento" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="cartao" placeholder="Número cartão" required>
    </div>
    <div class="col-12" id="btn1">
        <br/>
        <button type="submit" class="btn btn-primary" id="btn_cadastropet">Cadastrar</button>
    </div>
</form>


@endsection

