<?php

namespace Ciegate\CardConnect\Responses;

class CaptureResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
