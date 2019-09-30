<?php
include('../inclusion/header.page.inc.php');

//Exercice 1
//Faire une fonction qui retourne true.
echo '<h1>Exercice sur les Fonctions</h1>';
echo '<section><h2>Exercice 1</h2>';

$variable_bool = true;
function VerificationBool($argument) {
    if($argument === true OR $argument === false) {
        echo 'Oui, c\'est un booleen';
    } else {
        echo 'Non, ce n\'est pas un booléen.';
    };
};
VerificationBool($variable_bool);

echo '</section>';

//Exercice 2
//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
echo '<section><h2>Exercice 2</h2>';

$variable_string = "Une chaîne de caractere";

function VerificationString($argument) {
    if (is_string($argument) === true) {
        echo 'C\'est une chaîne de caractere';
    } else {
        echo 'Ce n\'est pas une chaîne de caractere';
    };
};
VerificationString($variable_string);

echo '</section>';

//Exercice 3
//Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines
echo '<section><h2>Exercice 3</h2>';

$variable_texte_un = "Je suis la chaîne UN!";
$variable_texte_deux = "Je suis la chaîne DEUX!";

function Concatenation($argUn, $argDeux) {
    echo $argUn;
    echo ' ';
    echo $argDeux;
};

Concatenation($variable_texte_un, $variable_texte_deux);

echo '</section>';

//Exercice 4
//Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
//Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//Les deux nombres sont identiques si les deux nombres sont égaux
echo '<section><h2>Exercice 4</h2>';

$nombre_un = 170;
$nombre_deux = 150;

function Comparateur($argUn, $argDeux){
    if ($argUn > $argDeux) {
        echo 'Le premier nombre est plus grand';
    } elseif ($argDeux > $argUn) {
        echo 'Le premier nombre est plus petit';
    } else {
        echo 'Les deux nombres sont identiques';
    }
};
Comparateur($nombre_un, $nombre_deux);

echo '</section>';

//Exercice 5
//Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
echo '<section><h2>Exercice 5</h2>';

$nombre = 1992;
$chaine = " Une splendide Époque!";
function assemblage($nbr, $string) {
    echo $nbr;
    echo ' ';
    echo $string;
};
function Verificateur($nbr, $string) {
    if (is_int($nbr) AND is_string($string)) {
        assemblage($nbr, $string);
    } elseif (is_int($nbr) AND is_string($string) === false) {
        echo 'Probleme sur la chaîne de caractere!';
    } elseif (is_int($nbr) === false AND is_string($string)) {
        echo 'Probleme sur le nombre!';
    } else {
        echo '... c\'est la merde!';
    }
};
Verificateur($nombre, $chaine);

echo '</section>';

//Exercice 6
//Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
//"Bonjour" + nom + prénom + ",tu as" + age + "ans".
echo '<section><h2>Exercice 6</h2>';

$nom_mamie = "BALADA";
$prenom_mamie = "Giséle";
$age_mamie = 80;

function Politesse($nom, $prenom, $age) {
    echo 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . ' ans.';
}
Politesse($nom_mamie, $prenom_mamie, $age_mamie);

echo '</section>';

//Exercice 7
//Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
//Homme
//Femme
//La fonction doit renvoyer en fonction des paramètres :
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.
echo '<section><h2>Exercice 7</h2>';

$age_participant = 16;
$genre_participant = 'Femme';

function Identification($age, $genre) {
    if ($genre == "Homme" AND $age >= 18) {
        echo 'Vous êtes un homme et vous êtes majeur';
    } elseif ($genre == "Homme" AND $age < 18) {
        echo 'Vous êtes un homme et vous êtes mineur';
    } elseif ($genre == "Femme" AND $age >= 18) {
        echo 'Vous êtes une femme et vous êtes majeur';
    } elseif ($genre == "Femme" AND $age < 18) {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
};
Identification($age_participant, $genre_participant);

echo '</section>';

//Exercice 8
//Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
//Tous les paramètres doivent avoir une valeur par défaut.
echo '<section><h2>Exercice 8</h2>';
$UN = 10;
$DEUX = 20;
$TROIS = 30;
function addition($arg_UN, $arg_DEUX, $arg_TROIS) {
    return $arg_UN + $arg_DEUX + $arg_TROIS;
};
function verification($arg_UN, $arg_DEUX, $arg_TROIS) {
    if (is_int($arg_UN) AND is_int($arg_DEUX) AND is_int($arg_TROIS)) {
        $resultat = addition($arg_UN, $arg_DEUX, $arg_TROIS);
        echo $resultat;
    }
};
verification($UN, $DEUX, $TROIS);

echo '</section>';