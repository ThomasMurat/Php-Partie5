<?php 
    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie5-exo8</title>
    </head>
    <body>
        <?php 
            for ($index = 0; $index < 11; $index++) {
                ?><p><?=  $months[$index] ?></p><?php 
            }
        ?>
    </body>
</html>