@extends('layout.app')
@section('subtile', "IMC")
@section('content')
    <h1>Calculadora IMC</h1>
    <p>Esta aplicação realiza o calculo do IMC, desde que informado o Peso e Altura.</p>

    <form action="resultIMC" method="get">
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" id="Nome">
        <label for="Nasc">Data de Nascimento</label>
        <input type="date" name="Nasc" id="Nasc">
        <label for="Peso">Peso</label>
        <input type="number" name="Peso" id="Peso" step="0.01" min="0" max="200">
        <label for="Alt">Altura</label>
        <input type="number" name="Alt" id="Alt" step="0.01" min="0" max="2.5">
        <button type="submit">Enviar</button>
    </form>
@endsection