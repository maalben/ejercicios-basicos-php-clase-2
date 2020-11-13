<?php 

class Consecutivos{

    /**
     * Atributos
     */
    private $numero;


    /**
     * Métodos setter y getter
     */

     public function getNumero(){
         return $this->numero;
     }

     public function setNumero($valor){
        $this->numero = $valor;
     }

     /**
      * Métodos de acción
      */

      public function listarNumeros(){

            for($i=1; $i <= $this->getNumero(); $i++){
                echo $i . " ";
            }

      }

      public function sumaConsecutivos(){

            $suma = 0;
            for($i=1; $i <= $this->getNumero(); $i++){
                $suma = $suma + $i;
            }

            return $suma;

      }

}

?>
