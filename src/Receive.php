<?php

namespace WAI\Receive;

class Receive
{
    public function __construct()
    {
    }

    // Build wonderful things
    public function example()
    {
        return 'example output and version is: '.config('receive.version');
    }

    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
