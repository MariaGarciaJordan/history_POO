<?php
class Titan {
    public $nombre;
    public $altura;

    function __construct($nombre, $altura) {
        $this->nombre = $nombre;
        $this->altura = $altura;
    }

    function atacar() {
        echo "¡El titan " . $this->nombre . " de " . $this->altura . " metros está atacando!";
    }
}

$eren = new Titan("Eren Jaeger", 15);
$eren->atacar();
?>
