<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/35b3b34844.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <header>
      <nav class="container-navbar">
        <img src="img/logo.png" alt="">
        <span>Privacy e termini</span>
        <ul class="navbar">
          <a href="#"><li>introduzione</li></a>
          <a href="#"><li>norme sulla privacy</li></a>
          <a href="#"><li>termini di servizio</li></a>
          <a href="#"><li>tecnologie</li></a>
          <a href="#"><li>domande frequenti</li></a>
        </ul>
        <div class="menu">
          <i class="fas fa-bars"></i>
          <span class="account">S</span>
        </div>
      </nav>

    </header>
    <main class="container-main">
      <?php include 'data.php' ?>
      <?php foreach ($paragraphs as $data => $value) {
        ?>
        <div class="paragraph-box">
          <div class="question">
            <?php echo $value["question"] ?>
          </div>
          <div class="answer">
            <?php
             $value["answer"] = '<p>' . str_replace('*', '</p><p>' ,$value["answer"]) . '</p>';
             echo $value["answer"] ?>
          </div>
        </div>
        <?php
      } ?>
    </main>
    <footer class="container-footer">
      <div class="box-menu">
        <ul>
          <a href="#"><li>Google</li></a>
          <a href="#"><li>Tutto su Google</li></a>
          <a href="#"><li>Privacy</li></a>
          <a href="#"><li>Termini</li></a>
        </ul>
      </div>
      <div class="box-select">
        <i class="fas fa-globe"></i>
        <select class="leanguage" name="">
          <option value="italian">italiano</option>
        </select>
      </div>

    </footer>
  </body>
</html>
