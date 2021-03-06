<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
                        <a class="nav-link"  href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/territorios">Territorios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transportadoras">Transportadoras</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br/>
        <div class="container">
        <h1>Criar Cliente</h1>
        <form action="{{route('clientes.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="IDCliente">IDCliente</label>
                <input type="text" name="IDCliente" id="IDCliente" class="form-control">
            </div>

            <div class="form-group">
                <label for="NomeCompanhia">NomeCompanhia</label>
                <input type="text" name="NomeCompanhia" id="NomeCompanhia" class="form-control">
            </div>

            <div class="form-group">
                <label for="NomeContato">NomeContato</label>
                <input type="text" name="NomeContato" id="NomeContato" required class="form-control">
            </div>

            <div class="form-group">
                <label for="TituloContato">TituloContato</label>
                <input type="text" name="TituloContato" id="TituloContato" required class="form-control">
            </div>

            <div class="form-group">
                <label for="Endereco">Endereco</label>
                <input type="text" name="Endereco" id="Endereco" required class="form-control">
            </div>

            <div class="form-group">
                <label for="Cidade">Cidade</label>
                <input type="text" name="Cidade" id="Cidade" required class="form-control">
            </div>

            <div class="form-group">
                <label for="Regiao">Regiao</label>
                <input type="text" name="Regiao" id="Regiao" required class="form-control">
            </div>

            <div class="form-group">
                <label for="CEP">CEP</label>
                <input type="text" name="CEP" id="CEP" required class="form-control">
            </div>

            <div class="form-group">
                <label for="Pais">Pais</label>
                <input type="text" name="Pais" id="Pais" required class="form-control">
            </div>

            <div class="form-group">
                <label for="Telefone">Telefone</label>
                <input type="text" name="Telefone" id="Telefone" required class="form-control">
            </div>

            <div class="form-group">
                <label for="Fax">Fax</label>
                <input type="text" name="Fax" id="Fax" required class="form-control">
            </div>

            <input type="submit" value="Criar Categoria" class="btn btn-lg btn-primary">
        </form>
        </div>

    </body>
</html>
