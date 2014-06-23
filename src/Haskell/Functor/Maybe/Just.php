<?php

namespace Haskell\Functor\Maybe;

class Just extends Maybe
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function fmap(callable $fn)
    {
        return new self(call_user_func($fn, $this->value));
    }

    public function getInternalValue()
    {
        return $this->value;
    }
}