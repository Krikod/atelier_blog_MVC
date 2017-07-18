<?php 
 /*
Hamming

Write a program that can calculate the Hamming difference between two DNA strands.

A mutation is simply a mistake that occurs during the creation or copying of a nucleic acid, 
in particular DNA. Because nucleic acids are vital to cellular functions, mutations tend to 
cause a ripple effect throughout the cell. Although mutations are technically mistakes, a very
rare mutation may equip the cell with a beneficial attribute. In fact, the macro effects of 
evolution are attributable by the accumulated result of beneficial microscopic mutations over 
many generations.

The simplest and most common type of nucleic acid mutation is a point mutation, which replaces 
one base with another at a single nucleotide.

By counting the number of differences between two homologous DNA strands taken from different 
genomes with a common ancestor, we get a measure of the minimum number of point mutations that 
could have occurred on the evolutionary path between the two strands.

This is called the 'Hamming distance'.

It is found by comparing two DNA strands and counting how many of the nucleotides are different 
from their equivalent in the other string.

    GAGCCTACTAACGGGAT
    CATCGTAATGACGGCCT
    ^ ^ ^  ^ ^    ^^

The Hamming distance between these two DNA strands is 7.

Implementation notes

The Hamming distance is only defined for sequences of equal length. This means
that based on the definition, each language could deal with getting sequences
of equal length differently.

#########################################
TRADUCTION
#########################################

Objectif:

--> Compter le nombre de différences entre deux chaînes de caractères.

Méthode:

--> Comparer deux brins d'ADN et compter combien de nucléotides sont différents de leur équivalent 
dans l'autre chaîne.

	GAGCCTACTAACGGGAT
    CATCGTAATGACGGCCT

La distance de Hamming entre ces deux chaînes est 7.
Elle n'est pas seulement définie par des brins de longueur égale.


###########################################
int  ( string $first , string $second [, float &$percent ] )
##############################################
*/
function hamming($brin1, $brin2)
{
	if (strlen($brin1) == strlen($brin2))
		{
		
		$tab1 = str_split($brin1);
		$tab2 = str_split($brin2);
		$diff = 0;

		for ($i=0; $i < strlen($brin1); $i++) 
			{ 
				
				if ($tab1[$i] != $tab2[$i]) 
					{
					$diff++;
					}
			}
				echo 'Le nombre de différences de caractères entre ces 2 brins est de ' . $diff . '.';
		} 
	else
		{
		echo 'ERREUR : le programme ne peut comparer pour l\'instant que deux brins de longueur égale.';
		}
}

hamming('vcdse', 'poiuy');
