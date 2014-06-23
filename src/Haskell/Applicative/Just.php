<?php

namespace Haskell\Applicative;

use Haskell\Type\HasInternalValueTrait;

class Just implements ApplicativeInterface
{
    use HasInternalValueTrait;

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