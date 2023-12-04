<x-layout>
<link rel="stylesheet" href="/listagem.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div id="margin-top">
    <div class="margin-top">
        <a href="/servico/cadastro"><button class="btnCadastro">Cadastrar Serviço</button></a>
    <h1>Listagem de Servicos</h1>  
    <table class="table table-sm">
        <thead>
            <tr>
                
                <th scope="col">Orçamento</th>
                <th scope="col">Tipo de serviço</th>
                <th scope="col">Data</th>
                <th scope="col">Data de devolução</th>
                <th scope="col">Cliente</th>
                <th scope="col">Máquina</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicos as $s)
            <tr scope="row">
                <td>R${{number_format($s->orcamento, 2, ',', '.'); }}</td>
                <td>{{ $s->tipo->nome }}</td>
                <td>{{ $s->dataFormatada(); }}</td>
                <td>{{ $s->dataDeDevolucaoFormatada(); }}</td>
                <td>{{ $s->cliente->nome}}</td>
                <td>{{ $s->maquina->modelo}}</td>
            </tr>
            @endforeach
        </tbody>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </table>
    </div>
    </div>  
</x-layout>