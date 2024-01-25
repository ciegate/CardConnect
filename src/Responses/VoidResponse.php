<?php

namespace Ciegate\CardConnect\Responses;

class VoidResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
