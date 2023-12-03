<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CadastroCliente.css">
    <title>Document</title>
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
                 <span>Máquina</span>
            </div>
            </div>
            <div class="cadastroCliente">
                <form action="/maquinas/cadastro" method="post" class="formCliente">
                    <input type="text" placeholder="Modelo" name="modelo" required class="inputCliente"> 
                    <input type="text" placeholder="Valor" name="valor" required class="inputCliente">
                    <input type="text" placeholder="Número de série" name="nserie" class="inputCliente">
                    
                    <div class="cadastroAluguel">
                        <label for="" class="alugada">Alugada?</label>
                      <div>
                        <label class="labelAluguel">
                            <input type="radio" name="alugada" value="1" class="inputClienteMenor"> Sim
                        </label>
                        <label class="labelAluguel">
                            <input type="radio" name="alugada" value="0" class="inputClienteMenor"> Não
                        </label>
                      </div>
                      <button type="submit" class="btnSalvar_aluguel">Salvar</button>
                    </div>
                    @csrf
                </form>
            </div>

        </div>
    </div>

</body>
</html>


