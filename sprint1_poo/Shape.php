<?php 
abstract class Poligono {
    protected $lados;
    protected $base;
    protected $altura;

    public function __construct($base,$altura)
    {
    
        $this->base= $base;
        $this->altura= $altura;

    }

    abstract protected function area();
}


?>