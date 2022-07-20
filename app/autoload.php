<?php

/**
 * Funcão para carregar as classes automáticamente atraves do namespace 
 *
 * @param [string] $class_name
 * @return void
 */

spl_autoload_register(function(string $class_name): void {
    $class = str_replace('\\','/',dirname(__FILE__,2) . DIRECTORY_SEPARATOR . $class_name . ".php");
    if (file_exists($class)) {
        require_once $class;
    }
});