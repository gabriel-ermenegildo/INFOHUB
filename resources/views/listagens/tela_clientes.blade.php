<x-layout>
    <link rel="stylesheet" href="/listagem.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="top">
    <div class="title">
        <h1>Listagem de Clientes</h1>
        <a href="/clientes/cadastro"><button class="btnCadastro">Cadastrar Cliente</button></a>
    </div>
    <input id="searchbar" type="text" name="searchbar" placeholder="Pesquisar Clientes" onkeyup="search()">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col"> Celular</th>
                <th scope="col"> Cidade</th>
                <th scope="col"> CPF</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->celular }}</td>
                <td>{{ $c->cidade }}</td>
                <td>{{ $c->cpf }}</td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</x-layout>