@extends('layout.app')
@section('subtile', "Cálculo do Sono")
@section('content')
    <h1>Cálculo do Sono Ideal</h1>
    <p>Vamos Descobrir se você está com o sono em dia!</p>

    <form action="resultSleep" method="get">
        <label for="Nasc">Data de Nascimento</label>
        <input type="date" name="Nasc" id="Nasc">
        <label for="Horas">Média de Horas de Sono</label>
        <input type="number" min="0" max="24" step="0.5" name="Horas" id="Horas">
        <button type="submit">Enviar</button>
    </form>
@endsection