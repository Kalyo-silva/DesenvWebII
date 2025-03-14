@extends('layout.app')
@section('subtile', "Página Inicial")
@section('content')
    <h1>Calculadora IMC</h1>
    <p>Esta aplicação realiza o calculo do IMC, desde que informado o Peso e Altura.</p>

    {{$imc}}
@endsection