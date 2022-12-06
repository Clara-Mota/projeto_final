@extends('layouts.main')

@section('title', 'Pet Shop')

@section('content')
<div class="row">
  <div class="col-md-6 mw-100" id="logo">
      <img src="/img/logo_inicio.png">
    </div>
    <div class="col-md-6" id="form">
      <form action="" id="form_inicio">
        <div id="login_email" class=col-md-5>
          <label for="email-login1" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email-login1">
        </div>
        <div id="login_senha" class=col-md-5>
          <label for="senha-login1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha-login1">
        </div>
          </br>
        <button type="submit" class="btn btn-primary" id="btn_login">Entrar</button>
      </form>
    </div>
</div>
@endsection


