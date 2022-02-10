<?php
    class clase{
     
       public $atributoInicializado = 0;
       public $atributoSinInicializar;
       private $atributoPrivado='Soy privado y solo una funcion de la clase puede acceder a mi';
       protected $atributoProtegido='Estoy protejido';
       
       public function inicializarAtributo($value=33){
           $this->atributoSinInicializar= $value; 
       }

       public function mostrarDatos(){
            echo $this->atributoInicializado.'<br/>';
            echo $this->atributoSinInicializar.'<br/>'; 
       }

       public function mostrarPrivado(){
           echo $this->atributoPrivado;
       }

       public function mostrarProtegido(){
           echo $this->atributoProtegido;
       }

       public function sumar($n1=0, $n2=0){
            echo $n1+$n2;
       }

    }

    $objetoDeClase = new clase();
    
    $objetoDeClase->sumar(2,5);
    $objetoDeClase->inicializarAtributo();
    $objetoDeClase->mostrarDatos(); 
    echo $objetoDeClase->atributoSinInicializar;

    try {
        echo $objetoDeClase->atributoProtegido.'<br/>';
    } catch (\Throwable $th) {
        echo $th.'<br/>';
    }

    try{
        echo $objetoDeClase->atributoPrivado.'<br/>';
    }catch(\Throwable $err){
        echo $err.'<br/>';
    }

    $newObject = new clase();

    $newObject->mostrarDatos();
    $newObject->sumar(25,25);
    $newObject->sumar(25);





?>