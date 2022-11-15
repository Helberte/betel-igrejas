<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema para gestão de igrejas">
  <meta name="keywords" content="gestao, igrejas, membros, organizacao, templo">
  <meta name="author" content="Helberte Costa">

  <!-- css geral -->
  <link href="css/main.css" rel="stylesheet">

  <!-- incorporação dos icones -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
  <script src="js/main.js" defer></script>

  <title>@yield('title')</title>

</head>
<body>
  <header class="header-main">

    <!-- first bar -->
    <div class="header-main-header">
      <div class="img-betel">
          <img src="img/logo_pequena.png" alt="Logo Betel Igrejas">
      </div>
      <div class="info-igreja">
        <div class="igreja-authenticated">
          <span class="logo">
            <img src="img/logo_igreja.png" alt="Logo igreja autenticada">
          </span>
          <p>Igreja Evangélica Assembleia de Deus</p>    
        </div>
        <ul class="ul-config-header-main">
          <li> <ion-icon id="arrow-icon" class="arrow-icon" name="chevron-down-outline"></ion-icon>
            <ul id="ul-dropdown">
              <li class="item-menu-settings"> 
                <a href="#">
                  <ion-icon class="icon-item" name="settings-outline"></ion-icon> Configurações 
                </a>
              </li>   
            </ul>
          </li>
        </ul>
      </div> 

      <div class="foto-person">
        <!-- <img src="" alt=""> -->
        <ion-icon class="icon-user" name="person-circle-outline"></ion-icon>      
      </div>
    </div>
      
    <!-- second bar -->
    <nav class="nav-menu-main">
      <ul>
        <li> <a href="/"> <ion-icon class="icon-menu-main" name="home-outline"></ion-icon> Visão Geral</a> </li>
        <li> <a href="#pessoas"> <ion-icon class="icon-menu-main" name="people-outline"></ion-icon> Pessoas</a>

          <ul>
            <li><a href="#"><ion-icon class="icons-sub-menu-main" name="list-outline"></ion-icon> Ver todos</a></li>
            <li><a href="#"><ion-icon class="icons-sub-menu-main" name="person-add-outline"></ion-icon> Cadastrar</a></li>
            <li><a href="#"><ion-icon class="icons-sub-menu-main" name="fast-food-outline"></ion-icon> Aniversariantes</a></li>
            <li><a href="#"><ion-icon class="icons-sub-menu-main" name="newspaper-outline"></ion-icon>Relatórios</a></li>
          </ul>
      
        </li>
        <li> <a href="#ebd"> <ion-icon class="icon-menu-main" name="school-outline"></ion-icon> EBD</a></li>
        <li class="last-option"> <a href="#financeiro"><ion-icon class="icon-menu-main" name="cash-outline"></ion-icon> Financeiro</a></li> 
      </ul>
    </nav>
  </header>
  

  @yield('content')

  <footer>
    <p>&copy; 2022 - Todos os direitos reservados para Betel igrejas</p>
  </footer>
</body>
</html>