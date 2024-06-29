<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="index.css">
  <title>MovieMagnet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

</head>
<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="logo">
        <a id="logo" href="#home"><img src="photos/logo.png" alt="Logo Image"></a>
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
    <section class="main-container" >
      <div class="location" id="home">
        <h1 id="home">Popular on MovieMagnet</h1>
          <div class="box">
            <?php
              $con = mysqli_connect("localhost","root","denxero","movie_list"); 
              $sql = "SELECT * FROM movies WHERE idMovies>0 AND idMovies<13";
              $sth = $con->query($sql);
              $result=mysqli_fetch_array($sth);
              foreach($sth as $row){
                echo '<a href="movie-detail.php?id=' . $row['idMovies'] . '"><img src="data:image/jpeg;base64,' . base64_encode($row['movieImage']) . '" alt=""></a>';
              }
            ?>      
          </div>
        </div>
      

        <h1 id="myList">Trending Now</h1>
         <div class="box">
          <?php
            $con = mysqli_connect("localhost","root","denxero","movie_list"); 
            $sql = "SELECT * FROM movies WHERE idMovies>12 AND idMovies<19";
            $sth = $con->query($sql);
            $result=mysqli_fetch_array($sth);
            foreach($sth as $row){
              echo '<a href="movie-detail.php?id=' . $row['idMovies'] . '"><img src="data:image/jpeg;base64,'.base64_encode( $row['movieImage'] ).'" alt=""></a>';
            }
          ?>     
        </div>
      
      <h1 id="tvShows">TV Shows</h1>
      <div class="box">
        <?php
            $con = mysqli_connect("localhost","root","denxero","movie_list"); 
            $sql = "SELECT * FROM movies WHERE idMovies>30 AND idMovies<43";
            $sth = $con->query($sql);
            $result=mysqli_fetch_array($sth);
            foreach($sth as $row){
              echo '<a href="movie-detail.php?id=' . $row['idMovies'] . '"><img src="data:image/jpeg;base64,'.base64_encode( $row['movieImage'] ).'" alt=""></a>';
            }
        ?>     
      </div>
      

      <h1 id="movies">Blockbuster Action & Adventure</h1>
      <div class="box">
        <?php
            $con = mysqli_connect("localhost","root","denxero","movie_list"); 
            $sql = "SELECT * FROM movies WHERE idMovies>18 AND idMovies<25";
            $sth = $con->query($sql);
            $result=mysqli_fetch_array($sth);
            foreach($sth as $row){
              echo '<a href="movie-detail.php?id=' . $row['idMovies'] . '"><img src="data:image/jpeg;base64,'.base64_encode( $row['movieImage'] ).'" alt=""></a>';
            }
        ?>     
      </div>

      <h1 id="originals">MovieMagnet Originals</h1>
      <div class="box">
        <?php
          $con = mysqli_connect("localhost","root","denxero","movie_list"); 
          $sql = "SELECT * FROM movies WHERE idMovies>24 AND idMovies<31";
          $sth = $con->query($sql);
          $result=mysqli_fetch_array($sth);
          foreach($sth as $row){
            echo '<a href="movie-detail.php?id=' . $row['idMovies'] . '"><img src="data:image/jpeg;base64,'.base64_encode( $row['movieImage'] ).'" alt=""></a>';
          }
        ?>     
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
