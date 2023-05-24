<?php
function test(string $string)
{
    $retour = explode("/", $string);
    print_r($retour);
    echo  "'" . $retour[0] . "' : '" . $retour[1] . "'";
    echo $retour[0] / $retour[1];
}

test(" 23    /   6    ");
