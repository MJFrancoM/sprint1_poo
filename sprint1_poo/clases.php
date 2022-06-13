<?php 
    class Empleado{ 

        public $nombre;
        public $sueldo;

        public function initialize($nombEmpleado,$sueEmpleado){

            $this->nombre = $nombEmpleado;
            $this->sueldo = $sueEmpleado;

        }
        public function print (){

            if($this->sueldo>6000){
                $mensaje= "$this->nombre tiene que pagar impuestos <p>";
            }else{
                $mensaje="$this->nombre no tiene que pagar impuestos <p>";
            }
            return $mensaje;         

        }
    }
    $empleado1= new Empleado();
    $empleado1->initialize("Petra",6000);
    echo $empleado1->print();

    $empleado2= new Empleado();
    $empleado2->initialize("Pedro",6001);
    echo $empleado2->print();
    
    $empleado3= new Empleado();
    $empleado3->initialize("Luis",4500);
    echo $empleado3->print();

    $empleado4= new Empleado();
    $empleado4->initialize("Elena",7500);
    echo $empleado4->print();

?>