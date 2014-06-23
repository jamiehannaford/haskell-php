<?php

namespace spec\Haskell\Functor\Maybe;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FunctorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Functor\FunctorInterface');
    }
}
