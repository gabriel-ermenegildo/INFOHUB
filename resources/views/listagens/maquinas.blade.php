<x-layout>
<style>
    th, td {
        padding: 5px 15px;
    }
</style>
<h1>Listagem de Maquinas</h1>
<a href="/maquinas/cadastro">Cadastre</a>
<table>
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Valor</th>
            <th>Nº de série</th>
            <th>Alugada?</th>
        </tr>
    </thead>
    <tbody>
        @foreach($maquinas as $m)
        <tr>
            <td>{{ $m->modelo }}</td>
            <td>{{ $m->valor }}</td>
            <td>{{ $m->numero_serie }}</td>
            <td>{{ $m->alugada == 1 ? 'Sim' : 'Não' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>