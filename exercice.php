<?php

$tableaux = [27 , 15 , 34 , 379 , 248 , 5643 , 81 , 211 , 999 , 142 , 300 , 572];

?>

<ul>
        <?php
foreach ($tableaux as $tableau) {

?>
        <li>
            <?php if ($tableau % 2 == 0) { echo "$tableau est pair"; } else { echo "$tableau est impaire"; } ?>
            

        </li>
        <?php } ?>
    </ul>
