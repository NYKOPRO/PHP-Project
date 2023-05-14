<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../script/main.js"></script>
    <title>Addition</title>
  </head>
  <body>
    <main> 
      <section class="header"> 
        <?php include 'templates/header.php'; echo $header; ?>
      </section>
      <section class="addition"> 
        <div class="addition_calc">
          <div class="actual" id="actual">
            <p>Pour commencer à calculer appuyez sur ce bouton</p>
            <button class="button_reveal" onclick="makeVisible()">Clique</button>
          </div>
          <div class="principal" id="principal">
            <form action="../php/results.php" method="post">
              <!-- On importe les imputes depuis un autre fichier pour que ça prenne moins de place -->
              <?php include 'functions/create_add.php'; echo create_add(10); ?>
              <div class="fin">
                <p id="text_fin">Fini !</p>
                <button class="button_submit" id="but_sbmt" type="submit">Reponses</button>
              </div>
            </form>
            <button class="button_next" id="but_next" onclick="makeNextVisible()">suivant</button>
          </div> 
        </div>
      </section>
      <section class="footer">
        <?php include 'templates/footer.php'; echo $footer; ?>
      </section>
      <section calss="decoration">
        <?php include 'templates/decoration.php'; echo $decoration; ?>
      </section>
    </main>
  </body>
</html>