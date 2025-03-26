@extends('layouts.app')

@section('title', 'Resultado do Cálculo')

@section('content')
<h1>Resultado do Cálculo</h1>

<div class="result-box">
    <h2>O valor total do gasto será de:</h2>
    <p class="result-value">
        {{ $viagem->combustivel }}: <strong>R$ {{ $viagem->calcularGasto() }}</strong>
    </p>
</div>

<div class="text-center">
    <a href="{{ route('viagem.index') }}" class="btn">Calcular Novamente</a>
</div>
@endsection