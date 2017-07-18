<?php

/* Ecrire une fonction qui ecrit:

1 - "up" dans le cas ou le nombre de caractères de la chaine  passée en paramètre de la fonction est supérieur à 5
2 - "down" dans le cas ou le nombre de caractères de la chaine passée en paramètre de la fonction est inférieur à 5
3 - "upSmall" dans le cas ou le nombre de caractères de la chaine passée en paramètre de la fonction est supérieur à 5 et inférieur à 10
4 - "upBig" dans le cas ou le nombre de caractères de la chaine passée en paramètre de la fonction est supérieur à 5 et inférieur à 15
5 - La chaine dans tous les autres cas

*/

function compare ($str) {
	$lg = strlen($str);
	if ($lg > 5 && $lg < 10) {
		echo "upSmall";
	} elseif ($lg > 5 && $lg < 15) {
		echo "upBig";
	} elseif ($lg > 5) {
		echo "up";
	} elseif ($lg < 5) {
		echo "down";
	} else {
		echo $str;
	}
}

compare ("kdv,sdjjsnjj");
/*
<?php // J'ouvre ma balise php

// Je déclare ma fonction
function compare ($str){

    // Je compte le nb de caractère dans ma chaine
    $nbcarac=strlen ($str);

    //  si le nb de caractère de la chaine est supérieur à 5 et inférieur à 10, on affiche upSmall
    if ($nbcarac > 5 && $nbcarac < 10) {
        echo 'upSmall';
    }

    // Si le nb de caractère de la chaine est supérieur à 5 et inférieur à 15, on affiche upBig
    elseif ($nbcarac > 5 && $nbcarac < 15){
        echo 'upBig';
    }

    // Sinon si le nb de caratères de la chaine est supérieur à 5, on affiche up
    elseif ($nbcarac > 5 ){
        echo 'Up';
    }

    // Sinon si le nb de caratère de la chaine est inférieur à 5, on affiche down
    elseif ($nbcarac < 5 ){
        echo 'Down';
    }

    // Sinon on affiche la chaine
     else { 
         echo $str;
    }
}

// J'appelle ma fonction
compare ('bonjo');


// Je déclare ma fonction
function compare2 ($str){

    // Je compte le nb de caractère dans ma chaine
    $nbcarac=strlen ($str);

    // Si nb caractère supérieur à 5
    if ($nbcarac > 5){

        // Si nb caractère inférieur à 10
        if ($nbcarac < 10){
            echo "upSmall";
        }
        // Si nb caractère inférieur à 15
        elseif ($nbcarac < 15) {
            echo "upBig";
        }
        // Tous les autres cas, donc tous les nombres supérieur ou egal à 15
        else{
            echo "Up";
        }
    }

    // Sinon si le nb de caratère de la chaine est inférieur à 5, on affiche down
    elseif ($nbcarac < 5 ){
        echo 'Down';
    }

    // Sinon on affiche la chaine
     else { 
         echo $str;
    }
}

// J'appelle ma fonction
compare2 ('bonjo');

*/