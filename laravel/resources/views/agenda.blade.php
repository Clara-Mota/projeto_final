@extends('layouts.main')

@section('title', 'Agendar')

@section('content')

<a href="/cadastros/agendamento"><button type="button" class="btn btn-primary" id="btn_agendamento">Agendar serviço</button></a>

@foreach($profissionais as $profissional)
    <p>{{ $profissional->nome }}</p>
@endforeach

@endsection