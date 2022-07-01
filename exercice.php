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
    $tabUtilisateur= json_decode($userss,true);

    // dump($tabusers);
    
    // print_r( $tabusers["results"]);
    echo "<hr>";


    $resultats=  $tabUtilisateur["results"];
    ?>
    <div class="container">
<?php

foreach( $resultats as $resultat){ 

    echo"<div class='users'>".

    "<img src= ".$resultat["picture"]["large"].">".
    
    "<p>"."Nom : " . $resultat["name"]["last"] ."</p>".
    "<p>"."Prenom : " .$resultat["name"]["first"]."</p>".
    
    "<p>"."Mail : ".$resultat["email"]."</p>".
    "<p>"."Age : ".$resultat["dob"]["age"]."</p>".
    "<p>"."Ville : " .$resultat["location"]["city"]."</p>".
    "<p>"."Tel : ".$resultat["phone"]."</p>".
    

"</div>";
};

?>
    </div>

    <style>
        .container {
            margin-top: 15px;
            display: flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    gap: 20px;
        }
    </style>
    