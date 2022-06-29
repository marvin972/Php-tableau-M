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
?>
</main>
<?php
include './includes/footer.php';
