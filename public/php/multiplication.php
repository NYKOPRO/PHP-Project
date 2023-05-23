<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <script src="../script/main.js"></script>
  <title>Multiplication</title>
</head>

<body>
  <main>
    <section class="header">
      <?php include 'templates/header.php';
      echo $header; ?>
    </section>
    <section class="main">
      <?php include 'templates/calc.php';
      echo calc(10, "mul"); ?>
    </section>
    <section class="footer">
      <?php include 'templates/footer.php';
      echo $footer; ?>
    </section>
    <section class="decoration">
      <?php include 'templates/decoration.php';
      echo $decoration; ?>
    </section>
  </main>
</body>

</html>