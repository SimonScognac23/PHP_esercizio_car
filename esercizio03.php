<?php

// Classe Car
class Car {
    private $num_telaio;
    private $license;
    private $fuel_type;


    // Costruttore per inizializzare il numero di telaio, la targa e il tipo di benzina
    public function __construct($num_telaio, $license, $fuel_type) {
        $this->num_telaio = $num_telaio;
        $this->license = $license;
        $this->fuel_type = $fuel_type;
    }


    // Metodo per ottenere il numero di telaio
    public function getNumTelaio() {
        return $this->num_telaio;
    }


    // Metodo per ottenere la targa
    public function getLicense() {
        return $this->license;
    }


    // Metodo per ottenere il tipo di benzina
    public function getFuelType() {
        return $this->fuel_type;
    }
}









// Classe Fiat estende la classe Car
class Fiat extends Car {

    protected $name;

    // Costruttore per inizializzare nome della marca, targa, numero di telaio e tipo di benzina
    public function __construct($__name, $__num_telaio, $__license, $__fuel_type) {

        parent::__construct($__num_telaio, $__license, $__fuel_type); // tramite parent accedo alla classe genitore

        $this->name = $__name;  
    }

    // Metodo per stampare la descrizione della macchina
    public function printCarInfo() {

        echo "La mia auto è una {$this->name}, con la targa {$this->getLicense()} e il numero di telaio {$this->getNumTelaio()}.\n";
        
        echo "Il tipo di carburante utilizzato è: {$this->getFuelType()}.\n";

    }
}




// Creazione di istanze di oggetti
$car = new Fiat("Opel", "ND 123 OJ", "1234",  "Benzina");
$car2 = new Fiat("Fiat", "NO 153 OB", "9999", "Diesel");






// Chiamata al metodo per stampare le informazioni delle macchine
$car->printCarInfo();
$car2->printCarInfo();

?>
