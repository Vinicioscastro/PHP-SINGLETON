<?php

class Jogadores{

    protected static $instance;
    private $jogadores = [];

    private function __constructor(){}
    private function __clone(){}
    private function __wakeup(){}
    
    public static function getInstance (): self {
        if (empty (self::$instance))
            self::$instance = new self();
        return self::$instance;

    }

    public function setJogador($jogadores){
        $this->jogadores = array_merge($this->jogadores, $jogadores);
    }


}