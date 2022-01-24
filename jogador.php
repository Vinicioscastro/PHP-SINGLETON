<?php

class jogador{
    public $nome;
    public $time;
    public $nacionalidade

    public function __constructor( $nome , $time, $nacionalidade){
        $this->nome = $nome;
        $this->time = $time;
        $this->nacionalidade = $nacionalidade;
    }
}