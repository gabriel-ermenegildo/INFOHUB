<x-layout>
<h1>Cadastro de Cliente</h1>
<a href="/">Tela Inicial</a>
<form action="/clientes/cadastro" method="post">
    <input type="text" placeholder="Nome" required name="nome">
    <input type="text" placeholder="Celular" name="cel" maxlength="11">
    <input type="email" placeholder="E-mail" name="email">
    <input type="text" placeholder="Cidade" name="city">
    <input type="text" placeholder="CPF" name="cpf" maxlength="11">
    <button type="submit">Salvar</button>
    @csrf
</form>
</x-layout>

