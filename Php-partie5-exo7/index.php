<?php 
    $departementHF = array( 60 => 'Oise',
                            02 => 'Aisne',
                            59 => 'Nord',
                            62 => 'Pas-De-Calais',
                            80 => 'Somme',
    );
    $departementHF[51] = 'Marne';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie5-exo7</title>
    </head>
    <body>
        <p><?= $departementHF[51] ?></p>
    </body>
</html>