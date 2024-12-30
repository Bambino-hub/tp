<?php

namespace App\core;

class Response
{
    public function setStatus(int $status)
    {
        return http_response_code($status);
    }
}
