<?php
include('../inclusion/header.page.inc.php');

//EXERCICE VARIABLE
//Exercice 1
//Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.
echo '<h1>Exercice sur les Variables</h1>';
echo '<section><h2>Exercice 1</h2>';

$name = "Morgan";
echo 'Variable php $name : ' . $name;

echo '</section>';

//Exercice 2
//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.
echo '<section><h2>Exercice 2</h2>';

$lastname = "O'CONNOR";
$firstname = "Morgan";
$age = "27";
echo 'je suis ' . $lastname . ', ' . $firstname . ' ' . $lastname . ' . j\'ai ' . $age . ' ans.';

echo '</section>';

//Exercice 3
//Créer une variable km. L'initialiser à 1. Afficher son contenu.
//Changer sa valeur par 3. Afficher son contenu.
//Changer sa valeur par 125. Afficher son contenu.
echo '<section><h2>Exercice 3</h2>';

$km = 1;
echo 'nombre de KM : ' . $km . '<br />';
$km = 3;
echo 'Nombre de KM : ' . $km . '<br />';
$km = 125;
echo 'Nombre de KM : ' . $km . '<br />';

echo '</section>';

//exercice 4
//Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
//Les afficher.
echo '<section><h2>Exercice 4</h2>';

$string = "bonjour le C9P";
$float = 3.14;
$boolean = true;
echo $string . ", avec un float egale à " . $float . ", je crois que c'est " . $boolean;

echo '</section>';

//exercie 5
//Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
//Donner une valeur à cette variable et l'afficher.

echo '<section><h2>Exercice 5</h2>';

$int = NULL;
echo $int;
$int = 55;
echo $int;

echo '</section>';

//exercice 6
//Créer une variable name et l'initialiser avec la valeur de votre choix.
//Afficher : "Bonjour" + name + ", comment vas tu ?".

echo '<section><h2>Exercice 6</h2>';

$prenom = "Matthieu";
echo 'Bonjour ' . $prenom . ', comment vas tu ?';

echo '</section>';

//exercice 7
//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
//Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".

echo '<section><h2>Exercice 7</h2>';

$prenom_exo7 = "Élise";
$nom_exo7 = "DuVal";
$age_exo7 = 16;
echo 'Bonjour ' . $prenom_exo7 . ' ' . $nom_exo7 . ', tu as '. $age_exo7 . ' ans.';

echo '</section>';

//exercice 8
//Créer 3 variables.
//Dans la première mettre le résultat de l'opération 3 + 4.
//Dans la deuxième mettre le résultat de l'opération 5 * 20.
//Dans la troisième mettre le résultat de l'opération 45 / 5.
//Afficher le contenu des variables.
echo '<section><h2>Exercice 8</h2>';

$math_1 = 3 + 4;
$math_2 = 5 * 20;
$math_3 = 45 / 5;
echo '3 + 4 = ' . $math_1 . '<br />';
echo '5 * 20 = ' . $math_2 . '<br />';
echo ' 45 / 5 = ' . $math_3 . '<br />';

echo '</section>';