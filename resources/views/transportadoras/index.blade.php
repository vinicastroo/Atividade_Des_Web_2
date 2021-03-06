<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Northwind</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/territorios">Territorios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clientes">Clientes</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/transportadoras">Transportadoras</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br/>

            <h2>Gerenciamento de Transportadoras</h2>
            <a class="btn btn-success" href="{{route('transportadoras.create')}}">Criar</a>
            <br/>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Companhia</th>
                        <th scope="col">Telefone</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transportadoras as $transportadora)
                        <tr>
                            <td>{{$transportadora->IDTransportadora}}</td>
                            <td>{{$transportadora->NomeConpanhia}}</td>
                            <td>{{$transportadora->Telefone}}</td>
                            <td>
                                <form action="{{route('transportadoras.destroy', array($transportadora->IDTransportadora))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Deletar" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                            <td> <a href="{{route('transportadoras.edit', array($transportadora->IDTransportadora))}}"class="btn btn-warning">Alterar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </body>
</html>
