<?php

namespace Haskell\Functor\Maybe;

class Nothing extends Maybe
{
    public function fmap($fn)
    {
        return new self();
    }
}