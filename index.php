<?php

require_once './jogador.php';
require_once './jogadores.php';

$cr7 = new Jogador();
$cr7->criar("Cristiano Ronaldo", "Manchester United", "Português");

$gabi = new Jogador ();
$gabi->criar("Gabriel Barbosa", "Flamengo", "Brasileiro");

$ney = new Jogador(); 
$ney->criar("Neymar", "PSG", "Brasileiro");

$messi = new Jogador(); 
$messi->criar ("Lionel Messi", "PSG", "Argentino");

$jogadores =  jogadores::getInstance();
$jogadores->setJogador([$cr7, $gabi]);

$jogadores2 =  jogadores::getInstance();
$jogadores2->setJogador([$ney, $messi]);



echo ("\n\nJogadores Selecionados na Instancia 01");
var_dump($jogadores);

echo ("\n\nJogadores Selecionados na Instancia 02");
var_dump($jogadores2);

?>