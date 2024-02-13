<?php
class Brujo {
    public $nombre;
    public $casa;
    public $varita;

    function __construct($nombre, $casa, $varita) {
        $this->nombre = $nombre;
        $this->casa = $casa;
        $this->varita = $varita;
    }

    function lanzar_hechizo($hechizo) {
        echo $this->nombre . " lanza el hechizo " . $hechizo . " con su varita " . $this->varita . "!";
    }
}

$harry = new Brujo("Harry Potter", "Gryffindor", "Acebo con pluma de fénix");
$harry->lanzar_hechizo("Expelliarmus");
?>
