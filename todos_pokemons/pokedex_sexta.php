<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PokeDex</title>
   <!-- Bootstrap CSS -->
    <link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" >
      <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" />
</head>
<body>
<header>
  <div >
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <form class="d-flex" style="padding: 10px; margin-right: 10px;">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="../index.php" class="navbar-brand">Pokémon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link "href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link "href="#jogos">Jogos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pokemons
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="pokedex_primeirageração.php">Geração 1</a></li>
              <li><a class="dropdown-item" href="pokedex_segunda.php">Geração 2 </a></li>
              <li><a class="dropdown-item" href="pokedex_terceira.php">Geração 3</a></li>
              <li><a class="dropdown-item" href="pokedex_quarta.php">Geração 4</a></li>
              <li><a class="dropdown-item" href="pokedex_quinta.php">Geração 5</a></li>
              <li><a class="dropdown-item" href="pokedex_sexta.php">Geração 6</a></li>
              <li><a class="dropdown-item" href="pokedex_setima.php">Geração 7</a></li>
              <li><a class="dropdown-item" href="pokedex_oitava.php">Geração 8</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="allpoke.php">Mais Gerações</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>       
</header>

  <div class="container " style="text-align: center;">
    <div class="row">
      <div class="col-12">
        <h1>Pokedex</h1>
        <ul data-js="pokedex" class="pokedex"></ul>
      </div> 
    </div>
  </div>
    
  
  <script src="js/app6.js"></script>
</body>
</html>
      <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>