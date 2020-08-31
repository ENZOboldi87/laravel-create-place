@extends('layouts.layout')

@section('main_content')
  <h1>pagina di prova</h1>

  <div class="">
    @foreach ($students as $student)
      <ul>
        <li>Nome: {{ $student['nome'] }}</li>
        <li>cognome: {{ $student['cognome'] }}</li>
        <li>Voto: {{ $student['voto'] }}</li>
      </ul>
    @endforeach

  </div>

@endsection
