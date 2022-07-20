<?php

require_once 'app/autoload.php';
require_once 'app/config/config.php';
/**
 * Array responsavel por registrar todas funções que se 
 * encontram na pasta utils.
 */

$loadUtils = [
    "utils"
];
/**
 * Carregando as funções registrada
 */
foreach ($loadUtils as $util) {
    require_once __DIR__ . '/app/utils/'.$util.'.php';
}