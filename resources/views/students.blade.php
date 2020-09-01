@extends('layouts.layout')

@section('main_content')
  <h1>Questi sono i tuoi alunni</h1>

  <div class="">
    @foreach ($students as $student)
      <ul>
        <li>Alunno: {{ $student->nome }} {{ $student->cognome }}</li>
        <li>Voto: {{ $student->voto }}</li>
        <li>Descrizione: {{ $student->descrizione_alunno}}</li>
      </ul>
    @endforeach

  </div>

@endsection
