<?php 
    namespace namespace Projeto\TI23T\php;

    class Funcao{
        //Encapsulamneto = EVITAARRRRRRR que outras classes do projeto acessam diretamente as suas variáveis
        private int $num1;
        private int $num2;
        private int $resultado;

        //Construtor = Instanciar as variáveis = Dar Valores Iniciais
        public function __construct(int $resultado){
            $this->resultado = 0;
        }//Fim do construtor

        public function coletar(int $num1, int $num2){
            $this->num1 = $num1;
            $this->num1 = $num2;
        }//Fim do coletar

        //Métodos modificadores(SET) e acesso(GET)
        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//Fim do set

        //Métodos - somar, subtrair, multiplicar, dividir
        public function somar(){
            $this->resultado = $this->num1 + $this->num2;
        }//Fim do método Somar

        public function subtrair(){
            $thi->resultado = $this->num1 - $this->num2;
        }//Fim do método Subtrair

        public function multiplicar(){
            $this->resultado = $this->num1 * this->num2;
        }//Fim do método Multiplicar

        public function dividir(){
            if($this->num2 <= 0){
                $this->resultado = "Impossível dividir por zero!";

            }else{
                $this->resultado = $this->num1 / $this->num2;
            }
        }//Fim do método Dividir

    }//Fim da classe Funcao

?><!--Fechamento da TAG PHP-->