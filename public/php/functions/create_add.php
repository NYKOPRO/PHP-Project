<?php
function create_add(int $nbr) {
    for($i = 1; $i <= $nbr; $i++){
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
                    $calc = "$calc + $number";
                    $reponse = $reponse + $number;
                    break;

                case 3:
                    $calc = "$calc + $number";
                    $reponse = $reponse + $number;
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
}
?>