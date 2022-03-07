<?php
/**
 * 
 * 
 * 
 */



namespace Stannp\API;
use Stannp\StannpPHP as StannpPHP;


class User extends StannpPHP
{
    /**
     * Return info about user
     * 
     * @return JSON Encoded JSON object
     */
    public function me() 
    {
        $path = "/users/me";

        return $this->getRequest($path);
    }

    /**
     * Return balance on account
     * 
     * @return JSON Encoded JSON object
     */
    public function balance() 
    {
        $path = "/accounts/balance";

        return $this->getRequest($path);
    }
}