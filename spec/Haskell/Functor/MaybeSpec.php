<?php

namespace spec\Haskell\Functor;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FunctorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Functor\FunctorInterface');
    }
}
