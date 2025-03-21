@extends('layout.app')
@section('subtile', "Resultado Sleep")
@section('content')
    <h1>Cálculo do Sono Ideal</h1>
    <p>Vamos Descobrir se você está com o sono em dia!</p>

    <hr>
    
    <div id = "result">
        <h2>Data de Nascimento</h2>
        <h3>{{$data_nascimento}}</h3>    
        <h2>Média Diária de Sono</h2>
        <h3>{{$medSono}} Horas</h3>    
        <h2>Sono ideal</h2>
        <h3>{{$SonoIdeal}}</h3>
        <h2>Qualidade do Sono</h2>
        <h3>{{$qualidade}}</h3>
    </div>
@endsection
