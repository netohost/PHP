<?php

    //Php = Personal Home Page

    //Variáveis

    $nome = 'João';
    
    echo 'Meu nome é' .$nome;

    //Variável de variável
    
    $nome = 'João';

    $Joao = 'Blabla';

    echo 'Meu nome é' .$$Joao;
    
    //Concatenar
    //Comparar Valores
    $nome = 'João';

    $Joao = 'BlaBla';

    if($nome == 'Joao'){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    }
    // >= <= == != 
    
    $idade = '26';

    if($isade != 26){
        echo 'Verdadeiro!';
    }else{
        echo 'Falso.';
    }

    //Looping's

    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo '<hr>';
    }

    $i = 0;
    while($i <10){
        echo $i;
        echo '<br>';
        $i++;
    }

    //Funções

    printNumero (); //Variável//);
    function printNumber($num){
        echo $num;
    }

    //Classes

    class Pessoa{
        public $nome; 
        public $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function nprintNomeEIdade(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }
    }

    $pessoa = new Pessoa('João', '21');

    $pessoa->printNomeEIdade();


?>