<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../script/script.js"></script>
    <title>RESULTS</title>
</head>

<body class="results">
    <h1>There are your results!</h1>
    <?php
    $type = $_POST["type"];
    $nbr = $_POST["nbr"];
    $pourcentage = 0;
    for ($i = 1; $i <= $nbr; $i++) {
        $calcul = $_POST["calcul_$i"];
        $rep_user = $_POST["rep_user_$i"];
        $rep = "rep_$i";
        $string = "1 + 2 + 3";
        $first = $_POST["first_$i"];
        $second = $_POST["second_$i"];
        $third = $_POST["third_$i"];
        switch ($type) {
            case "add":
                $tot = $first + $second + $third;
                echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                if ($tot == $rep_user) {
                    echo "juste (=" . "</br>";
                    $pourcentage++;
                } else {
                    echo "faux )=" . "</br>";
                }
                if ($i == $nbr) {
                    $pourcentage = $pourcentage / $nbr * 100;
                    $arrondi = round($pourcentage * 2) / 2;
                    echo $arrondi . "% de bonne réponse.";
                }
                break;

            case "sou":
                $tot = $first - $second - $third;
                echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                if ($tot == $rep_user) {
                    echo "juste (=" . "</br>";
                    $pourcentage++;
                } else {
                    echo "faux )=" . "</br>";
                }
                if ($i == $nbr) {
                    $pourcentage = $pourcentage / $nbr * 100;
                    $arrondi = round($pourcentage * 2) / 2;
                    echo $arrondi . "% de bonne réponse.";
                }
                break;

            case "mul":
                $tot = $first * $second * $third;
                echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                if ($tot == $rep_user) {
                    echo "juste (=" . "</br>";
                    $pourcentage++;
                } else {
                    echo "faux )=" . "</br>";
                }
                if ($i == $nbr) {
                    $pourcentage = $pourcentage / $nbr * 100;
                    $arrondi = round($pourcentage * 2) / 2;
                    echo $arrondi . "% de bonne réponse.";
                }
                break;

            case "mix":
                $first_signe = $_POST["first_signe_$i"];
                $second_signe = $_POST["second_signe_$i"];
                switch ($first_signe) {
                    case $first_signe == "+" && $second_signe == "+":
                        $tot = $first + $second + $third;
                        $reel_tot = $first + $second + $third;
                        break;

                    case $first_signe == "+" && $second_signe == "-":
                        $tot = $first + $second - $third;
                        $reel_tot = $first + $second - $third;
                        break;

                    case $first_signe == "-" && $second_signe == "+":
                        $tot = $first - $second + $third;
                        $reel_tot = $first - $second + $third;
                        break;

                    case $first_signe == "-" && $second_signe == "-":
                        $tot = $first - $second - $third;
                        $reel_tot = $first - $second - $third;
                        break;

                    case $first_signe == "*" && $second_signe == "+":
                        $tot = $first * $second + $third;
                        $reel_tot = $first * $second + $third;
                        break;

                    case $first_signe == "*" && $second_signe == "-":
                        $tot = $first * $second - $third;
                        $reel_tot = $first * $second - $third;
                        break;

                    case $first_signe == "/" && $second_signe == "+":
                        $num = $first + ($second * $third);
                        $den = $second;
                        $tot = $num . "/" . $den;
                        $reel_tot = $num / $den;
                        break;

                    case $first_signe == "/" && $second_signe == "-":
                        $num = $first - ($second * $third);
                        $den = $second;
                        $tot = $num . "/" . $den;
                        $reel_tot = $num / $den;
                        break;

                    default:
                        echo "ERROR IN 'results.php' 1";
                        break;
                }
                echo $calcul . " = " . $tot . "</br>" . "votre réponse : " . $rep_user . "</br>";
                if ($reel_tot == $rep_user) {
                    echo "juste (=" . "</br>";
                    $pourcentage++;
                } else {
                    echo "faux )=" . "</br>";
                }
                if ($i == $nbr) {
                    $pourcentage = $pourcentage / $nbr * 100;
                    $arrondi = round($pourcentage * 2) / 2;
                    echo $arrondi . "% de bonne réponse.";
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
                        break;

                    case "-":
                        $num = ($first * $fourth) - ($second * $third);
                        $den = $second * $fourth;
                        $tot = "$num/$den";
                        break;

                    case "*":
                        $num = $first * $third;
                        $den = $second * $fourth;
                        $tot = "$num/$den";
                        break;

                    default:
                        echo "ERROR IN 'results.php' 2";
                        break;
                }
                echo $first . " : " . $second . " " . $div_signe . " " . $third . " : " . $fourth . " = " . $tot . " : " . $type . "</br>";
                // echo $_POST[$calcul] . " = " . $_POST[$rep] . " -> votre réponse : " . $_POST[$rep_user] . "</br>";
                break;

            default:
                echo "ERROR IN 'results.php' 3";
                break;
        }
    }
    ?>
</body>

</html>