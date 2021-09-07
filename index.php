<?php
  require_once("templates/header.php");
  
 

  require_once("dao/MovieDAO.php");
  

  // DAO dos filmes
  $movieDao = new MovieDAO($conn, $BASE_URL);

  $latestMovies = $movieDao->getLatestMovies();

  $actionMovies = $movieDao->getMoviesByCategory("Ação");

  $comedyMovies = $movieDao->getMoviesByCategory("Comédia");

  $dramaMovies = $movieDao->getMoviesByCategory("Drama");

  $terrorMovies = $movieDao->getMoviesByCategory("Terror");

  $suspenseMovies = $movieDao->getMoviesByCategory("Suspense");

  $fantasiaMovies = $movieDao->getMoviesByCategory("Fantasia");

  $romanceMovies = $movieDao->getMoviesByCategory("Romance");

  $desenhoMovies = $movieDao->getMoviesByCategory("Desenho");
  

?>
  <div id="main-container" class="container-fluid">
    <h2 class="section-title">Filmes novos</h2>
    <p class="section-description">Veja as críticas dos últimos filmes adicionados no Sublime</p>
    <div class="movies-container">
      <?php foreach($latestMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($latestMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes cadastrados!</p>
      <?php endif; ?>
    </div>

    <h2 class="section-title">Ação</h2>
    <p class="section-description">Veja os melhores filmes de ação</p>
    <div class="movies-container">
      <?php foreach($actionMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($actionMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de ação cadastrados!</p>
      <?php endif; ?>
    </div>

    <h2 class="section-title">Comédia</h2>
    <p class="section-description">Veja os melhores filmes de comédia</p>
    <div class="movies-container">
      <?php foreach($comedyMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($comedyMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de comédia cadastrados!</p>
      <?php endif; ?>
    </div>
    

    <h2 class="section-title">Drama</h2>
    <p class="section-description">Veja os melhores filmes de drama</p>
    <div class="movies-container">
      <?php foreach($dramaMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($dramaMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de drama cadastrados!</p>
      <?php endif; ?>
    </div>

    <h2 class="section-title">Terror</h2>
    <p class="section-description">Veja os melhores filmes de terror</p>
    <div class="movies-container">
      <?php foreach($terrorMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($terrorMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de terror cadastrados!</p>
      <?php endif; ?>
    </div>

    <h2 class="section-title">Suspense</h2>
    <p class="section-description">Veja os melhores filmes de suspense</p>
    <div class="movies-container">
      <?php foreach($suspenseMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($suspenseMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de suspense cadastrados!</p>
      <?php endif; ?>
    </div>
  
    <h2 class="section-title">Fantasia / Ficção cientifica</h2>
    <p class="section-description">Veja os melhores filmes de Fantasia / Ficção</p>
    <div class="movies-container">
      <?php foreach($fantasiaMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($fantasiaMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de Ficção cadastrados!</p>
      <?php endif; ?>
    </div>

    <h2 class="section-title">Romance</h2>
    <p class="section-description">Veja os melhores filmes de drama</p>
    <div class="movies-container">
      <?php foreach($romanceMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($romanceMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de Romance cadastrados!</p>
      <?php endif; ?>
    </div>

    <h2 class="section-title">Desenho</h2>
    <p class="section-description">Veja os melhores filmes de Desenho</p>
    <div class="movies-container">
      <?php foreach($desenhoMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($desenhoMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de desenho cadastrados!</p>
      <?php endif; ?>
    </div>
      </div>

<?php
  require_once("templates/footer.php");
?>