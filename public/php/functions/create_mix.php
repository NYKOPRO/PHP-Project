<?php
function create_mix(int $nbr, string $type)
{
    $tout = "";
    for ($i = 1; $i <= $nbr; $i++) {
        $calc = "";
        for ($j = 1; $j <= 3; $j++) {
            $number = rand(1, 10);
            switch ($j) {
                case 1:
                    $calc = "$number";
                    $first = $number;
                    break;

                case 2:
                    $signe = rand(0, 3);
                    switch ($signe) {
                        case 0:
                            $calc = "$calc + $number";
                            $second = $number;
                            $first_signe = "+";
                            break;

                        case 1:
                            $calc = "$calc - $number";
                            $second = $number;
                            $first_signe = "-";
                            break;

                        case 2:
                            $calc = "$calc * $number";
                            $second = $number;
                            $first_signe = "*";
                            break;

                        case 3:
                            $calc = "$calc / $number";
                            $second = $number;
                            $first_signe = "/";
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
                            $third = $number;
                            $second_signe = "+";
                            break;

                        case 1:
                            $calc = "$calc - $number";
                            $third = $number;
                            $second_signe = "-";
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
        $id_rep_user = "rep_user_$i";
        $id_input = "input_$i";
        $calcul = "calcul_$i";
        $set_type = "<input class=\"hidden\" type=\"text\" name=\"type\" value=\"$type\">";
        $set_nbr = "<input class=\"hidden\" type=\"text\" name=\"nbr\" value=\"$nbr\">";
        $set_first = "<input class=\"hidden\" type=\"text\" name=\"first_$i\" value=\"$first\">";
        $set_first_signe = "<input class=\"hidden\" type=\"text\" name=\"first_signe_$i\" value=\"$first_signe\">";
        $set_second = "<input class=\"hidden\" type=\"text\" name=\"second_$i\" value=\"$second\">";
        $set_second_signe = "<input class=\"hidden\" type=\"text\" name=\"second_signe_$i\" value=\"$second_signe\">";
        $set_third = "<input class=\"hidden\" type=\"text\" name=\"third_$i\" value=\"$third\">";
        $paragraphe =
            "<div class=\"question\"><p id=\"$id\">$calc</p>
            <input id=\"$id_input\" type=\"text\" name=\"$id_rep_user\">
            <input class=\"hidden\" type=\"text\" name=\"$calcul\" value=\"$calc\">"
            . $set_first . $set_first_signe . $set_second . $set_second_signe . $set_third . "</div>";
        $tout = $tout . $paragraphe;
        if ($i == $nbr) {
            return ($tout . $set_type . $set_nbr);
        }
    }
}
