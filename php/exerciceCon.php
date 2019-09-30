<?php

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
echo '<section><h2>Exercice 1</h2>';

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
echo '<section><h2>Exercice 1</h2>';

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