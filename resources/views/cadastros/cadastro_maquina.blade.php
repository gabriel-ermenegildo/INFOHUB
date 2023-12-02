<x-layout>
<h1>Cadastro de máquinas</h1>
<a href="/">Tela Inicial</a>
<form action="/maquinas/cadastro" method="post">
    <input type="text" placeholder="Modelo" name="modelo" required>
    <input type="text" placeholder="Valor" name="valor" required>
    <input type="text" placeholder="Número de série" name="nserie">
    
    <span>
        Alugada?
        <label>
            <input type="radio" name="alugada" value="1"> Sim
        </label>
        <label>
            <input type="radio" name="alugada" value="0"> Não
        </label>
    </span>
    
    <button type="submit">Salvar</button>
    @csrf
</form>
</x-layout>
