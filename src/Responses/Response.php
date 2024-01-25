<?php

namespace Ciegate\CardConnect\Responses;

use Ciegate\CardConnect\Responses\Traits\ChecksSuccess;
use Ciegate\CardConnect\Responses\Traits\ConvertsNumbers;

class Response extends Fluent
{
    use ChecksSuccess;
    use ConvertsNumbers;

    public function __construct(array $res)
    {
        parent::__construct($res);
        $this->convertNumbers();
    }
}
