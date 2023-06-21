<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../script/main.js"></script>
    <title>RESULTS</title>
</head>

<body class="results">
    <input class="hidden" id="false" value="false">
    <div class="reponses">
        <div class="resultsTitle">
            <h1>Voici vos résultats !</h1>
        </div>
        <?php
        $type = $_POST["type"];
        $nbr = $_POST["nbr"];
        $pourcentage = 0;
        for ($i = 1; $i <= $nbr; $i++) {
            $calcul = $_POST["calcul_$i"];
            $rep_user = $_POST["rep_user_$i"];
            $first = $_POST["first_$i"];
            $second = $_POST["second_$i"];
            $third = $_POST["third_$i"];
            switch ($type) {
                case "add":
                    $tot = $first + $second + $third;
                    if ($i == 1) {
                        echo "<div class=\"resultsLeft\">";
                    }
                    if ($i == 6) {
                        echo "</div>";
                        echo "<div class=\"resultsRight\">";
                    }
                    echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                    if ($tot == $rep_user) {
                        echo "correcte" . "</br>";
                        $pourcentage++;
                    } else {
                        echo "incorrecte" . "</br>";
                    }
                    if ($i == $nbr) {
                        $pourcentage = $pourcentage / $nbr * 100;
                        $arrondi = round($pourcentage * 2) / 2;
                        echo "</div>";
                        echo "<div class=\"pourcentage\">" . $arrondi . "% de bonnes réponses.</div>";
                        echo "<input class=\"hidden\" id=\"percent\"name=\"percent\" value=\"$arrondi\">";
                    }
                    break;

                case "sou":
                    $tot = $first - $second - $third;
                    if ($i == 1) {
                        echo "<div class=\"resultsLeft\">";
                    }
                    if ($i == 6) {
                        echo "</div>";
                        echo "<div class=\"resultsRight\">";
                    }
                    echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                    if ($tot == $rep_user) {
                        echo "correcte" . "</br>";
                        $pourcentage++;
                    } else {
                        echo "incorrecte" . "</br>";
                    }
                    if ($i == $nbr) {
                        $pourcentage = $pourcentage / $nbr * 100;
                        $arrondi = round($pourcentage * 2) / 2;
                        echo "</div>";
                        echo "<div class=\"pourcentage\">" . $arrondi . "% de bonnes réponses.</div>";
                        echo "<input class=\"hidden\" id=\"percent\"name=\"percent\" value=\"$arrondi\">";
                    }
                    break;

                case "mul":
                    $tot = $first * $second * $third;
                    if ($i == 1) {
                        echo "<div class=\"resultsLeft\">";
                    }
                    if ($i == 6) {
                        echo "</div>";
                        echo "<div class=\"resultsRight\">";
                    }
                    echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                    if ($tot == $rep_user) {
                        echo "correcte" . "</br>";
                        $pourcentage++;
                    } else {
                        echo "incorrecte" . "</br>";
                    }
                    if ($i == $nbr) {
                        $pourcentage = $pourcentage / $nbr * 100;
                        $arrondi = round($pourcentage * 2) / 2;
                        echo "</div>";
                        echo "<div class=\"pourcentage\">" . $arrondi . "% de bonnes réponses.</div>";
                        echo "<input class=\"hidden\" name=\"percent\" value=\"$arrondi\">" . "rest";
                    }
                    break;

                case "mix":
                    $first_signe = $_POST["first_signe_$i"];
                    $second_signe = $_POST["second_signe_$i"];
                    switch ($first_signe) {
                        case $first_signe == "+" && $second_signe == "+":
                            $tot = $first + $second + $third;
                            $reel_tot = $first + $second + $third;
                            $reel_rep_user = $rep_user;
                            break;

                        case $first_signe == "+" && $second_signe == "-":
                            $tot = $first + $second - $third;
                            $reel_tot = $first + $second - $third;
                            $reel_rep_user = $rep_user;
                            break;

                        case $first_signe == "-" && $second_signe == "+":
                            $tot = $first - $second + $third;
                            $reel_tot = $first - $second + $third;
                            $reel_rep_user = $rep_user;
                            break;

                        case $first_signe == "-" && $second_signe == "-":
                            $tot = $first - $second - $third;
                            $reel_tot = $first - $second - $third;
                            $reel_rep_user = $rep_user;
                            break;

                        case $first_signe == "*" && $second_signe == "+":
                            $tot = $first * $second + $third;
                            $reel_tot = $first * $second + $third;
                            $reel_rep_user = $rep_user;
                            break;

                        case $first_signe == "*" && $second_signe == "-":
                            $tot = $first * $second - $third;
                            $reel_tot = $first * $second - $third;
                            $reel_rep_user = $rep_user;
                            break;

                        case $first_signe == "/" && $second_signe == "+":
                            $num = $first + ($second * $third);
                            $den = $second;
                            $tot = $num . "/" . $den;
                            $reel_tot = $num / $den;
                            $new_rep_user = explode("/", $rep_user);
                            if (count($new_rep_user) == 1) {
                                $reel_rep_user = $new_rep_user[0];
                            } else {
                                $reel_rep_user = $new_rep_user[0] / $new_rep_user[1];
                            }
                            break;

                        case $first_signe == "/" && $second_signe == "-":
                            $num = $first - ($second * $third);
                            $den = $second;
                            $tot = $num . "/" . $den;
                            $reel_tot = $num / $den;
                            $new_rep_user = explode("/", $rep_user);
                            if (count($new_rep_user) == 1) {
                                $reel_rep_user = $new_rep_user[0];
                            } else {
                                $reel_rep_user = $new_rep_user[0] / $new_rep_user[1];
                            }
                            break;

                        default:
                            echo "ERROR IN 'results.php' 1";
                            break;
                    }
                    if ($i == 1) {
                        echo "<div class=\"resultsLeft\">";
                    }
                    if ($i == 6) {
                        echo "</div>";
                        echo "<div class=\"resultsRight\">";
                    }
                    echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                    if ($reel_tot == $reel_rep_user) {
                        echo "correcte" . "</br>";
                        $pourcentage++;
                    } else {
                        echo "incorrecte" . "</br>";
                    }
                    if ($i == $nbr) {
                        $pourcentage = $pourcentage / $nbr * 100;
                        $arrondi = round($pourcentage * 2) / 2;
                        echo "</div>";
                        echo "<div class=\"pourcentage\">" . $arrondi . "% de bonnes réponses.</div>";
                        echo "<input class=\"hidden\" id=\"percent\"name=\"percent\" value=\"$arrondi\">";
                    }
                    break;

                case "div":
                    $fourth = $_POST["fourth_$i"];
                    $div_signe = $_POST["div_signe_$i"];
                    switch ($div_signe) {
                        case "+":
                            $num = ($first * $fourth) + ($second * $third);
                            $den = $second * $fourth;
                            $tot = "$num/$den";
                            $reel_tot = $num / $den;
                            break;

                        case "-":
                            $num = ($first * $fourth) - ($second * $third);
                            $den = $second * $fourth;
                            $tot = "$num/$den";
                            $reel_tot = $num / $den;
                            break;

                        case "*":
                            $num = $first * $third;
                            $den = $second * $fourth;
                            $tot = "$num/$den";
                            $reel_tot = $num / $den;
                            break;

                        default:
                            echo "ERROR IN 'results.php' 2";
                            break;
                    }
                    $new_rep_user = explode("/", $rep_user);
                    if (count($new_rep_user) == 1) {
                        $reel_rep_user = $new_rep_user[0];
                    } else {
                        $reel_rep_user = $new_rep_user[0] / $new_rep_user[1];
                    }
                    if ($i == 1) {
                        echo "<div class=\"resultsLeft\">";
                    }
                    if ($i == 6) {
                        echo "</div>";
                        echo "<div class=\"resultsRight\">";
                    }
                    echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                    if ($reel_tot == $reel_rep_user) {
                        echo "correcte" . "</br>";
                        $pourcentage++;
                    } else {
                        echo "incorrecte" . "</br>";
                    }
                    if ($i == $nbr) {
                        $pourcentage = $pourcentage / $nbr * 100;
                        $arrondi = round($pourcentage * 2) / 2;
                        echo "</div>";
                        echo  "<div class=\"pourcentage\">" . $arrondi . "% de bonnes réponses.</div>";
                    }
                    break;

                default:
                    echo "ERROR IN 'results.php' 3";
                    break;
            }
        }
        ?>
    </div>
</body>

</html>