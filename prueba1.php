<?php

//Abstraccion
class carro{

    public $marca;
    public $maxvelo;
    public $modelo;

    public function arrancar(){
        echo "El $this->marca $this->modelo con una velocidad maxima de $this->maxvelo esta encendido";
    }
}

$carro1 = new carro();

$carro1 -> marca = "Toyota";
$carro1 -> maxvelo = 150;
$carro1 -> modelo = "corolla";
$carro1 -> arrancar();

echo PHP_EOL;

//herencia

class camion extends carro{
    public function cargar(){
        echo "El camion $this->marca modelo $this->modelo con velocidad maxima de $this->maxvelo ha sido cargado";
    }
}

$camion1 = new camion();

$camion1 -> marca = "mac";
$camion1 -> modelo = "truck";
$camion1 -> maxvelo = 90;
$camion1 -> cargar();

echo PHP_EOL;

//encapsulamiento
class Coche {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

$coche = new Coche("Ford", "Mustang");
echo $coche->getMarca() ." ". $coche->getModelo();

//polimorfismo
echo PHP_EOL;
class animal{
    public function ruido(){
        echo "hace un sonido";
    }
}

class perro extends animal{
    public function ruido(){
        echo "guau";
    }
}

class gato extends animal{
    public function ruido(){
        echo "miau";
    }
}

$Animal = new animal();
$Perro = new perro();
$Gato = new gato();

echo "Animal: ";
$Animal->ruido();
echo PHP_EOL;

echo "Perro: ";
$Perro->ruido();
echo PHP_EOL;

echo "Gato: ";
$Gato->ruido();


?>