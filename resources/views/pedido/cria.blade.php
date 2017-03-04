@extends('layouts.master')

@section('title', 'Cadastro de Pedido')

@section('page-header-content', 'Cadastro de Pedido')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/pedidos">
            <span class="glyphicon glyphicon-th-list"></span> Pedido
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/pedidos" method="POST">
        {{csrf_field()}}

        <div class="form-group">
          <label for="paciente_id">Paciente</label>
          <select name="paciente_id" id="paciente_id" class="form-control">
            <option></option>
            @foreach($pacientes as $paciente)
              <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="medico_id">Medico</label>
          <select name="medico_id" id="medico_id" class="form-control">
            <option></option>
            @foreach($medicos as $medico)
              <option value="{{ $medico->id }}">{{ $medico->nome }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exame_id">Exame</label>
          <select name="exame_id" id="exame_id" class="form-control">
            <option></option>
            @foreach($exames as $exame)
              <option value="{{ $exame->id }}">{{ $exame->nome }}</option>
            @endforeach
          </select>
        </div>

        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
