<?php

namespace Haskell\Functor;

use Haskell\Type\ListType;
use Haskell\Type\HasInternalValueTrait;

class ListFunctor implements FunctorInterface
{
    use HasInternalValueTrait;

    public function fmap($functions)
    {
        if (!is_array($functions)) {
            throw new \InvalidArgumentException('Input must be an array of functions');
        }

        $output = [];

        foreach ($functions as $fn) {
            foreach ($this->value as $val) {
                $output[] = call_user_func($fn, $val);
            }
        }

        return $output;
    }
}