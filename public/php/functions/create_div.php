<?php
function create_div(int $nbr, string $type)
{
    $tout = "";
    for ($i = 1; $i <= $nbr; $i++) {
        $calc = "";
        for ($j = 1; $j <= 4; $j++) {
            $number = rand(1, 10);
            switch ($j) {
                case 1:
                    $calc = "$number";
                    $first = $number;
                    break;

                case 2:
                    $calc = "$calc / $number";
                    $second = $number;
                    break;

                case 3:
                    $signe = rand(0, 2);
                    switch ($signe) {
                        case 0:
                            $calc = "$calc + $number";
                            $third = $number;
                            $div_signe = "+";
                            break;

                        case 1:
                            $calc = "$calc - $number";
                            $third = $number;
                            $div_signe = "-";
                            break;

                        case 2:
                            $calc = "$calc * $number";
                            $third = $number;
                            $div_signe = "*";
                            break;

                        default:
                            echo "ERROR IN 'create_div.php'";
                            break;
                    }
                    break;


                case 4:
                    $calc = "$calc / $number";
                    $fourth = $number;
                    break;

                default:
                    echo "ERROR IN 'create_div.php'";
                    break;
            }
        }
        $id = "calc_$i";
        $id_rep_user = "rep_user_$i";
        $id_input = "input_$i";
        $calcul = "calcul_$i";
        $set_type = "<input class=\"hidden\" type=\"text\" name=\"type\" value=\"$type\">";
        $set_nbr = "<input class=\"hidden\" type=\"text\" name=\"nbr\" value=\"$nbr\">";
        $set_first = "<input class=\"hidden\" type=\"text\" name=\"first_$i\" value=\"$first\">";
        $set_second = "<input class=\"hidden\" type=\"text\" name=\"second_$i\" value=\"$second\">";
        $set_third = "<input class=\"hidden\" type=\"text\" name=\"third_$i\" value=\"$third\">";
        $set_fourth = "<input class=\"hidden\" type=\"text\" name=\"fourth_$i\" value=\"$fourth\">";
        $set_div_signe = "<input class=\"hidden\" type=\"text\" name=\"div_signe_$i\" value=\"$div_signe\">";
        $paragraphe =
            "<div class=\"question\"><p id=\"$id\">$calc</p>
            <input id=\"$id_input\" type=\"text\" name=\"$id_rep_user\">
            <input class=\"hidden\" type=\"text\" name=\"$calcul\" value=\"$calc\">"
            . $set_first . $set_second . $set_third . $set_fourth . $set_div_signe . "</div>";
        $tout = $tout . $paragraphe;
        if ($i == $nbr) {
            return ($tout . $set_type . $set_nbr);
        }
    }
}
