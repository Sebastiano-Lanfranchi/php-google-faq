<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
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
  </body>
</html>
