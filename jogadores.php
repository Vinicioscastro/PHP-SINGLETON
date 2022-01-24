<?php

class jogadores{

    protected static $instance;
    private $jogador = [];

    private function __constructor(){}
    private function __clone(){}
    private function __wakeup(){}
    
    public static function getInstance (): self {
        if (empty (self::$instance))
            self::$instance = new self();
        return self::$instance;

    }

    public function setJogador($jogador){
        $this.jogador = array_merge($this->jogador, $jogador)
    }


}