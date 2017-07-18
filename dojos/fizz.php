<!-- 1 - "fizz" dans le cas ou le nombre saisi en paramètre de la fonction est un multiple de 3
2 - "buzz" dans le cas ou le nombre saisi en paramètre de la fonction est un multiple de 5
3 - "fizzbuzz" dans le cas ou le nombre saisi est à la fois un multiple de 3 et de 5
4 - Le nombre dans le cas ou ce dernier est ni un multiple de 3, ni un multiple de 5 -->



<?php

function mult ($int) {
	if ($int % 3 == 0 && $int % 5 == 0) {
		echo "fizzbuzz";
	} elseif ($int % 3 == 0) {
		echo "fizz";
	} elseif ($int % 5 == 0) {
		echo "buzz";
	} else {
		echo "$int";
	}
}

mult (101);


/* Corrigé
<?php 

function fizz ($int) {

    // Si $int est divisible par 15
    if ($int % 15 == 0){
        echo 'fizzbuzz';
    }
    // Si $int est divisible par 3
    elseif($int % 3 == 0){
        echo 'fizz';
    } 
    // Si $int est divisible par 5
    elseif ($int % 5 == 0) {
        echo 'buzz';
    }
    // Sinon on affiche $int
    else{
        echo $int;
    }
}

fizz (11);

*/