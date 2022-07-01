<?php
include './includes/header.php';
include './includes/fonctions.php';
?>
<main>
    <?php
$tableau = array();
$tableau = [];
$tableau = [true,45,'Terre',[45,46,47]];

debug($tableau);

$tableau[] = 'Janvier'; 


array_push($tableau, 'voiture');
array_push($tableau, 'voiture 2','Tortue' );
debug($tableau[2]);


echo count($tableau);
echo "<hr>";

// calcule moyenne
$notes = [12,5,16,7];
$nbElementNotes = count($notes);
$sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
$moyenneNotes = $sommeNotes / $nbElementNotes;

echo $moyenneNotes;

echo "<hr>";

// permet de fusionner les tableau
$tab2 = array_merge($tableau, $notes);
debug($tab2);
echo "<hr>";

// parcourir un tableau
for( $k = 0; $k < count($notes) ; $k++ ) {
    echo $notes[$k] . ", ";
}

echo "<hr>";

for( $k = 0; $k < count($notes) ; $k++ ) {
     $moyenneNotes = $sommeNotes / $nbElementNotes;
    echo $moyenneNotes;
}
echo "<hr>";

$totalNote = 0;
for ($j = 0; $j < count($notes) ; $j++ ) {
    // $totalNote += $notes[$j];
    $totalNote = $totalNote + $notes[$j];
}
$moyNotes = $totalNote / count($notes);
echo $moyNotes;

echo "<hr>";

foreach ($notes as $note) {
    echo $note . "<br>";
}

////////////////////////////////
// Tableau Associatif
////////////////////////////////

$fruits = ['banane' => 'jaune' , 'pomme' => 'rouge' , 'kiwi' => 'vert'];

debug($fruits);

echo 'la couleur de la pomme est ' .$fruits['pomme'];
echo "<hr>";

echo 'La longueur du tableau $fruits est de : ' .sizeof($fruits);

echo "<hr>";

$ages = [
    'Michel' => 34,
    'Lucie' => 12,
    'Lucie' => 24,
    'Jean' => 56
];
$chaine = implode('-',$ages);
echo $chaine;

$age2 = explode('-',$chaine);
debug($age2);

$ages ['paul'] =33;
$ages ['lucie'] = 02;
debug($ages);


foreach($ages as $key => $value){
    echo $key . ' a ' . $value . ' ans<br>';
}

$html = '<ul>';
foreach($ages as $key => $value){
    // $html .= '<li>' . $key . ' a ' .$value. ' ans</li>';
    $html .= "<li> $key a $value ans</li>";
}
$html .= '</ul>';
echo $html;

$planetes = [ 'mars', 'terre', 'pluton', 'venus', 'jupiter'];

asort($planetes);
asort($ages);

debug($planetes);
debug($ages);

$tab = [
    'voiture' => 'ford',
    'nombre' => [1, 2, 3, 4],
    'planete' => ['mars', 'terre']
];

debug($tab['nombre'][0]);

echo "<hr>";

$tab3 = [];
$tab3[] = ['A' , 'B' , 'C'];
$tab3[] = ['S' , 'U' , 'V'];
$tab3[] = ['O' , 'U' , 'E' , 'I'];


    debug($tab3[2][2].$tab3[1][0].$tab3[0][2].$tab3[0][2].$tab3[2][3]); 

    $produits = [
        ['nom' => 'chausette' , 'prix' => '10'],
        ['nom' => 'velo' , 'prix' => '500'],
        ['nom' => 'carotte', 'prix' => ' 2'],
        ['nom' => 'boulon', 'prix' =>'9'],
    ];


?>

    <ul>
        <?php
foreach ($produits as $produit) {

?>
        <li>
            <?php echo $produit['nom'] . ' : ' . $produit['prix'] . ' € ';?>
            
            <?=$produit['nom']?> : <?=$produit['prix']?> €
        </li>
        <?php } ?>
    </ul>

<?php

$peoples = [
    [
        'nom' => 'Pierre',
        'prenom' => 'Jean',
        'email' => 'pije@gmail.com'
    ],
    [
        'nom' => 'Lucie',
        'prenom' => 'Dupont',
        'email' => 'ludu@gmail.com'
    ]
    ];

//     echo "Le nom de Lucie est" . $peoples[1] ['nom'];
// debug($peoples);

// $json_peoples = json_encode($peoples);

// debug($json_peoples);

$json_peoples = '[{
    "nom" : "Durand",
    "prenom" : "Jean",
    "age" : "20",
    "couleur" : ["rouge", "vert", "jaune"],
    "image" :  "https://ximg.es/64x64/000/fff"

},{
    "nom" : "Vilko",
    "prenom" : "Anny",
    "age" : "45",
    "couleur" : ["marron", "noir", "violet"],
    "image" :  "https://ximg.es/64x64/000/fff"
}]';


debug($json_peoples);

$peoples_array_php = json_decode($json_peoples);

debug($peoples_array_php);

// echo '<img src="' . $peoples_array_php[1]['image'] . '" alt="Anny">'; 
?>
<img src="<?=$peoples_array_php[1]['image']?>"alt="<?=$peoples_array_php[1]['prenom']?>">; 



</main>
<?php
include './includes/footer.php';