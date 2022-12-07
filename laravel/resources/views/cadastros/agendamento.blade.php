@extends('layouts.main')

@section('title', 'Agendar')

@section('content')
<header id=hd-agendamento><h1>Agendamento</h1></header>
<form class="row g-6" action="" id="form_agendamento">
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="dia" placeholder="Dia" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="pet_agenda" placeholder="Pet" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="horario" placeholder="Horário" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="tutor" placeholder="Tutor" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="servico" placeholder="Serviço" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="status" placeholder="Status" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="preco" placeholder="Preço" required>
    </div>
    
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="profissional" placeholder="Profissional" required>
    </div>
    <div class="col-12">
        <br/>
        <button type="submit" class="btn btn-primary" id="agendar">Agendar</button>
    </div>
</form>
@endsection