<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="script/main.js"></script>
    <title>Page d'accueil</title>
  </head>
  <body>
    <main>
      <section class="header">
        <?php include 'php/templates/header.php'; echo $header_index; ?>
      </section>
      <section class="homepage">
        <div class="text">
          <h1>Bienvenue sur ce Site !</h1>
          <p></p>
        </div>
      </section>
      <section class="footer">
        <?php include 'php/templates/footer.php'; echo $footer; ?>
      </section>
      <section class="decoration">
        
      </section>
    </main>
  </body>
</html>