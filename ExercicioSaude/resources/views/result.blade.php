@extends('layout.app')
@section('subtile', "Resultado IMC")
@section('content')
    <h1>Calculadora IMC</h1>
    <p>Esta aplicação realiza o calculo do IMC, desde que informado o Peso e Altura.</p>

    <hr>
    
    <div id = "result">
        <h2>Nome</h2>
        <h3>{{$nome}}</h3>
        <h2>Data de Nascimento</h2>
        <h3>{{$data_nascimento}}</h3>    
        <h2>Peso</h2>
        <h3>{{$peso}} Kg</h3>
        <h2>Altura</h2>
        <h3>{{$altura}} m</h3>
        <h2>IMC</h2>
        <h3>{{$imc}}</h3>
    </div>
@endsection