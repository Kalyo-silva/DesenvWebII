@extends('layout.app')
@section('subtile', "Página Inicial")
@section('content')
    <h1>Exercício 4</h1>
    <p style = "Margin: 0;">Escolha a sua Aplicação</p>
    <hr>
    <ul>
        <li><a href="{{url('/IMC')}}">IMC</a></li>
        <li><a href="{{url('/sleep')}}">Qualidade do Sono</a></li>
        <li><a href="{{url('/travel')}}">Custo de Viagem</a></li>
    </ul>
@endsection