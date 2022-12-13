@extends('layouts.main')

@section('title', 'Cadastro Profissional')

@section('content')

<header id=hd-cadastroprofissional><h1>Cadastro Profissional</h1></header>
<div id="profissional-creat-container" class="col-md-6 offset-md-3">
    <form action="/cadastros" method="POST">
        @csrf
        <div class="form-group">
            <br/>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="especializacao" id="especializacao" placeholder="Especialização" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>
@endsection


