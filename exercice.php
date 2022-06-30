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

    <?php

    $users = [
        "firstname" => "Mike",
        "lastname" => "Olganh",
        "pseudo" => "",
        "age" => 34,
        "food" => "",
        "sport" => "",

    ];
     
    function utilisateurs($i){
        foreach($i as $key => $value){
            if($value == NULL){
                echo "<li>$key : Aucun resultat </li>";
            }else{
                echo "<li> $key : $value </li>";
            }
        
        }
    }
    utilisateurs($users);