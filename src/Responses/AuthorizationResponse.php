<?php

namespace Ciegate\CardConnect\Responses;

class AuthorizationResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
