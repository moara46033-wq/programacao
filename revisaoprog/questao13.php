<?php
class Temperatura {

    private $celsius;

    public function __construct($celsius) {
        $this->celsius = $celsius;
    }

    public function getCelsius() {
        return $this->celsius;
    }

    public function setCelsius($celsius) {
        $this->celsius = $celsius;
    }

    public function paraFahrenheit() {
        return ($this->celsius * 9 / 5) + 32;
    }

    public function paraKelvin() {
        return $this->celsius + 273.15;
    }
}

$t = new Temperatura(37);

echo "Celsius: " . $t->getCelsius() . "<br>";
echo "Fahrenheit: " . $t->paraFahrenheit() . "<br>";
echo "Kelvin: " . $t->paraKelvin() . "<br><br>";


?>