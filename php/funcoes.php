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
 
        public function coletar(int $num1, int $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
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

        public function calcularImc(float $peso, float $altura)
        {
            $imc = 0;
            if($peso <= 0 || $altura <=0){
                return "Peso ou altura não estão corretos, informe um valor maior que zero!";
            }else{
                $imc = $peso / ($altura * $altura);
                if($imc <= 18.5){
                    return "Abaixo do peso normal, seu IMC é: ".$imc;
                }else if($imc > 18.5 && $imc <= 24.9){
                    return "Peso normal, seu IMC é: ".$imc;
                }else if($imc > 24.9 && $imc < 29.9){
                    return "Excesso de peso, seu IMC é: ".$imc;
                }else if($imc > 29.9 && $imc <= 34.9){
                    return "Obesidade classe I";
                }else{
                    return "Obesidade Classe II";
                }
            }
        }//Fim do imc
            
        public function retangulo(float $base, float $altura)
        {
            $area = 0;
            if($base <= 0 || $altura <= 0){
                return "Valor invalido, seu negrinho!";
            }else{
                $area = $base * $altura;
            }
            return "A área do retângulo é: " .$area;
        }//Fim do retangulo

        public function triangulo(float $base, float $altura)
        {
            $area = 0;
            if($base <= 0 || $altura <= 0){
                return "Valor invalido, vá pá casa vá!";
            }else{
                $area = ($base * $altura) /2;
            }
            return "A área do triângulo é: " .$area;
        }//Fim do triangulo

        public function imposto(float $preco)
        {
            $precoProduto = 0;
            if($preco <= 0){
                return "??? Sai daqui maluco";
            }else{
                return $preco * 1.18;
            }
            return "O preço do produto com imposto fica: " .$produto;
        }//Fim do imposto

        public function idadeemdias(int $dias)
        {
            $idade = 0;
            if($dias <= 0){
                return "Sai daqui feto";
            }else{
                return $dias * 365;
            }
            return "A idade convertida em dias é igual a: " .$dias;
        }//Fim do idadeemdias

        public function dobroNum(int $num)
        {
            $dobro = 0;
            if($num <= 0){
                return "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
            }else{
                return $num * 2;
            }
            return "O dobro da idade é: " .$num;
        }




    }//fim da classe função
?> <!-- fechando a tag php-->