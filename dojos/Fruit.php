<?php
/**
* Définition de la classe fruit
*/
class Fruit {

		public $color;
		private $name;
		private $state = 0;
		private $season;
	
	public function setName($name) {
		$this->name = $name; 
		return $this;
	}

	public function getName() {
		return $this->name;
	}

	public function setState($state) {
		
		$this->state = $state;
		return $this;
	}

	public function getState() {
		return $this->state;
	}

	public function setSeason($season) {
		$this->season = $season;
		return $this;
	}

	public function getSeason() {
		return $this->season;
	}

	public function __toString() {
		$str = 'This fruit is ' . $this->color . ', it\'s a(n) ' . $this->name . ' , its state is ' . $this->state . ' (per 5), ' . 'and its season is ' . $this->season; 
		return $str;
	}

	public function __construct($color, $name, $state, $season)
	{
		$this->color = $color;
		$this->name = $name;
		$this->season = $season;
		if ($state <= 5) {
			$this->state = $state;
		}
	}
}