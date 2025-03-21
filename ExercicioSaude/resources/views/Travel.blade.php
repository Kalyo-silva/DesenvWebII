@extends('layout.app')
@section('subtile', "Cálculo da Viagem")
@section('content')
    <h1>Consumo de combustível</h1>
    <p>Tenha certeza do custo de sua viajem!</p>

    <form action="resultTravel" method="get">
        <label for="Combustivel">Tipo de Combustível</label>
        <select name="Combustivel" id="Combustivel">
            <option value="Gasolina">Gasolina</option>
            <option value="Diesel">Diesel</option>
            <option value="Alcool">Alcool</option>
            <option value="GLP">GLP</option>
        </select>

        <label for="Valor">Valor do Combustivel (R$)</label>
        <input type="number" step="0.01" name="Valor" id="Valor">
        
        <label for="Distancia">Distância do Trajeto (Km)</label>
        <input type="number" step="0.01" name="Distancia" id="Distancia">
        
        <label for="Consumo">Consumo de Combustivel (Km/L)</label>
        <input type="number" step="0.01" name="Consumo" id="Consumo">
        
        <button type="submit">Enviar</button>
    </form>
@endsection