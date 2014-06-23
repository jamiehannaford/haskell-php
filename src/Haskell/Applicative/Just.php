<?php

namespace Haskell\Applicative;

use Haskell\Functor\FunctorInterface;

class Just implements ApplicativeInterface
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getInternalValue()
    {
        return $this->value;
    }

    public function apply(ApplicativeInterface $f)
    {
        return $this->pure(
            call_user_func($this->value, $f)
        );
    }

    public function pure($a)
    {
        return new self($a);
    }
}