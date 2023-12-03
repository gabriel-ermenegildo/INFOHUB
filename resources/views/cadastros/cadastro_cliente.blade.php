<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CadastroCliente.css">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>
    <div class="containerCliente">
        <div class="cadastro">
            <div class="logo">
                <div class="imgLogo">
                    <a href="/"><img src="/imgs/imgsCadastro/seta.png" alt="seta" id="seta"></a>
                <img src="/imgs/imgsCadastro/logo1.png" alt="Logo" id="logo">
                </div>
              <div class="span_titulo">  
                <span>Cadastro</span> 
                <span>de</span>
                 <span> Cliente</span>
            </div>
            </div>

<div class="cadastroCliente">
<form action="/clientes/cadastro" method="post" class="formCliente">
    <input type="text" placeholder="Nome" required name="nome"  class="inputCliente">
    <input type="text" placeholder="Celular" name="cel" maxlength="11"  class="inputCliente">
    <input type="email" placeholder="E-mail" name="email"  class="inputCliente">
    <input type="text" placeholder="Cidade" name="city"  class="inputCliente">
    <input type="text" placeholder="CPF" name="cpf" maxlength="11"  class="inputCliente">
    <button type="submit" class="btnSalvarCliente">Salvar</button>
    @csrf
</form>
</div>
</div>
</div>
</body>
</html>
  
 


