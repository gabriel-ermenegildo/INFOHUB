<x-layout>
<h1>Cadastro de serviços</h1>
<form action="/servico/cadastro" method="post">
    
    <select name="id_clientes" required>
        <option selected hidden disabled value="">Selcione um cliente</option>
        @foreach($clientes as $c)
            <option value="{{ $c->id }}"> {{ $c->nome }} </option>
        @endforeach
    </select>
    <select name="id_maquinas" required>
        <option selected hidden disabled value="">Selcione uma máquina</option>
        @foreach($maquinas as $m)
            <option value="{{ $m->id }}"> {{ $m->modelo }} </option>
        @endforeach
    </select>
    <select name="id_tipo_de_servico" required>
        <option selected hidden disabled value="">Selcione um serviço</option>
        @foreach($servicos as $s)
            <option value="{{ $s->id }}"> {{ $s->nome }} </option>
        @endforeach
    </select>
    
    <input type="number" name="orcamento" placeholder="Orçamento" min="0" step="0.01" required >

    <label>
        <span>Data: </span>
        <input type="date" name="data" placeholder="Data" value="{{ date('Y-m-d') }}" required>
    </label>

    <label>
        <span>Data de devolução: </span>
    <input type="date" name="data_de_devolucao" placeholder="Data de devolução">
    </label>
    <button type="submit">Salvar</button>
    @csrf
</form>
</x-layout>
