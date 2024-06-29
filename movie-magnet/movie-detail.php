<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Magnet Movie Detail</title>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <style>
      <?php include "movie-detail.css" ?>
    </style>
</head>

<body>
  <?php
    $movieId = $_GET['id'];
    $con = mysqli_connect("localhost","root","denxero","movie_list"); 
    $sql = "SELECT * FROM movies WHERE idMovies=$movieId";
    $sth = $con->query($sql);
    $row=mysqli_fetch_array($sth);
  ?>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="logo">
        <a id="logo" href="index.php"><img src="photos/logo.png" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="#home">Home</a>
        <a href="#tvShows">TV Shows</a>
        <a href="#movies">Movies</a>
        <a href="#originals">Originals</a>
        <a href="#">Recently Added</a>
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="sign-in.html">Account</a>        
      </nav>      
    </header>
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->

    <div class="grid-container">

      <div class="left">
        <?php
          echo '<img class="image"src="data:image/jpeg;base64,'.base64_encode( $row['movieImage'] ).'">';
        ?>
      </div>

      
      <div class="right">
        <?php
          echo '<h1>'.$row['movieName'].'</h1>';   
        ?>
        <?php
          echo '<p>Rating '.$row['movieRating'].' | '. $row['movieReleaseYear'].'</p>'; 
        ?>
        <?php
          echo '<p>'.$row['movieDescription'].'</p>';
        ?>
        <?php
          echo '<iframe class="vid" src="' . htmlspecialchars($row['movieTrailer']) . '" frameborder="0" allowfullscreen="1" title="Trailer 1" loading="lazy"></iframe>';
        ?>
      </div>

      
       
      
    
    </div>

    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 2023-2024 MovieMagnet, Inc.</p>
      <p>Anastasiadis 20003 & Tzegkas 20106</p>
    </footer>
  </div>
</body>
</html>
