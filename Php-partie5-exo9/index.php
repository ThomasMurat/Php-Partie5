<?php 
    $departementHF = array( 60 => 'Oise',
                            02 => 'Aisne',
                            59 => 'Nord',
                            62 => 'Pas-De-Calais',
                            80 => 'Somme',
    );
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie5-exo9</title>
    </head>
    <body>
        <?php 
            foreach ($departementHF as $index => $value) {
                ?><p><?=  $departementHF[$index] ?></p><?php 
            }
        ?>
    </body>
</html>