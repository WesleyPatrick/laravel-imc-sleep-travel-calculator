@extends('layouts.app')

@section('title', 'Calculadora IMC')

@section('content')
<h1>Calculadora IMC</h1>

<div class="text-content">
    <p>Esta aplicação realiza o cálculo do IMC e avalia seu padrão de sono.</p>
</div>

<div class="form-container">
    <form method="POST" action="{{ route('imc.calcular') }}">
        @csrf
        <div class="form-grid">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="form-group">
                <label>Data de Nascimento:</label>
                <input type="date" name="data_nascimento" required>
            </div>

            <div class="form-group">
                <label>Peso (kg):</label>
                <input type="number" name="peso" step="0.1" required>
            </div>

            <div class="form-group">
                <label>Altura (m):</label>
                <input type="number" name="altura" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Média de horas de sono por dia:</label>
                <input type="number" name="horas_sono" step="0.5" min="0" max="24" required>
            </div>
        </div>
        <div class="btn-container">
            <button type="submit" class="btn">Calcular</button>
        </div>
    </form>
</div>
@endsection