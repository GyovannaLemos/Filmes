<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="font-family: 'Bebas Neue', cursive; font-size: 22pt;">NetFilmes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link active" href="lista.php">Lista</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cadastroFilme.php">Cadastro</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="./control/pesquisarFilme.php">
      <input class="form-control mr-sm-2" type="search" name="pesquisar" placeholder="Pesquise um filme" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>