<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadoras de Saúde e Viagem</title>
    @vite(['resources/css/global.css'])
</head>

<body>
    <div class="container">
        <h1>Bem-vindo às Calculadoras</h1>
        <p>Escolha uma das nossas ferramentas para ajudar em seus cálculos:</p>

        <div class="cards">
            <div class="card">
                <h2>Calculadora IMC</h2>
                <p>Calcule seu Índice de Massa Corporal e receba uma avaliação personalizada da sua saúde, incluindo análise do seu padrão de sono.</p>
                <a href="{{ route('imc.index') }}" class="btn">Calcular IMC</a>
            </div>

            <div class="card">
                <h2>Calculadora de Viagem</h2>
                <p>Planeje suas viagens calculando o gasto com combustível baseado na distância, consumo do veículo e preço do combustível.</p>
                <a href="{{ route('viagem.index') }}" class="btn">Calcular Gasto de Viagem</a>
            </div>
        </div>
    </div>
</body>

</html>