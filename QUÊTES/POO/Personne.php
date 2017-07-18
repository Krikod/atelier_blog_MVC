<?php

class Personne {
	public $nom;
	public $prenom;
	public $adresse;
	public $date_naissance;
	public $age;

	public function __construct($nom, $prenom, $adresse, $date_naissance){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->adresse = $adresse;
		$this->date_naissance = $date_naissance;
		$this->age = $this->calculer_age($date_naissance);
	}

	public function __toString() {
		return '<p><strong>Information sur la nouvelle personne:</strong><br>' . $this->nom 
		. ' ' . $this->prenom . '<br>' . $this->adresse . '<br> Né le ' . $this->date_naissance . '</p><p>Age :' . $this->age . '</p>';
	}

	public function setAdresse($nouvelle_adresse) {
		if ($nouvelle_adresse != NULL) {
			$this->adresse = $nouvelle_adresse;
		}
	}

	public function calculer_age($date_naissance) {
		$age = ((time() - strtotime($date_naissance)) / 3600 / 24 / 365.242);
		$age_arrondi = floor($age);

		return $age_arrondi;
	}
}


// On instancie une nouvelle Personne
$lagaffe = new Personne('Lagaffe', 'Gaston', '2, rue de la gare', '27-05-1949');

echo $lagaffe;

$lagaffe->setAdresse('5, rue nouvelle'); 

echo $lagaffe;
