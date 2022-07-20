<?php

namespace app\interfaces;

/**
 * IUser interface
 */
interface IUser 
{
    /**
     * login function
     *
     * @return void
     */
    public function login ();
    /**
     * logout function
     *
     * @return mixed
     */
    public function logout(): mixed;
}