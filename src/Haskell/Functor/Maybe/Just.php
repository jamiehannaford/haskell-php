<?php

namespace Haskell\Functor\Maybe;

class Just extends Maybe
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function fmap($fn)
    {
        if (!is_callable($fn)) {
            throw new \InvalidArgumentException('Input must be callable');
        }

        return new self(call_user_func($fn, $this->value));
    }

    public function getInternalValue()
    {
        return $this->value;
    }
}