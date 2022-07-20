<?php

namespace app\interfaces;
/**
 * IRouter interface
 */
interface IRouter 
{
    public function get (string $path, callable | string $handler): void;
    public function post (string $path, callable | string $handler): void;
    public function addNotFoundHandler ($handler): void;
    public function dispatch ();
}