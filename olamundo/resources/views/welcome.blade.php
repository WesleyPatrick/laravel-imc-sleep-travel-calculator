<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadoras de Saúde e Viagem</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 90%;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .description {
            color: #34495e;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .button-imc {
            background-color: #3498db;
            color: white;
        }

        .button-viagem {
            background-color: #2ecc71;
            color: white;
        }

        .card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin: 1rem 0;
            text-align: left;
        }

        .card h2 {
            color: #2c3e50;
            margin-top: 0;
        }

        .card p {
            color: #34495e;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bem-vindo às Calculadoras</h1>

        <div class="description">
            <p>Escolha uma das nossas ferramentas para ajudar em seus cálculos:</p>
        </div>

        <div class="card">
            <h2>Calculadora IMC</h2>
            <p>Calcule seu Índice de Massa Corporal e receba uma avaliação personalizada da sua saúde, incluindo análise do seu padrão de sono.</p>
        </div>

        <div class="card">
            <h2>Calculadora de Viagem</h2>
            <p>Planeje suas viagens calculando o gasto com combustível baseado na distância, consumo do veículo e preço do combustível.</p>
        </div>

        <div class="buttons">
            <a href="{{ route('imc.index') }}" class="button button-imc">
                Calcular IMC
            </a>
            <a href="{{ route('viagem.index') }}" class="button button-viagem">
                Calcular Gasto de Viagem
            </a>
        </div>
    </div>
</body>

</html>