<?php 

class Person {
	var $firstName;
	var $lastName;


	function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	function fullName() {
		return $this->firstName . ' '. $this->lastName;
	}
}

$person1 = new Person('Diego','Delfin');


$person2 = new Person('Eduardo', 'Rivera');

echo "{$person1->fullName()} es amigo de {$person2->fullName()}"


 ?>
