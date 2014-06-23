<?php

namespace spec\Haskell\Functor;

use Haskell\Type\ListType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ListFunctorSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new ListType([1, 2, 3]));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Functor\FunctorInterface');
    }

    function it_should_map_array_of_fns_in_non_deterministic_manner()
    {
        $fns = [
            function ($x) { return ++$x; },
            function ($x) { return $x * 0; },
            function ($x) { return pow($x, 2); }
        ];

        $this->fmap($fns)->shouldReturn([
            2, 3, 4,
            0, 0, 0,
            1, 4, 9
        ]);
    }
}