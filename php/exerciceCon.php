<?php
include('../inclusion/header.page.inc.php');

//EXERCICE Conditions
//Exercice 1
//Créer une variable age et l'initialiser avec une valeur.
//Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
echo '<h1>Exercice sur les Conditions</h1>';
echo '<section><h2>Exercice 1</h2>';

$age = 27;

if ($age >= 18) {
    echo "Vous êtes Majeur.";
} else {
    echo "Vous êtes mineur !";
}

echo '</section>';

//Exercice 2
//Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
//Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
//Bonus : L'écrire de deux manières différentes.
echo '<section><h2>Exercice 2</h2>';

$isEasy = true;

if ($isEasy == true) {
    echo "C'est facile!!";
} else {
    echo "C'est difficile !!!";
}

echo '</section>';

//Exercice 3
//Créer deux variables age et gender. La variable gender peut prendre comme valeur :
//Homme
//Femme
//En fonction de l'âge et du genre afficher la phrase correspondante :
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.
echo '<section><h2>Exercice 3</h2>';

$age = 16;
$gender = "Femme";

if ($gender == "Homme" && $age >= 18) {
    echo "Vous êtes un homme et vous êtes majeur";
} elseif ($gender == "Homme" && $age < 18) {
    echo "Vous êtes un homme et vous êtes mineur";
} elseif ($gender == "Femme" && $age >= 18){
    echo "Vous êtes une femme et vous êtes majeur";
} else {
    echo "Vous êtes une femme et vous êtes mineur";
}

echo '</section>';

//Exercice 4
//L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
//Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
//Gérer tous les cas.
//Utilser autre chose que des if else

echo '<section><h2>Exercice 4</h2>';

$magnitude = 4;

switch ($magnitude) {
    case 1:
        echo 'Micro-séisme impossible à ressentir.';
    break;

    case 2:
        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
    break;

    case 3:
        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
    break;

    case 4:
        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;

    case 5:
        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;

    case 6:
        echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
    break;

    case 7:
        echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
    break;

    case 8:
        echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
    break;

    case 9:
        echo 'Séisme capable de tout détruire sur une très vaste zone.';
    break;
}

echo '</section>';

//Exercice 5
//Traduire ce code avec des if et des else :
//<?php
//echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
echo '<section><h2>Exercice 5</h2>';

$gender = "Femme";
if ($gender != "Homme") {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
};

echo '</section>';

//Exercice 6
//Traduire ce code avec des if et des else :
//<?php
//echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
echo '<section><h2>Exercice 6</h2>';

$age = 16;
if ($age >= 18) {
    echo 'Tu es majeur';
} else {
    echo 'Tu n\'es pas majeur';
};

echo '</section>';

//Exercice 7
//Traduire ce code avec des if et des else :
//<?php
//echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
echo '<section><h2>Exercice 7</h2>';

$isOk = false;
if ($isOk == false) {
    echo 'c\'est pas bon !!!';
} else {
    echo 'c\'est ok !!';
};

echo '</section>';

//Exercice 8
//Traduire ce code avec des if et des else :
//<?php
//echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
echo '<section><h2>Exercice 8</h2>';

$isOk = true;
if ($isOk) {
    echo 'c\'est ok !!';
} else {
    echo 'c\'est pas bon !!!';
};

echo '</section>';