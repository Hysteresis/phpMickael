<!-- Fonction TVA TTC -->

<?php

$prix_ht = 100;
$tva = 20 ;
$prix_ttc = 0 ;

function calculTtc($prixHt,$tva){
    return ($prixHt * $tva/100) + $prixHt;
}

$prix_ttc= calculTtc($prix_ht,$tva);

// afficher le prix TTC
echo "Prix TTC = " . $prix_ttc . "€"; 
echo '<br>';
echo '<br>';

echo '<br>';

echo '<br>';


?>

<!-- Codes postaux  Haute loire-->
<?php
echo "<label for='codePostal'>Choisir un code postal</label>";
// Boucle while code postal
?>
<select name='' id='codePostal'>
    <option value="">--Choisir un code postal--</option>
    <?php
        $i = 43000;
        while ($i<44000){
    
        echo '<option value=' . $i .'>' . $i . '</option>' ;
        $i++;
}

?>


</select>

<br>
<!-- tableau associatif -->
<?php
$pays = ['france' => 'Paris', 'angleterre' => 'London', 'Allemagne' => 'Munich'];

foreach ($pays as $key => $value){
    echo  ucfirst($key) . ' => ' . $value . '<br>';

}

?>

<!-- afficher lage de MAnuel -->

<?php

    $personnes = array(
        'Jean' => 16,
        'Manuel' => 19,
        'Marcel' => 20, 
        );


echo array_keys($personnes)[1]. ' a ' .  $personnes['Manuel'] . ' ans' ;


?>

<br>
<br>
<br>
<br>

<!-- date/heure -->

<?php

function afficherDate(){
    echo date('d-m-y') . '  '. date('h:i:s');
}

afficherDate();



?>

<br>
<br>
<br>
<br>
<br>

<!-- saisir des notes -->

<table>
    <caption>Carnet de notes</caption>
    <tr>
        <th scope="col">nom</th>
        <th scope="col">note</th>

    <?php
    $carnet_notes = [
        'fred' => 12,
        'nath' => 10,
        'pierrot' => 8
    ];

foreach($carnet_notes as $key => $value){
    
    echo "<tr> ";
    echo "<td> ".  $key . "</td>";
    echo "<td>". $value . "</td>";
    echo "</tr> ";

    
}

?>
        
    </tr>
    
   
</table>



<!-- Valeur Max -->

<?php

    $joueurs = [
        ['nom' => 'Platini', 'score' =>'100'],
        ['nom' => 'Maldini', 'score' =>'180'],
        ['nom' => 'Zidane', 'score' =>'150'],
        ['nom' => 'Pierrot', 'score' =>'200'],
        ['nom' => 'neymar', 'score' =>'110'],


    ];

    function meilleurJoueur($_joueurs){
        $test = 0;
        $meilleurJoueur = '';
        foreach($_joueurs as $joueur){
            
            if ( $joueur['score'] > $test){
                $test = $joueur['score'];
                $meilleurJoueur = $joueur['nom'];
            }
        }
        echo "<br>le meilleur joueur est " . $meilleurJoueur . ". Son score est :" . $test;       
        
    }

  $resultat =  meilleurJoueur($joueurs);

echo  $resultat;
?>
