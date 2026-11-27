
<?php

// 4.1.1. SINTAXIS DE PHP

echo "=== SINTAXIS DE PHP ===<br>";

$nombre = "Carlos";
$edad = 20;

echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";

if ($edad >= 18) {
    echo "Es mayor de edad<br>";
} else {
    echo "Es menor de edad<br>";
}


// 4.1.2. ESTRUCTURAS REPETITIVAS

echo "<br>=== ESTRUCTURAS REPETITIVAS ===<br>";

// FOR
echo "Ciclo FOR:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Numero: " . $i . "<br>";
}

// WHILE
echo "<br>Ciclo WHILE:<br>";
$i = 1;

while ($i <= 5) {
    echo "Numero: " . $i . "<br>";
    $i++;
}

// DO WHILE
echo "<br>Ciclo DO WHILE:<br>";
$i = 1;

do {
    echo "Numero: " . $i . "<br>";
    $i++;
} while ($i <= 5);


// 4.1.3. POO (ATRIBUTOS Y METODOS)

echo "<br>=== PROGRAMACION ORIENTADA A OBJETOS ===<br>";

class Persona {

    // Atributos
    public $nombre;
    public $edad;

    // Metodo
    public function presentarse() {
        echo "Mi nombre es " . $this->nombre . 
             " y tengo " . $this->edad . " años.<br>";
    }
}

// Crear objeto
$persona1 = new Persona();

$persona1->nombre = "Carlos";
$persona1->edad = 20;

$persona1->presentarse();


// 4.1.4. HERENCIA

echo "<br>=== HERENCIA ===<br>";

// Clase padre
class Animal {

    public $nombre;

    public function comer() {
        echo $this->nombre . " esta comiendo.<br>";
    }
}

// Clase hija que hereda de Animal
class Perro extends Animal {

    public function ladrar() {
        echo $this->nombre . " esta ladrando.<br>";
    }
}

// Crear objeto de la clase hija
$perro1 = new Perro();

$perro1->nombre = "Firulais";

// Metodo heredado
$perro1->comer();

// Metodo propio
$perro1->ladrar();

?>
