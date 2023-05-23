<?php
include 'functions/create_add.php';
include 'functions/create_sou.php';
include 'functions/create_mul.php';
include 'functions/create_div.php';
include 'functions/create_mix.php';
function calc(int $nbr, string $type)
{
  switch ($type) {
    case $type == "add":
      $test = create_add($nbr, $type);
      break;

    case $type == "sou":
      $test = create_sou($nbr, $type);
      break;

    case $type == "mul":
      $test = create_mul($nbr, $type);
      break;

    case $type == "div":
      $test = create_div($nbr, $type);
      break;

    case $type == "mix":
      $test = create_mix($nbr, $type);
      break;

    default:
      $test = "ERROR";
      break;
  }
  $calc = '
  <div class="main_calc">
    <div class="actual" id="actual">
      <p>Pour commencer à calculer appuyez sur ce  <button class="button_reveal" onclick="makeVisible()">bouton</button></p>
    </div>
    <div class="principal" id="principal">
      <form action="../php/results.php" method="post">
        <div class="calc">
        <!-- On importe les "inputes" depuis un autre fichier pour que ça prenne moins de place -->' .
    $test . '
        </div>
        <div class="fin">
          <p class="text_fin" id="text_fin">Fini !</p>
          <button class="button_submit" id="but_sbmt" type="submit">Réponses</button>
        </div>
      </form>
      <button class="button_next" id="but_next" onclick="makeNextVisible()">suivant</button>
    </div> 
  </div>';
  return ($calc);
}
