<?php

namespace App\Classes;

use App\Classes\Parsers\RBKParser;

class Parser
{
    private $parser;

    public function __construct()
    {
        $this->parser = new RBKParser();
    }

    public function Parse()
    {
        $this->parser->Parse();
    }
}
