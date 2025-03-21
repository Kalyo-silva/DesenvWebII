@extends('layout.app')
@section('subtile', "Resultado Travel")
@section('content')
    <h1>Consumo da Viagem</h1>
    <p>Vamos Descobrir se você a sua viagem custou caro!</p>

    <hr>
    
    <div id = "result">
        <h2>Combustível</h2>
        <h3>{{$Combustivel}}</h3>    
        <h2>Valor</h2>
        <h3>R${{$Gastos}}</h3>
    </div>
@endsection