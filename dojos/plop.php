<!-- Écrire une fonction qui ecrit:

    1 - "plop" dans le cas ou la première chaine de caractère passée en paramètre est égal à 'hello'
    2 - "plip" dans le cas ou la première chaine de caractère passée en paramètre est égal à 'world'
    3 - "plipplop" dans le cas ou le nombre de caractères de chaque chaine est egal
    4 - La chaine dans tous les autres cas -->

<?php 

// Fonction dans laquelle on déclare 2 valeurs $str1 et $str2;
// on compte le nombre de caractères avec strlen () sur $nb1 et $nb2 correspondant aux deux chaînes
// Si ces nbres sont identiques, on a plipplop
// si $str1 est == à "hello", alors cela donne plop.
// Si $str1 == "world", cela donne plip.
// else, la chaîne


function plop ($str1, $str2) {
	$nb1 = strlen($str1);
	$nb2 = strlen($str2);
	if ($nb1 == $nb2) {
		echo "plipplop";
	} 
	if ($str1 == "hello") {
		echo "plop";
	} elseif ($str1 == "world") {
		echo "plip";
	} else {
		echo $str1 . " " . $str2;
	}
}
plop ("hello", "dff");



/* corrigé

<?php
function plop ($str, $str_2) {
    // Je calcule le nb caractère de chaque chaine de caractère
     $longueur_str = strlen($str);
     $longueur_str2 = strlen($str_2);
    
     //Si chaine 1 == hello
    if ($str == 'hello') {
        echo 'plop';
    }
    //Sinon si chaine 1 == world
    elseif ($str == 'world') {
        echo 'plip';
    }
     //Sinon si longueur chaine 1 == longueur chaine 2
    elseif ($longueur_str == $longueur_str2){
        echo 'plipplop';
    }
    //Dans tous les autres cas
    else{
        echo $str .' '. $str_2;
    }
}

plop ('games', 'wolrd');
*/