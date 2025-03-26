@extends('layouts.app')

@section('title', 'Resultado IMC')

@section('content')
<h1>Resultado da Análise</h1>

<div class="result-box">
    <div class="text-content">
        <p>
            <strong>{{ $imc->nome }}</strong>, você tem {{ $imc->idade() }} anos,
            sua altura é {{ $imc->altura }}m,
            seu peso é {{ $imc->peso }}kg
            e seu IMC é: <strong>{{ $imc->calcularImc() }}</strong>.
        </p>

        <p>
            Classificação: <strong>{{ $imc->classificacaoImc() }}</strong>
        </p>
    </div>

    <div class="sleep-analysis">
        <h3>Análise do Sono</h3>
        <p>
            Você dorme em média {{ $imc->horas_sono }} horas por dia.<br>
            Para sua idade, o ideal seria dormir {{ $imc->avaliarSono()['ideal'] }}.<br>
            Seu padrão de sono está <strong>{{ $imc->avaliarSono()['status'] }}</strong>.
        </p>
    </div>
</div>

<div class="btn-container">
    <a href="{{ route('imc.index') }}" class="btn">Calcular Novamente</a>
</div>
@endsection