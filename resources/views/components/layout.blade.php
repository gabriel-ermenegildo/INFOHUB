<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/home.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>INFOHUB</title>
</head>
<body>
    <div class="container_Home">
        <header >
          <nav class="navigation">
            <a href="/" class="logo"><img src="/imgs/img/infohub_logo_azul_claro.png" alt="Logo InfoHub"></a>
    
            <ul class="nav-menu">
              <li class="nav-item"><a href="/clientes/listagem"><i class='bx bx-user'></i> Clientes</a></li>
              <li class="nav-item"><a href="/maquinas/listagem"><i class='bx bx-cog'></i> Máquinas</a></li>
              <li class="nav-item"><a href="/servicos/listagem"><i class='bx bx-briefcase'></i> Serviços</a></li>
            </ul>
            <div class="menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
          </nav>
        </header>    
    <main>
        <div>
        
                {{ $slot }}
            
        </div>
    </main>
    <script src="/home3.js"></script>
</body>
</html>