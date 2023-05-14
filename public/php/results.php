<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTS</title>
</head>
    <body>
        <h1>There are your results!</h1>
        <?php
            for($i = 1; $i <= 10; $i++){
                $calc = "calc_$i";
                $rep = "rep_$i";
                echo $_POST[$calc] . $_POST[$rep] . "</br>";
            }
            ?>
    </body>
</html>