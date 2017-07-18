<?php /* Ex1: Recette de cuisine
La mousse au chocolat vegan:
Temps de cuisson : 5 minutes
Pour 4 personnes:
- 100 g de chocolat
- 50 g de sucre
- 5 cl de lait d'amandes (ou noisettes, riz, coco ...)
- le jus d'une boite de conserve de pois chiche de 370ml
- 1 pincée de cannelle

Pour 8 personnes:
- 200 g de chocolat
- 100 g de sucre
- 10 cl de lait d'amandes (ou noisettes, riz, coco ...)
- le jus d'une boite de conserve de pois chiche de 74cl
- 1 pincée de cannelle

Ecrire une fonction qui renvoie la recette de cuisine de la mousse vegan en fonction du nombre d'invités.
Le nombre d'invité sera passé en parametre de la fonction et peut être compris entre 1 et 2000.

Bonus: Gérer les unitées
1000g ==> 1kg
100cl ==> 1l 

###############
# TRADUCTION #
###############

# Il y a un conflit pour la cannelle. Considérons qu'elle est définie proprotionnellement au nombre d'invités: 1 pincée pour 4 personnes. Le temps de cuisson augmente aussi pour de grosses quantités (à voir). Ou indiquer le nombre de gâteaux, 8 pers. max par gâteau (à voir). On considère que le nbre total de personnes est le nb d'invités + le cuisinier et son assistant.
100 cl ==> 1l
1000 ml ==> 1l
350 ml ==> 37 cl
1000g ==> 1kg

# Définir une fonction "recette", en paramètre le nombre d'invités "$nb_invit".
# Déclarer que $nb_invit est compris entre 1 et 2000.
# Définir les valeurs des ingrédients pour 4 personnes.
# Définir des valeurs correspondant à une personne, par division des valeurs précédentes.
# Les valeurs sont définies en grammes et cl, mais passerons dans le résultat en kg et l si ces unités sont atteintes.
# Appeler la fonction qui renvoit la recette de cuisine
*/

function recette ($nb_invit) {
	if ($nb_invit == 1) {
		echo "Désolé, <strong>il n'y a qu'un seul invité, ce qui est insuffisant</strong> pour réaliser cette recette. <strong>2 invités, c'est le minimum.<strong>";
		}	elseif ($nb_invit < 1) {
				echo "Désolé, <strong>il n'y a pas d'invités. Cette recette n'est réalisée qu'à partir de 2 invités</strong>, pas pour des prunes, car le cuisinier n'aime pas le chocolat.";
			} 
				elseif ($nb_invit >= 2000) {
					echo "Désolé, <strong>le nombre d'invités ($nb_invit) est trop important</strong> pour réaliser cette recette. Il faut <strong>moins de 2000 invités</strong>.";
				}  else {
					$choco_4 = 100;
					$sucre_4 = 50;
					$lait_4 = 5;
					$jus_4 = 37;
					$cannelle_4 = 1;

					$choco_1 = $choco_4 / 4;
					$sucre_1 = $sucre_4 / 4;
					$lait_1 = $lait_4 / 4;
					$jus_1 = $jus_4 / 4;
					$cannelle_1 = $cannelle_4 / 4;

					$nb_invit = $nb_invit + 2;

					$choco_total = $choco_1 * $nb_invit;
					$sucre_total = $sucre_1 * $nb_invit;
					$lait_total = $lait_1 * $nb_invit;
					$jus_total = $jus_1 * $nb_invit;
					$cannelle_total = $cannelle_1 * $nb_invit;

echo "<p><strong>Recette de mousse au chocolat vegan:<br>
		Temps de cuisson : 5 minutes<br>
		Pour $nb_invit personnes</strong> (dont le cuisinier et son assistant):</p>
		<p>- $choco_total g de chocolat<br>
		- $sucre_total g de sucre<br>
		- $lait_total cl de lait d'amandes (ou noisettes, riz, coco ...)<br>
		- le jus d'une boite de conserve de pois chiche de $jus_total cl<br>
		- $cannelle_total pincée(s) de cannelle</p>
		<p><strong>Bon appétit !</strong></p>";
	}
}

recette (150);


