<?php

class Calculadora
{

    public function sumar($num1, $num2)
    {
        echo "Aqui vamos a hacer una función de sumar";
        echo "No tiene relevancia";
        return $num1 + $num2;
    }

    public function restar($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2){
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            throw new InvalidArgumentException("No se puede dividir entre cero");
        }
        

    }

    public function potencia($num1, $num2){
        return pow($num1, $num2);
    }
}

?>
