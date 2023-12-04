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
<div class="cadastroCliente">
    <div class="cadastro">


        <div class="logo">
            <div class="imgLogo">
                <a href="/"><img src="/imgs/imgsCadastro/seta.png" alt="seta" id="seta"></a>
            <img src="/imgs/imgsCadastro/logo1.png" alt="Logo" id="logo">
            </div>
          <div class="span_titulo">  
            <span>Cadastro</span> 
            <span>de</span>
             <span>Serviço</span>
        </div>
        </div>

        <div class="cadastroCliente">
            <form action="/servico/cadastro" method="post" class="formCliente">
                <select name="id_clientes" required class="cadastroServiço">
                    <option selected hidden disabled value="">Selcione um cliente</option>
                    @foreach($clientes as $c)
                        <option value="{{ $c->id }}"> {{ $c->nome }} </option>
                    @endforeach
                </select>
                <select name="id_maquinas" required class="cadastroServiço">
                    <option selected hidden disabled value="">Selcione uma máquina</option>
                    @foreach($maquinas as $m)
                        <option value="{{ $m->id }}"> {{ $m->modelo }} </option>
                    @endforeach
                </select>
                <select name="id_tipo_de_servico" required class="cadastroServiço">
                    <option selected hidden disabled value="" class="labelAluguel">Selcione um serviço</option>
                    @foreach($servicos as $s)
                        <option value="{{ $s->id }}"> {{ $s->nome }} </option>
                    @endforeach
                </select>
                <input type="number" name="orcamento" placeholder="Orçamento" min="0" step="0.01" required class="cadastroServiço" >
                
                <div class="datas">  
                <div class="data">
                    <label >
                        <span>Data: </span>
                        <input type="date" name="data" placeholder="Data" value="{{ date('Y-m-d') }}" required class="serviço">
                    </label>
                </div>
                <div class="data">
                    <label>
                        <span>Data de devolução: </span>
                    <input type="date" name="data_de_devolucao" placeholder="Data de devolução" class="serviço">
                    </label>
                </div>
                    
                </div>
               
                <button type="submit" class="btnSalvarCliente">Salvar</button>
                @csrf
            </form>
        </div>      
    </div>
</div>
</body>
</html>
