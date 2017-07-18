<?php /*
Ex2: Compétition

Les participants ayant:
1. Un age compris entre 9(inclus) et 11(inclue) ans feront partie de la catégorie Poussin
2. 12 et 13 ans feront partie de la catégorie Benjamin
3. 14 et 15 ans feront partie de la catégorie Minime
4. 16 et 17 ans feront partie de la catégorie Cadet
5. Un age entre 18(inclus) et 20(inclus) ans feront partie de la catégorie Junior
6. Un age supérieur à 21 ans (inclus) feront partie de la catégorie Senior.

Poid de référence:
1. Poussin ==> 32kg
2. Benjamin ==> 41kg
3. Minime ==> 50kg
4. Cadet ==> 60kg
5. Junior ==> 68kg
6. Senior ==> 74kg

Si le participant pèse 10kg de plus que la poid de référence par catégorie, il passe dans la catégorie supérieur.
De même, si le participant pèse 10kg de moin que le poid de référence, il passe dans la catégorie d'en dessous.

Ecrire une fonction qui renvoie la catégorie correspondant à l'age et au poid passés en paramètre de la fonction.

Exemple:
Participant: 16ans, 64kg
La fontion renvoie "Cadet"

Participant: 17ans, 72kg
La fonction renvoie Junior */


function compet ($age, $poids) {
	if (($age >= 9 && $age <= 11) && ($poids > 22 && $poids < 42)) {
		echo "Votre catégorie sera Poussin";
	} elseif ($poids <= 22 || $age < 9) {
		echo "Vous ne pouvez participer à la compétition.";
	} elseif (($age >= 9 && $age <= 11) && $poids >= 42) {
		echo "Votre catégorie sera Benjamin.";
	} elseif (($age == 12 || $age == 13) && ($poids > 31 && $poids < 51)) {
		echo "Votre catégorie sera Benjamin.";
	} elseif (($age == 12 || $age == 13) && $poids <= 31) {
		echo "Votre catégorie sera Poussin.";
	} elseif (($age == 12 || $age == 13) && $poids >= 51) {
		echo "Votre catégorie sera Minime.";
	} elseif (($age == 14 || $age == 15) && ($poids > 40 && $poids < 60)) {
		echo "Votre catégorie sera Minime.";
	} elseif (($age == 14 || $age == 15) && $poids <= 40) {
		echo "Votre catégorie sera Benjamin.";
	} elseif (($age == 14 || $age == 15) && $poids >= 60) {
		echo "Votre catégorie sera Cadet.";
	} elseif (($age == 16 || $age == 17) && ($poids > 50 && $poids < 70)) {
		echo "Votre catégorie sera Cadet.";
	} elseif (($age == 16 || $age == 17) && $poids <= 50) {
		echo "Votre catégorie sera Minime.";
	} elseif (($age == 16 || $age == 17) && $poids >= 70) {
		echo "Votre catégorie sera Junior.";
	} elseif (($age >= 18 && $age <= 20) && ($poids > 58 && $poids < 78)) {
		echo "Votre catégorie sera Junior.";
	} elseif (($age >= 18 && $age <= 20) && $poids <= 58) {
		echo "Votre catégorie sera Cadet.";
	} elseif (($age >= 18 && $age <= 20) && $poids >= 78) {
		echo "Votre catégorie sera Senior.";
	} elseif ($age >= 21 && $poids > 64) {
		echo "Votre catégorie sera Senior.";
	} elseif ($age >= 21 && $poids <= 64) {
		echo "Votre catégorie sera Junior";
	}
}

compet (17, 72);

/*
function getCateg($age, $wheight){
    if ($age < 9){
        echo "Hors catégorie";
    }
    elseif ($age == 12 OR $age == 13){
        if ($wheight > 51) {
            echo 'Minime';
        }
        else if ($wheight < 31) {
            echo "Poussin";
        }
        else{
            echo "Benjamin";
        }
    }
    elseif ($age == 14 OR $age == 15){
        if ($wheight > 60) {
            echo 'Cadet';
        }
        else if ($wheight < 40) {
            echo "Benjamin";
        }
        else{
            echo "Minime";
        }
    }
    elseif ($age == 16 OR $age == 17){
        if ($wheight > 70) {
            echo 'Junior';
        }
        else if ($wheight < 40) {
            echo "Minime";
        }
        else{
            echo "Cadet";
        }
    }
    elseif ($age <= 9 OR $age >= 11){
        if ($wheight > 42) {
            echo 'Benjamin';
        }
        else if ($wheight < 22) {
            echo "Hors catégorie";
        }
        else{
            echo "Poussin";
        }
    }
    elseif ($age <= 18 OR $age >= 20){
        if ($wheight > 78) {
            echo 'Senior';
        }
        else if ($wheight < 68) {
            echo "Cadet";
        }
        else{
            echo "Junior";
        }
    }
    else{
        if ($wheight < 64){
            echo "Junior";
        }
        else{
            echo "Senior";
        }
    }
}

getCateg(11, 30);


*/