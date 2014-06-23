<?php

namespace spec\Haskell\Functor\Maybe;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JustSpec extends ObjectBehavior
{
    const VALUE = 'foo';

    function let()
    {
        $this->beConstructedWith(self::VALUE);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Functor\Maybe\Maybe');
    }

    function it_has_internal_value()
    {
        $this->getInternalValue()->shouldReturn(self::VALUE);
    }

    function it_should_execute_fmap_and_return_a_just()
    {
        $fn = function ($a) {};
        $this->fmap($fn)->shouldReturnAnInstanceOf('Haskell\Functor\Maybe\Just');
    }

    function it_should_execute_fmap_over_its_internal_value()
    {
        $fn = function ($a) { return $a . '!!!'; };

        $this->fmap($fn)->getInternalValue()->shouldReturn('foo!!!');
    }
}