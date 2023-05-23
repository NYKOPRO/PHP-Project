<?php
function test(string $string)
{
    $retour = explode("/", $string);
    echo $retour;
}

test("23/6");
