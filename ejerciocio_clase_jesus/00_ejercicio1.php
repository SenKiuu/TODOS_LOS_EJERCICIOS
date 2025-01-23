<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $capitales['España'] = "Madrid";
    $capitales['Francia'] = "Paris";
    $capitales['Italia'] = "Roma";
    // print_r ($capitales);


    $capitales = array('España'=>'Madrid', 'Francia'=>'Paris', 'Italia'=>'Roma');

    $capitales2 = array( 'Francia'=>'Paris', 'España'=>'Madrid', 'Italia'=>'Roma');

    if ( $capitales == $capitales2)
    {
    echo "Son iguales\n";
    }
    if ($capitales === $capitales2)
    {
    echo "Son idénticos\n";
    }
    if ( $capitales != $capitales2)
    {
    echo "Son diferentes\n";
    }
    if ($capitales !== $capitales2)
    {
    echo "No son idénticos\n";
    }
    ?>
</body>
</html>