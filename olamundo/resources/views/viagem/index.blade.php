@extends('layouts.app')

@section('title', 'Calculadora de Viagem')

@section('content')
<h1>Calculadora de Viagem</h1>

<p class="instructions">
    Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem,
    com base no consumo do seu veículo e com a distância determinada por você!
</p>

<div class="form-container">
    <form method="POST" action="{{ route('viagem.calcular') }}">
        @csrf
        <div class="form-grid">
            <div class="form-group">
                <label>Combustível:</label>
                <select name="combustivel" required>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Etanol">Etanol</option>
                    <option value="Diesel">Diesel</option>
                </select>
            </div>

            <div class="form-group">
                <label>Valor do combustível (R$):</label>
                <input type="number" name="valor" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Distância (km):</label>
                <input type="number" name="distancia" required>
            </div>

            <div class="form-group">
                <label>Consumo do veículo (km/l):</label>
                <input type="number" name="consumo" step="0.1" required>
            </div>
        </div>

        <button type="submit" class="btn">Calcular Gasto</button>
    </form>
</div>
@endsection