<?php
class Animal {
	public function __construct() {
	  echo 'Een dier is geboren';   
	}

	public function sleep() {
		echo 'Dit dier slaapt';
	}

	public function eat() {
		echo 'Dit dier eet';
	}

}
	
class Fish extends Animal {
	// Gebruikt de default constructor

	public function swim() {
		echo 'Dit dier kan zwemmen';
	}
}
class bird extends animal {
    public function fly() {
        echo 'Dit beest kan vliegen';
    }

	}
	

Class parrot extends bird {
	public function plant() {
		echo 'Dit beest kan vliegen';
	}
}

class Eagle extends bird {
	public function meat() {
		echo 'Dit beest kan vliegen';
	}
}

echo("Fish");
echo("<br>");
$myFish = new Fish();
echo("<br>");
$myFish->eat();
echo("<br>");
$myFish->swim();
echo("<br>");
$myFish->sleep();
echo("<br><br>");
echo("Bird");
echo("<br>");
$myBird = new Bird();
echo("<br>");
$myBird->eat();
echo("<br>");
$myBird->fly();
echo("<br>");
$myBird->sleep();
echo("<br><br>");
echo("Parrot");
echo("<br>");
$myParrot = new parrot();
echo("<br>");
$myParrot->plant();
echo("<br>");
$myParrot->fly();
echo("<br>");
$myParrot->sleep();
echo("<br><br>");
echo("Eagle");
echo("<br>");
$myEagle = new eagle();
echo("<br>");
$myEagle->meat();
echo("<br>");
$myEagle->fly();
echo("<br>");
$myEagle->sleep();

echo("<br><br>");

Class User {

	public static $count = 0;

	public $name;
	
	public $age;
	
	public function __construct($name,$age) {
	
	$this->name = $name;
	
	$this->age = $age;
	
	echo "<b>$this->name</b><br>";

	self::$count++;
	echo "Aantal personen: " . self::$count . "<br>";

	}
	
	public function say($message) {
	
	echo $this->name . ': ' . $message . '<br />';
	
	}
	
	}
	
	Class Worker extends User {
	
	public $salery;
	
	public function saySalery() {
	
	$this->say('Ik verdien ' . $this->salery . ' euro per maand.');
	
	}
	
	public static function dogBark() {
	
	echo 'Woef! Woef!<br />';
	
	}
	
	}
	
	$piet = new Worker('Piet',23);
	
	$piet->salery = 3000;
	
	$piet->say('Ik ben Piet.');
	
	$piet->saySalery();
	
	Worker::dogBark();
	
	$klaas = new Worker('Klaas',22);
	
	$bert = new Worker('Bert',30);









?>