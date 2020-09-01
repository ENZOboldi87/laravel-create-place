@extends('layouts.layout')

@section('main_content')
<h2>sono nella pagina student handlebars</h2>

<div id="contenuto">

</div>

<script id="student-template" type="text/x-handlebars-template">
  <ul>
    <li>Alunno: @{{ nome }} @{{ cognome }}</li>
    <li>Voto: @{{ voto }}</li>
    <li>Descrizione: @{{ descrizione_alunno }}</li>
  </ul>
</script>

<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
@endsection
