<?php

namespace App\Helper;

class Redirect
{
    function __construct(string $url)
    {
        header("Location:".$url);
    }
}
