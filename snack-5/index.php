<?php
// Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.
// Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
// oltre a richiamare il costruttore del parent. 
// Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
// su schermo le differenze. 

class Indumento{
    public $materiale;

    public function __construct($_materiale){
			$this->materiale = $_materiale;
		}
    
    public function setMateriale($materiale){
        $this->materiale = $materiale;
    }
};

class Scarpa extends Indumento{
    public $taglia;

    public function __construct($materiale, $taglia)
		{
			$this->setMateriale($materiale);
			$this->taglia=$taglia;
		}
};

class Cappello extends Indumento{
    public $diametro;

    public function __construct($materiale, $diametro)
		{
			$this->setMateriale($materiale);
			$this->diametro=$diametro;
		}
};

$a = new Scarpa('Cuoio', 42);
$b = new Cappello('Coccodrillo', '15cm');
var_dump($a, $b);