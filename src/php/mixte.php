<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <script src="../script/main.js"></script>
  <title>Mixed</title>
</head>
<body> 
  <main> 
    <section class="header"> 
      <?php include 'templates/header.php'; echo $header; ?>
    </section>
    <section class="mixed" id="mixed">
      <div class="mixed_calc">
        <div class="actual" id="actual"> 
          <p>Pour commencer à calculer appuyez sur ce bouton</p>
          <button class="button_reveal" onclick="makeVisible()">Clique</button>
        </div>
        <div class="principal" id="principal">
          <form action="../php/results.php" method="post">
            <?php
              for($i = 1; $i <= 10; $i++){
                  $calc = "";
                  $reponse = 0;
                  for($j = 1; $j <=3; $j++){
                      $number = rand(1, 10);
                      switch ($j) {
                          case 1:
                              $calc = "$number";
                              $reponse = $number;
                              $num = $number;
                              break;

                          case 2:
                              $signe = rand(0, 3);
                              switch ($signe) {
                                  case 0:
                                      $calc = "$calc + $number";
                                      $reponse = $reponse + $number;
                                      $check = "false";
                                      break;

                                  case 1:
                                      $calc = "$calc - $number";
                                      $reponse = $reponse - $number;
                                      $check = "false";
                                      break;

                                  case 2:
                                      $calc = "$calc * $number";
                                      $reponse = $reponse * $number;
                                      $check = "false";
                                      break;

                                  case 3:
                                      $calc = "$calc / $number";
                                      $reponse = $reponse / $number;
                                      $den = $number;
                                      $check = "true";
                                      break;
                                  
                                  default:
                                      echo "probleme_2";
                                      break;
                              }
                              break;

                          case 3:
                              $signe = rand(0, 1);
                              switch ($signe) {
                                  case 0:  
                                      $calc = "$calc + $number";                                          
                                      if($check=="true"){
                                        $numdem = $number;
                                        $newnum = $numdem * $den;
                                        $numtot = $num + $newnum;
                                        $reponse = "$numtot / $den";
                                      }
                                      else{
                                        $reponse = $reponse + $number;
                                      }
                                      break;

                                  case 1:
                                      $calc = "$calc - $number";                                          
                                      if($check=="true"){
                                        $numdem = $number;
                                        $newnum = $numdem * $den;
                                        $numtot = $num - $newnum;
                                        $reponse = "$numtot / $den";
                                      }
                                      else{
                                        $reponse = $reponse - $number;
                                      }
                                      break;
                                  
                                  default:
                                      echo "probleme_3";
                                      break;
                              }
                              break;
                          
                          default:
                              echo "probleme";
                              break;
                      }
                  }
                  $id = "calc_$i";
                  $id_rep = "rep_$i";
                  $id_input = "input_$i";
                  $class_qstion = "question_";
                  $paragraphe = "<div class=\"question\"><p id=\"$id\">$calc</p><input id=\"$id_input\" type=\"text\" name=\"$id\"><input class=\"hiddenResult\" type=\"text\" name=\"$id_rep\" value=\"$reponse\"></div>";
                  echo $paragraphe;
              }
            ?>
            <div class="fin">
              <p id="text_fin">Finish!</p>
              <button class="button_submit" id="but_sbmt" type="submit">Check answers</button>
            </div>
          </form>
          <button class="button_next" id="but_next" onclick="makeNextVisible()">next question</button>
        </div> 
      </div>
    </section>
    <section class="footer">
      <?php include 'templates/footer.php'; echo $footer; ?>
    </section>
    <section class="decoration">
      <?php include 'templates/decoration.php'; echo $decoration; ?>          
    </section>
  </main>
</body>
</html>