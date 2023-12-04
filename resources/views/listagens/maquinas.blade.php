<x-layout>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="/listagem.css">

<a href="/maquinas/cadastro"><button class="btnCadastro">Cadastrar Máquina</button></a>
<div  class="table-responsive-sm">
    <table class="table-responsive-sm table align-middle">
        <thead>
            <tr>
                <th scope="row"></th>
                <th scope="col">Modelo</th>
                <th scope="col">Valor</th>
                <th scope="col">Nº de série</th>
                <th scope="col">Alugada?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maquinas as $m)
                <th scope="row">1</th>
                <td >{{ $m->modelo }}</td>
                <td >{{ $m->valor }}</td>
                <td >{{ $m->numero_serie }}</td>
                <td >{{ $m->alugada == 1 ? 'Sim' : 'Não' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"></script>
</x-layout>