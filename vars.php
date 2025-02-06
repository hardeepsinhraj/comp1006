<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
    // try some numeric vars. alwars start with $
    $x = 20;
    $y = 10;
    $z = $x + $y;
    echo $z. '<br />';

    //php is loosely typed. var types are implied but changeable
    $y = 'abc';
    //$z = $x + $y;
    //echo $z; commeting this so our page don't crased

    // try string vars using. fo concatenation
    $first = 'Rlph';
    $last = 'Fuber';
    echo $first. '' . $last;

    echo "<h1>$first</h1>";
    echo '<h1>$first</h1>';
    ?>
</body>
</html>