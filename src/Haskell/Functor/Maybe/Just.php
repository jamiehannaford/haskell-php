<?php

namespace Haskell\Functor\Maybe;

use Haskell\Type\HasInternalValueTrait;

class Just extends Maybe
{
    use HasInternalValueTrait;

    public function fmap($fn)
    {
        if (!is_callable($fn)) {
            throw new \InvalidArgumentException('Input must be callable');
        }

        return new self(call_user_func($fn, $this->value));
    }
}