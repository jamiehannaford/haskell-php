<?php

namespace Haskell\Functor\Maybe;

class Nothing extends Maybe
{
    public function fmap(callable $fn)
    {
        return new self();
    }
}