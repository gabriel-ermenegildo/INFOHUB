<x-layout>
<style>
    th, td {
        padding: 5px 15px;
    }
</style>
<h1>Listagem de Clientes</h1>
    <a href="/clientes/cadastro">Cadastre</a>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Celular</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $c)
        <tr>
            <td>{{ $c->nome }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->celular }}</td>
        
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>