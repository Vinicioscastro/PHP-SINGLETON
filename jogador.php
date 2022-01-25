<?php

class Jogador{
    public $nome;
    public $time;
    public $nacionalidade;

    public function criar( $nome , $time, $nacionalidade){
        $this->nome = $nome;
        $this->time = $time;
        $this->nacionalidade = $nacionalidade;
    }
}

?>