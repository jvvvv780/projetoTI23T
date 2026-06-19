<?php
    namespace Projeto\ti23t\php;
    class Funcao
    {
        //encapsulamento = evitar que outras classes do projeto acesse diretamente as suas variaveis
        private int $num1;
        private int $num2;
        private int $resultado;


 
        public function __construct()
        {
            $this->resultado = 0;
        }//fim do construtor
 
        public function coletar(int $num1, int $num2, int $num3)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->num3 = $num3;
        }//fim do coletar
 
        //metodos modificadores(SET) e acesso(GET)
 
        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//fim do get
 
        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set
 
        //metodo somar
        public function somar()
        {
            $this->resultado = $this->num1 + $this->num2;
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }//fim do metodo somar
 
        //metodo subtrair
        public function subtrair()
        {
            $this->resultado = $this->num1 - $this->num2;
            return "<br>A subtração do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }//fim do metodo subtrair
 
        //metodo mutiplicar
        public function multiplicar()
        {
            $this->resultado = $this->num1 * $this->num2;
            return "<br>A multiplicação do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }
 
        //metodo dividir
        public function dividir()
        {
            if($this->num2 <= 0)
            {
                return "Impossivel dividir por 0";
            }
            else
            {
                $this->resultado = $this->num1 / $this->num2;
            }
            return "<br>A divisão do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }

        //método bhaskara
        public function bhaskara(int $a, int $b, int $c)
        {
            $delta = pow($b,2) - 4 * $a * $c;
            if($delta <0 ){
                return "Impossível calcular X1 e X2 de delta negativo, valor do delta: $delta";
            }else{
                $x1 = (-$b + sqrt($delta))/(2 * $a);
                $x2 = (-$b - sqrt($delta))/(2 * $a);
                return "<br>Delta: $delta<br>X1: $x1<br>X2: $x2";
            }
        }//Fim do bhaskara

        public function imc(float $peso, float $altura)
        {
            $imc = $peso / pow($altura, 2);
            if($imc < 18.5){
                return "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                return "Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                return "Sobrepeso";
            } else {
                return "Obesidade";
            }
        }//Fim do imc
            
        public function retangulo($area, $base, $altura){
            $base = 10.5;
            $altura = 5.0;

            // Calculando a área: Base x Altura
            $area = $base * $altura;

            // Exibindo o resultado
            echo "A área do retângulo é: " . $area;
        }


    }//fim da classe função
?> <!-- fechando a tag php-->