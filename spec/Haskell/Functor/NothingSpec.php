<?php

namespace spec\Haskell\Functor;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NothingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Functor\Maybe');
    }

    function it_should_return_nothing_if_fmapped_over()
    {
        $fn = function($a) { return $a + 1; };
        $this->fmap($fn)->shouldHaveType('Haskell\Functor\Nothing');
    }
}