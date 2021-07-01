<?php

namespace Src\Helper;

class Redirect
{   
    function refresh(string $url) {
        header("refresh:0.1; url=". $url);
    }

    function location(string $url) {
        header("Location:" . $url);
    }
}
