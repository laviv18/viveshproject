<?php
class DB {
    private static $instance;  
    private $dbName;  

    private function __construct($dbName) {
        $this->dbName = $dbName;
    }

    public static function getInstance($dbName) {
        if (!self::$instance) {
            self::$instance = new self($dbName);
        }
        return self::$instance;
    }

    public function getDBName() {
        return $this->dbName;
    }
}

// Maak instanties van de DB
$db1 = DB::getInstance('Database1');
$db2 = DB::getInstance('Database2');
$db3 = DB::getInstance('Database3');
$db4 = DB::getInstance('Database4');

// Test de instanties
echo $db1->getDBName() . "\n";  
echo $db2->getDBName() . "\n";  
echo $db3->getDBName() . "\n"; 
echo $db4->getDBName() . "\n";  
?>
