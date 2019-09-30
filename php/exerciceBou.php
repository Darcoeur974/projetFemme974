<?php
include('../inclusion/header.page.inc.php');

//Exercice 1
//Créer une variable et l'initialiser à 0.
//Tant que cette variable n'atteint pas 10, il faut :
//l'afficher
//l'incrementer
echo '<h1>Exercice sur les Boucles</h1>';
echo '<section><h2>Exercice 1</h2>';

$variable = 0;
while ($variable < 10) {
    echo $variable . '<br />';
    $variable++;
}

echo '</section>';

//Exercice 2
//Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
//Tant que la première variable n'est pas supérieure à 20 :
//multiplier la première variable avec la deuxième
//afficher le résultat
//incrementer la première variable
echo '<section><h2>Exercice 2</h2>';

$premiereVariable = 0;
$secondeVariable = 50;
while ($premiereVariable <= 20) {
    echo 'variable 1 : ' . $premiereVariable . '<br />';
    echo 'calcul : ' . $premiereVariable * $secondeVariable . '<br />';
    $premiereVariable++;
}

echo '</section>';

//Exercice 3
//Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
//Tant que la première variable n'est pas inférieure ou égale à 10 :
//multiplier la première variable avec la deuxième
//afficher le résultat
//décrémenter la première variable
echo '<section><h2>Exercice 3</h2>';

$premiereVariable = 100;
$secondeVariable = 50;
while ($premiereVariable >= 10) {
    echo 'variable 1 : ' . $premiereVariable . '<br />';
    echo 'calcul : ' . $premiereVariable * $secondeVariable . '<br />';
    $premiereVariable--;
}

echo '</section>';

//Exercice 4
//Créer une variable et l'initialiser à 1.
//Tant que cette variable n'atteint pas 10, il faut :
//l'afficher
//l'incrementer de la moitié de sa valeur
echo '<section><h2>Exercice 4</h2>';

$variable = 1;
while ($variable <= 10) {
    echo 'variable : ' . $variable . '<br />';
    $variable = $variable + ($variable/2);
}

echo '</section>';

//Exercice 5
//En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
echo '<section><h2>Exercice 5</h2>';

$variable = 1;
while ($variable <= 15) {
    $variable++;
    if ($variable <= 15) {
        echo 'On y arrive presque! <br />';
    }
}

echo '</section>';

//Exercice 6
//En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
echo '<section><h2>Exercice 6</h2>';

$variable = 20;
while ($variable > 0) {
    $variable--;
    if ($variable > 0) {
        echo 'C\'est presque bon <br />';
    }
}

echo '</section>';

//Exercice 7
//En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
echo '<section><h2>Exercice 7</h2>';

$variable = 1;
while ($variable < 100) {
    $variable+=15;
    if ($variable < 100) {
        echo 'On tient le bon bout <br />';
    }
}

echo '</section>';

//Exercice 8
//En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
echo '<section><h2>Exercice 8</h2>';

$variable = 200;
while ($variable > 0) {
    $variable-=12;
    if ($variable > 0) {
        echo 'Enfin !!!! <br />';
    }
}

echo '</section>';