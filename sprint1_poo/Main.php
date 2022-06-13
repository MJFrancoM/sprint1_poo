<?php 

require 'Shape.php';
require 'Rectangulo.php';
require 'Triangulo.php';

echo '<h1>Cálculo de Figuras Geométricas</h1>';

echo '<h3>Triángulo</h3>
<img src="imagenesPooNew\triangulo2.png" 
alt="Diagrama de un triángulo"
height="120">';

$triangulo = new Triangulo(7,9);

echo '<p>El área del ' . get_class($triangulo) . ' es: <mark>' . $triangulo->area() . '</mark></p>';

echo '<hr>';

echo '<h3>Rectángulo</h3>
<img src="imagenesPooNew\rectangulo.png" 
alt="Diagrama de un rectángulo"
height="120">';

$rectangulo =new Rectangulo(7,11);

echo '<p>El área del ' . get_class($rectangulo) . ' es: <mark>' . $rectangulo->area() . '</mark></p>';



?>
