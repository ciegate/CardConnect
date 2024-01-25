<?php

namespace Ciegate\CardConnect\Exceptions;

class CardConnectException extends \Exception
{
    public $response = null;

    public function __construct($response)
    {
        $this->response = $response;
    }
}
