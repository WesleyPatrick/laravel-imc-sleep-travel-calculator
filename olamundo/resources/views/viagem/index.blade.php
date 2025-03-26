<!DOCTYPE html>
<html>

<head>
    <title>Cálculo de Gasto em Viagem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h2>Instruções</h2>
    <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo e com a distância determinada por você!</p>

    <h2>Cálculo do valor (R$) do consumo</h2>

    <form method="POST" action="{{ route('viagem.calcular') }}">
        @csrf
        <div>
            <label>Combustível:</label>
            <select name="combustivel" required>
                <option value="Gasolina">Gasolina</option>
                <option value="Etanol">Etanol</option>
                <option value="Diesel">Diesel</option>
            </select>
        </div>

        <div>
            <label>Valor do combustível (R$):</label>
            <input type="number" name="valor" step="0.01" required>
        </div>

        <div>
            <label>Distância em quilômetros a ser percorrida:</label>
            <input type="number" name="distancia" required>
        </div>

        <div>
            <label>Consumo de combustível do veículo (km/l):</label>
            <input type="number" name="consumo" step="0.1" required>
        </div>

        <button type="submit">Calcular</button>
    </form>
</body>

</html>