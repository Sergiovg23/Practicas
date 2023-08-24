<?php

class Producto {
    private $nombre;
    private $precio;
    private $categoria;

    public function __construct($nombre, $precio, $categoria) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCategoria(){
        return $this->categoria;
    }
}


class Carrito {
    private $productos = array();

    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }

    public function getProductos() {
        return $this->productos;
    }
}



class PasarelaPago {
    public function procesarPago($monto) {
        return "Pago procesado exitosamente por $monto USD.";
    }
}


$producto1 = new Producto("Televisor", 500, "Hogar");
$producto2 = new Producto("Celular", 200, "Hogar");

$carrito = new Carrito();
$carrito->agregarProducto($producto1);
$carrito->agregarProducto($producto2);

$pasarela = new PasarelaPago();
$total = $carrito->calcularTotal();

$resultadoPago = $pasarela->procesarPago($total);

echo "Carrito de Compra";
echo PHP_EOL;
foreach ($carrito->getProductos() as $producto) {
    echo "Producto: ".$producto->getNombre() . " - Precio: $" . $producto->getPrecio()." - Categoria: " .$producto->getCategoria();
    echo PHP_EOL;
}

echo "Total a pagar: $" . $total;
echo PHP_EOL;
echo $resultadoPago;


?>