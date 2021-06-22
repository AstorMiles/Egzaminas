<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@200;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <img id="logo" src="img/logo.png">
  </header>
  <div class="container">
            <h1>Naujausi Kursai</h1>
                      <?php

            $query = "SELECT * FROM kursai";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
                    $courseID = $row['Komentarai_ID'];
                    $count = "SELECT count(*) as commentCount FROM `komentarai` WHERE Komentaro_ID = '$courseID'";
                    $countResult = $connect->query($count);
                    $comments = $countResult->fetch_assoc();
                    $rating = $row['Reitingas'];
                    $ID = $row['kurso_pavadinimas'];
                    $name = $row['autorius'];
            ?>
  <div class="d-flex">
    <div class="cardbox">
      <div class="card">
        <img class="cardimage" src="img/php.jpg">
        <div class=cardcontent>
        <h3><a href="#">PHP Pagrindai</a></h3>
        <p>Autorius</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <hr>
      </div>
        <div class="cardfooter">
          <div class="stars">
            <span>5</span>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="comments">
            <i class="fas fa-comment"></i>
            <span>9</span>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="cardimage" src="img/css.jpg">
        <div class=cardcontent>
        <h3><a href="#">HTML/CSS Įvadas</a></h3>
        <p>Autorius</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <hr>
      </div>
      <div class="cardfooter">
        <div class="stars">
          <span>3</span>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="comments">
          <i class="fas fa-comment"></i>
          <span>4</span>
        </div>
      </div>
      </div>
      <div class="card">
        <img class="cardimage" src="img/git.jpg">
        <div class=cardcontent>
        <h3><a href="#">Pažintis su GIT</a></h3>
        <p>Autorius</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <hr>
      </div>
      <div class="cardfooter">
        <div class="stars">
          <span>4</span>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="comments">
          <i class="fas fa-comment"></i>
          <span>8</span>
        </div>
      </div>
      </div>
      <div class="card">
        <img class="cardimage" src="img/js.jpg">
        <div class=cardcontent>
        <h3><a href="#">JavaScript Žaliems</a></h3>
        <p>Autorius</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <hr>
      </div>
      <div class="cardfooter">
        <div class="stars">
          <span>5</span>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="comments">
          <i class="fas fa-comment"></i>
          <span>20</span>
        </div>
      </div>
      </div>
    </div>
  </div><br>
  <div id="sectionb">
    <h1>Sekite naujienas</h1>
    <p>Gaukite Naujienlaiškį</p>
    <form onsubmit="validateForm(); return false">
            <label for="name">Vardas</label>
            <input type="text" id="name" />
            <label for="email">El. paštas</label>
            <input type="email" id="email" />
          </div>
          <button id="submit" type="submit">
            Užsisakyti
          </button>
        </form>
        <div class="hr"></div>
  </div><br><hr>
  <footer>
    <p>@ Emilis Palevičius</p>
  </footer>
  <script src="js/script.js"></script>
</div>
</body>
</html>
