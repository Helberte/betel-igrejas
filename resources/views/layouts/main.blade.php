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

  <title>@yield('title')</title>

</head>
<body>
  <header>
    <h1>Cabeçalho</h1>
  </header>
  <nav>
    <h2>Menu de navegação</h2>
  </nav>

  @yield('content')

  <footer>
    <h3>Rodapé</h3>
  </footer>
</body>
</html>