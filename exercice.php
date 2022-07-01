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

    $nombres = [ 4 , 15 , 2 , 145 , 42 , 5 , 75 , 12 ];
    $nbr= $nombres[0];
    foreach ($nombres as $nombre) {
        if ($nombre > $nbr) {
            $nbr = $nombre;
        }
        echo"[$nombre] , ";
    }
    echo("valeur la plus grande : $nbr");
    // echo max($nombres);

    echo "<hr>";


    $userss = file_get_contents("./data/users.json");

    echo($userss);

    