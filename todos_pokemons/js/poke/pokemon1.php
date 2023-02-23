<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PokeDex</title>
   <!-- Bootstrap CSS -->
  <link href="../../../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" >
  <link rel="stylesheet" href="../../css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" />

  
</head>
<body>


<header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <form class="d-flex" style="padding: 10px; margin-right: 10px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a href="../../../index.php" class="navbar-brand">Pokémon</a>
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
                <li><a class="dropdown-item" href="../../pokedex_primeirageração.php">Geração 1</a></li>
                <li><a class="dropdown-item" href="pokedex_segunda.php">Geração 2</a></li>
                <li><a class="dropdown-item" href="pokedex_terceira.php">Geração 3</a></li>
                <li><a class="dropdown-item" href="pokedex_quarta.php">Geração 4</a></li>
                <li><a class="dropdown-item" href="pokedex_quinta.php">Geração 5</a></li>
                <li><a class="dropdown-item" href="pokedex_sexta.php">Geração 6</a></li>
                <li><a class="dropdown-item" href="pokedex_setima.php">Geração 7</a></li>
                <li><a class="dropdown-item" href="pokedex_oitava.php">Geração 8</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="allpoke.php">Todas Gerações</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
</header>
<section class="container">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-md-6 mt-5 " style="text-align: center;">  
           <img class="card-image" style="width:80%;margin-top: 50px;" alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" />
           <p>Bulbassaur</p>
        </div>
        <div class="col-md-6 mt-5" style="padding:10px;text-shadow: 1px 1px 1px white; color: black;">
            <p>Bulbasaur (em japonês フシギダネ Fushigidane) ou Bulbassauro, como é chamado na dublagem brasileria, é um Pokémon de dois tipos: Grass e Poison que foi introduzido na Geração I. Bulbasaur é um dos três Pokémon iniciais de Kanto, assim como Charmander e Squirtle, que podem ser escolhidos no começo de Pokémon Red, Green, Blue, FireRed, and LeafGreen. Ele evolui para Ivysaur no nível 16, que então evolui para Venusaur no nível 32.</p>
            <p>Seu nome vem das palavras Bulb (bulbo em inglês) e dinosaur (dinossauro em inglês). Literalmente seu nome seria Dinossauro Bulbo, uma referência ao Bulbo que tem em suas costas.</p>
            <p>Bulbasaur é um pequeno Pokémon quadrúpede que tem uma pele azul-esverdeada com manchas mais escuras. Tem olhos vermelhos com pupilas brancas, pontiagudas, estruturas em forma de orelhas no alto da cabeça e um focinho curto e rombudo com a boca larga. Um par de dentes pequenos e pontiagudos são visíveis no maxilar superior quando a boca está aberta. Cada uma das suas pernas grossas termina com três garras afiadas. Nas suas costas há um bulbo de planta verde, que é cultivado a partir de uma semente plantada no nascimento. O bulbo fornece energia através da fotossíntese, bem como das sementes ricas em nutrientes contidas no interior.</p> 
        </div>
      </div>  
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-12">
      <div class="row">
        <div class="col-md-6 " style="text-align: center;">  
           <img class="card-image" style="width:80%;margin-top: 50px;" alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png" />
        </div>
        <div class="col-md-6 " style="text-align: center;">
          <img class="card-image" style="width:80%;margin-top: 50px;" alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png" />
        </div>
      </div>  
    </div>
  </div>
</section>
  



</body>
</html>
  <script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript">
      function redireciona(){

        window.location.href="pokemon1.php"
      }
    </script>