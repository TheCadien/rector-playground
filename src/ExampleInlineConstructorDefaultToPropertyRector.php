<?php

namespace SymfonyUg\RectorPlayground;

class ExampleInlineConstructorDefaultToPropertyRector
{
    private $firstAttr;

    private $secoundAttr;

    public function __construct()
    {
        $this->firstAttr = 'Symfony is cool!';
        $this->secoundAttr = 'Oliver is also cool!';
    }

}