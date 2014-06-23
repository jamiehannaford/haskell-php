<?php

namespace Haskell\Functor;

class Nothing extends Maybe
{
    public function fmap(callable $fn)
    {
        return new self();
    }
}