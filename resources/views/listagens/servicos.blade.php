<x-layout>
<style>
    th, td {
        padding: 5px 15px;
    }
</style>
<h1>Listagem de Servicos</h1>
    <a href="/servico/cadastro">Cadastre</a>
    <a href="/">Tela Inicial</a>
<table>
    <thead>
        <tr>
            <th>Orçamento</th>
            <th>Tipo de serviço</th>
            <th>Data</th>
            <th>Cliente</th>
            <th>Máquina</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicos as $s)
        <tr>
            <td>R${{number_format($s->orcamento, 2, ',', '.'); }}</td>
            <td>{{ $s->tipo->nome }}</td>
            <td>{{date('d/m/Y', strtotime($s->data )); }}</td>
            <td>{{ $s->cliente->nome}}</td>
            <td>{{ $s->maquina->modelo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>