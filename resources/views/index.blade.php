<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Pegando as variáveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Resultados em Tempo Real</h1>
        </header>
        <nav>
            <ul>
                {{-- Links para o cadastro --}}
                <li><a href="/satelite">Início</a></li>
                <li><a href="/satelite/create">Outra página</a></li>
            </ul>
        </nav>
        <div class="content">
            <h2>Para que servem os sensores do satélite?</h2>
            <p>O sensoriamento do satélite é de grande importância, já que é através disso que ele consegue capturar as informações necessárias. Desta maneira, logo abaixo você poderá conferir, em tempo real, o que os sensores do satélite da equipe Halley estão capturando.</p>
            <br>
            <h2>Dados em Tempo Real</h2>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Pressão</th>
                        <th>Temperatura</th>
                        <th>Umidade</th>
                        <th>Acelerômetro</th>
                        <th>CO2</th>
                        <th>GPS</th>
                        <th>Giroscópio</th>
                        <th>Bateria</th>
                    </tr>
                </thead>

                <tfoot>
                <tr>
                    <td>Data: {{ $satelite->count() }}</td>
                    <td>Pressão: {{ $satelite->count() }}</td>
                    <td>Temperatura: {{ $satelite->count() }}</td>
                    <td>Umidade: {{ $satelite->count() }}</td>
                    <td>Acelerômetro: {{ $satelite->count() }}</td>
                    <td>CO2: {{ $satelite->count() }}</td>
                    <td>GPS: {{ $satelite->count() }}</td>
                    <td>Giroscópio: {{ $satelite->count() }}</td>
                    <td>Bateria: {{ $satelite->count() }}</td>
                </tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <div>
                <p>Contatos:</p>
            </div>
        </footer>
    </div>
</body>
</html>
