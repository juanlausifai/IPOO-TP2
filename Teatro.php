<?php

Class Teatro{
    
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nombre, $direccion)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = [];
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get the value of funciones
     */ 
    public function getFunciones()
    {
        return $this->funciones;
    }

    /**
     * Set the value of funciones
     */ 
    public function setFunciones($funciones)
    {
        $this->funciones = $funciones;
    }

    public function cambiarNombreTeatro($nuevoNombre){

        $this->setNombre($nuevoNombre);
    }

    public function cambiarDireccion($nuevaDireccion){

        $this->setDireccion($nuevaDireccion);
    }

    public function cambiarNombreFuncion($busca, $nuevoNombre){

        $seCambio = false;

        foreach ($this->funciones as $key => $value) {
            
            if (strtolower($value->getNombre()) == strtolower($busca)) {
                $value->setNombre($nuevoNombre);
                $seCambio = true;
            }

        }

        return $seCambio;

    }

    public function cambiarPrecioFuncion($busca, $nuevoPrecio){

        $seCambio = false;

        foreach ($this->funciones as $key => $value) {

            if (strtolower($value->getNombre()) == strtolower($busca)) {
                
                $value->setPrecio($nuevoPrecio);
                $seCambio = true;
            }

        }

        return $seCambio;

    }


    public function __toString()
    {   

       $respuesta= "\n\n <-<-< Teatro ". $this->getNombre()." >->->\n Direccion: ". $this->getDireccion(). "\n. ".$this->mostrarFunciones() ."\n";

        return  $respuesta;
    }


    public function mostrarFunciones(){

        $arreglo="";

        foreach ($this->funciones as $key => $value) {

            $hr_inicio = $value->getHorario_inicio()[0];
            $min_inicio = $value->getHorario_inicio()[1];
            $hr_duracion_obra =$value->getDuracion_obra()[0];
            $min_duracion_obra =$value->getDuracion_obra()[1];

            $texto_nombre_funcion="Nombre de funcion: ".$value->getNombre()."\n";
            $texto_precio_funcion="Precio de funcion: ".$value->getPrecio()."\n";
            $texto_inicio="Hora de inicio: ". $hr_inicio.":".$min_inicio."\n";
            $texto_duracion_obra="Duracion de obra: ". $hr_duracion_obra.":".$min_duracion_obra."\n";

            $arreglo .=$texto_nombre_funcion.$texto_precio_funcion.$texto_inicio.$texto_duracion_obra."\n";
            
        }

        return $arreglo;
    }

   

}