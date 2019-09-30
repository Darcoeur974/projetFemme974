<?php
echo 
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>';

//Exercice 1
//Faire une fonction qui retourne true.
echo '<h1>Exercice sur les Fonctions</h1>';
echo '<section><h2>Exercice 1</h2>';

$variable_bool = false;
function VerificationVariable($argument) {
    if($argument === true OR $argument === false) {
        echo 'Oui, c\'est un booleen.';
    } else {
        echo 'Non, ce n\'est pas un booléen.';
    };
};
echo ' <br />';
VerificationVariable($variable_bool);

echo '</section>';

//Exercice 2
//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
echo '<section><h2>Exercice 2</h2>';

$variable_string = '"une chaine de caractere';
funtion VerificationString($argument) {
    
}

echo '</section>';